<?php
namespace Model;

use Model\om\BasePfInformacoes;


/**
 * Skeleton subclass for representing a row from the 'pf_informacoes' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */

class PfInformacoes extends BasePfInformacoes
{

  /*
  */
  public function getInformacoes($id){

    if($id !== null){
      $query = $this->getById($id);
    }else{
      $query = PfInformacoesQuery::create()->find();
    }

    if(!is_null($query)){
      return $query->toArray();
    }else{
      throw new \Exception('Nenhum resultado encontrado', 400);
    }
  }

  /*

  */
  public function setInformacoes($id, $fields, $logId){

    $query = $this->getById($id);

    $log = new LogAtividade();
    $log->setValorAnterior(json_encode($query->toArray()));
    $log->setLogRequisicaoId($logId);

    foreach ($fields as $key => $value) {
      //verifica se o  campo existe na tabela
      $tableMap = new map\PfInformacoesTableMap();

      if($tableMap->hasColumnByPhpName($key)){
          $value = \Utils\Utils::sanitize($value, $tableMap->getColumnByPhpName($key)->getType());
          $column = 'set'.$key;
          $query->$column($value);
      }
    }

    if($query->validate()){
      $query->save();
      $log->setValorAtual(json_encode($query->toArray()));
      $log->save();
      return true;
    }else{
      $errorMsg = '';
      foreach ($query->getValidationFailures() as $failure) {
        $errorMsg .= $failure->getMessage() . "\n";
      }
      throw new \Exception($errorMsg, 400);
    }

  }


  /*

  */
  public function getInformacoesWithFilters($filters){

    $parsedFilters = \Utils\Utils::parseFilters($filters);

    if(is_array($parsedFilters)){
      //compara os filtos enviados com as colunas da tabela
      $tableMap = new map\PfInformacoesTableMap();
      $validFilters = array();
      foreach ($parsedFilters as $key => $value) {
        if($tableMap->hasColumnByPhpName($key)){
          $validFilters[$key] = $value;
        }
      }

      if(count($validFilters) > 0){
        $search =  PfInformacoesQuery::create();
        $search->setModelAlias('t');
        foreach ($validFilters as $key => $value) {
          $search->where("t.{$key} like ?", "%{$value}%");
        }

        $query = $search->find();
        if(count($query) > 0){
          return $query->toArray();
        }else{
          throw new \Exception('Nenhum resultado encontrado', 400);
        }

      }else{
        throw new \Exception('Parâmetros de busca inválidos', 400);
      }
    }
  }

  /*

  */
  private function getById($id){
    if($id !== null){
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    }
    return PfInformacoesQuery::create()->findPK($id);
  }

  public function getProfissional($id){
    $con = \Propel::getConnection();
    $sql = "SELECT * FROM siscad.view_profissional WHERE carteira_crmv = :id";
    $stmt = $con->prepare($sql);
    $stmt->execute(array(':id' => $id));
    $query = $stmt->fetch();
    if($query){
      return $query;
    }else{
      throw new \Exception('Nenhum resultado encontrado', 400);
    }
  }

  public function getProfissionalWithFilters($filters){

    $parsedFilters = \Utils\Utils::parseFilters($filters);

    if(is_array($parsedFilters) && count($parsedFilters) > 0){
      $where = "";
      $params = array();
      $flag = 0;

      foreach ($parsedFilters as $key => $value) {
        if($flag !== 0){
          $where .= " and ";
        }
        $where .= "{$key} = :{$key}";
        $params[":{$key}"] = $value;

        $flag = 1;
      }
      $con = \Propel::getConnection();
      $sql = "SELECT * FROM siscad.view_profissional WHERE {$where}";
      $stmt = $con->prepare($sql);
      try{
        $stmt->execute($params);
        $query = $stmt->fetchAll();
      }catch(\Exception $e){
        throw new \Exception('Parâmetros de busca inválidos', 400);
      }
      if($query){
        return $query;
      }else{
        throw new \Exception('Nenhum resultado encontrado', 400);
      }

      if(count($query) > 0){
        return $query->toArray();
      }else{
        throw new \Exception('Nenhum resultado encontrado', 400);
      }

    }else{
      throw new \Exception('Parâmetros de busca inválidos', 400);
    }
  }

}
