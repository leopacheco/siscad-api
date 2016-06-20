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

  private $_columns = array("id_pfj_endereco"      => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10", "required" => "true"),
                            "fk_id_pj_registro"    => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10"),
                            "fk_id_pf_inscricao"   => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10"),
                            "fk_id_tab_uf"         => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5" ),
                            "fk_id_tab_cep_cidade" => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10"),
                            "endereco"             => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "50"),
                            "bairro"               => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "30"),
                            "cidade"               => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "40"),
                            "cep"                  => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "9" ),
                            "uf"                   => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "2" ),
                            "fk_id_tab_correio"    => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5" ),
                            "dt_atualizacao"       => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "dt_atualizacao_web"   => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "email"                => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "100"),
                            "ddd_tel"              => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "2" ),
                            "telefone"             => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "15"),
                            "ramal"                => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "5" ),
                            "ddd_cel"              => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "2" ),
                            "celular"              => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "15"),
                            "ddd_fax"              => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "2" ),
                            "fax"                  => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "15")
                          );

  private $_valid = false;
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
  public function getEnderecoWithFilters($filters){

    $parsedFilters = \Utils\Utils::parseFilters($filters);

    if(is_array($parsedFilters)){
      //compara os filtos enviados com as colunas da tabela
      $validFilters = array_intersect_key($parsedFilters, $this->_columns);
      if(count($validFilters) > 0){
        $search =  PfjEnderecoQuery::create();

        foreach ($validFilters as $key => $value) {
          $search->where("PfjEndereco.{$key} like ?", "%{$value}%");
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

  private function _validate($key, $value){
    $this->_valid = true;
    return true;
  }

  private function _sanitize($key, $value){
    return filter_var($value, $this->_columns[$key]['sanitize']);
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
