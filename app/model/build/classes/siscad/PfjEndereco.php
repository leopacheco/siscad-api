<?php
namespace Model;

use Model\om\BasePfjEndereco;


/**
 * Skeleton subclass for representing a row from the 'pfj_endereco' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */

class PfjEndereco extends BasePfjEndereco
{

  /*
  */
  public function getEnderecoM($id){

    if($id !== null){
      $query = $this->_getById($id);

      if(!is_null($query)){
        $response = $query->toArray();
        $response["pf_inscricao"] = $this->_getRelation(PfInscricaoQuery::create()->findPK($query->getFkIdPfInscricao()));
        $response["tab_uf"] = $this->_getRelation(TabUfQuery::create()->findPK($query->getFkIdTabUf()));
        $response["tab_correio"] = $this->_getRelation(TabCorreioQuery::create()->findPK($query->getFkIdTabCorreio()));

        return $response;
      }else{
        throw new \Exception('Nenhum resultado encontrado', 400);
      }

    }else{
      $query = $this->_getCollection();

      if(!is_null($query)){
        return $query->toArray();
      }else{
        throw new \Exception('Nenhum resultado encontrado', 400);
      }
    }

  }

  /*

  */
  public function setEnderecoM($id, $fields, $logId){

    $query = $this->_getById($id);

    $log = new LogAtividade();
    $log->setValorAnterior(json_encode($query->toArray()));
    $log->setLogRequisicaoId($logId);

    foreach ($fields as $key => $value) {
      //verifica se o  campo existe na tabela
      $tableMap = new map\PfjEnderecoTableMap();

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
  public function getEnderecoWithFilters($filters){

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
        $search =  PfjEnderecoQuery::create();
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
  private function _getById($id){
    $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    return PfjEnderecoQuery::create()->findPK($id);
  }

  private function _getCollection(){
    return PfjEnderecoQuery::create()->find();
  }

  private function _getRelation($obj){
    if(!is_null($obj)){
      return $obj->toArray();
    }else{
      return null;
    }
  }

}
