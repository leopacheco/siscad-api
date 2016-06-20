<?php

namespace Model;

use Model\om\BasePfProfissao;

/**
 * Skeleton subclass for representing a row from the 'pf_profissao' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */

class PfProfissao extends BasePfProfissao
{

  private $_columns = array("id_pf_profissao"      => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10", "required" => "true"),
                            "fk_id_pf_informacoes" => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10"),
                            "empresa"              => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "50"),
                            "cidade"               => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "40"),
                            "dt_admissao"          => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "dt_demissao"          => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "carga_horaria"        => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "3"),
                            "fk_id_tab_ramo1"      => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5"),
                            "fk_id_tab_ramo2"      => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5"),
                            "fk_id_tab_ramo3"      => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5")
                          );

  private $_valid = false;
  private $_errorMessage = '';
  /*

  */
  public function getProfissao($id){

    if($id !== null){
      $query = $this->_getById($id);

      if(!is_null($query)){
        $response = $query->toArray();
        $response["pf_informacoes"] = $this->_getRelation(PfInformacoesQuery::create()->findPK($query->getFkIdPfInformacoes()));

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
  public function setProfissao($id, $fields, $logId){

    $query = $this->_getById($id);

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
  public function getProfissaoWithFilters($filters){

    $parsedFilters = \Utils\Utils::parseFilters($filters);

    if(is_array($parsedFilters)){
      //compara os filtos enviados com as colunas da tabela
      $validFilters = array_intersect_key($parsedFilters, $this->_columns);
      if(count($validFilters) > 0){
        $search =  PfProfissaoQuery::create();

        foreach ($validFilters as $key => $value) {
          $search->where("PfProfissao.{$key} like ?", "%{$value}%");
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
    return PfProfissaoQuery::create()->findPK($id);
  }

  private function _validate($key, $value){
    $this->_valid = true;
    return true;
  }

  private function _sanitize($key, $value){
    return filter_var($value, $this->_columns[$key]['sanitize']);
  }

  private function _getCollection(){
    return PfProfissaoQuery::create()->find();
  }

  private function _getRelation($obj){
    if(!is_null($obj)){
      return $obj->toArray();
    }else{
      return null;
    }
  }

}
