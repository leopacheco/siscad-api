<?php
/**
 * Skeleton subclass for representing a row from the 'tab_graduacao_area' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */
class TabGraduacaoArea extends BaseTabGraduacaoArea
{
  private $_columns = array("id_tab_graduacao_area" => array("sanitize"=>FILTER_SANITIZE_NUMBER_INT, "size"=>"5"),
                            "descricao" => array("sanitize"=>FILTER_SANITIZE_STRING, "size"=>"50")
                            );

  private $_valid = false;
  private $_errorMessage = '';
  /*

  */
  public function getGraduacaoArea($id){

    if($id !== null){
      $graduacaoArea = $this->getById($id);
    }else{
      $graduacaoArea = TabGraduacaoAreaQuery::create()->find();
    }

    if(!is_null($graduacaoArea)){
      return $graduacaoArea->toArray();
    }else{
      throw new Exception('Nenhum resultado encontrado', 400);
    }
  }

  /*

  */
  public function setGraduacaoArea($id, $fields){

    $graduacaoArea = $this->getById($id);
    //var_dump($graduacaoArea);
    foreach ($fields as $key => $value) {
      //verifica se o  campo existe na tabela
      if(array_key_exists($key, $this->_columns)){
          $value = $this->_sanitize($key, $value);

        if($this->_validate($key, $value)){
          $column = 'set'.Utils::dashesToCamelCase($key);
          $graduacaoArea->$column($value);
        }
      }

    }

    if($this->_valid){
      $graduacaoArea->save();
      return true;
    }else{
      throw new Exception($this->_errorMessage, 400);
    }

  }


  /*

  */
  public function getGraduacaoAreaWithFilters($filters){

    $parsedFilters = Utils::parseFilters($filters);

    if(is_array($parsedFilters)){
      //compara os filtos enviados com as colunas da tabela
      $validFilters = array_intersect_key($parsedFilters, $this->_columns);
      if(count($validFilters) > 0){
        $query =  TabGraduacaoAreaQuery::create();

        foreach ($validFilters as $key => $value) {
          $query->where("TabGraduacaoArea.{$key} like ?", "%{$value}%");
        }

        $graduacaoArea = $query->find();
        if(count($graduacaoArea) > 0){
          return $graduacaoArea->toArray();
        }else{
          throw new Exception('Nenhum resultado encontrado', 400);
        }

      }else{
        throw new Exception('Parâmetros de busca inválidos', 400);
      }
    }
  }

  /*

  */
  private function getById($id){
    if($id !== null){
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    }
    return TabGraduacaoAreaQuery::create()->findPK($id);
  }

  private function _validate($key, $value){
    $this->_valid = true;
    return true;
  }

  private function _sanitize($key, $value){
    return filter_var($value, $this->_columns[$key]['sanitize']);
  }


}
