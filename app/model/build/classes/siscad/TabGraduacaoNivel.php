<?php
namespace Model;

use Model\om\BaseTabGraduacaoNivel;


/**
 * Skeleton subclass for representing a row from the 'tab_graduacao_nivel' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */

class TabGraduacaoNivel extends BaseTabGraduacaoNivel
{

  private $_columns = array("id_tab_graduacao_nivel" => array("sanitize"=>FILTER_SANITIZE_NUMBER_INT, "size"=>"5" , "required" => true),
                            "descricao" => array("sanitize"=>FILTER_SANITIZE_STRING, "size"=>"15")
                          );

  private $_valid = false;
  private $_errorMessage = '';
  /*

  */
  public function getGraduacaoNivel($id){

    if($id !== null){
      $query = $this->getById($id);
    }else{
      $query = TabGraduacaoNivelQuery::create()->find();
    }

    if(!is_null($query)){
      return $query->toArray();
    }else{
      throw new \Exception('Nenhum resultado encontrado', 400);
    }
  }

  /*

  */
  public function setGraduacaoNivel($id, $fields, $logId){

    $query = $this->getById($id);

    $log = new LogAtividade();
    $log->setValorAnterior(json_encode($query->toArray()));
    $log->setLogRequisicaoId($logId);

    foreach ($fields as $key => $value) {
      //verifica se o  campo existe na tabela
      if(array_key_exists($key, $this->_columns)){
          $value = $this->_sanitize($key, $value);

        if($this->_validate($key, $value)){
          $column = 'set'.\Utils\Utils::dashesToCamelCase($key);
          $query->$column($value);
        }
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
  public function getGraduacaoNivelWithFilters($filters){

    $parsedFilters = \Utils\Utils::parseFilters($filters);

    if(is_array($parsedFilters)){
      //compara os filtos enviados com as colunas da tabela
      $validFilters = array_intersect_key($parsedFilters, $this->_columns);
      if(count($validFilters) > 0){
        $search =  TabGraduacaoNivelQuery::create();

        foreach ($validFilters as $key => $value) {
          $search->where("TabGraduacaoNivel.{$key} like ?", "%{$value}%");
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
    return TabGraduacaoNivelQuery::create()->findPK($id);
  }

  private function _validate($key, $value){
    $this->_valid = true;
    return true;
  }

  private function _sanitize($key, $value){
    return filter_var($value, $this->_columns[$key]['sanitize']);
  }

}
