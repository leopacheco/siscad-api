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
    private $_valid = true;
    private $_errorMessage = '';

  public function getGraduacaoArea($id = null){

    if($id !== null){
      $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
      $graduacaoArea = $this->getById($id);
    }else{
      $graduacaoArea = TabGraduacaoAreaQuery::create()->find();
    }

    if(!is_null($graduacaoArea)){
      return $graduacaoArea->toArray();
    }
      return false;
  }


  public function setGraduacaoArea($id, $fields){
    //$graduacaoArea = $this->getById($id);
    $graduacaoArea = new TabGraduacaoAreaQuery();
    var_dump($graduacaoArea);
/*
    if($graduacaoArea !== null){
      $this->validateFields($fields);
    }*/
    if($this->_valid){
      foreach ($fields as $key => $value) {
        $campo = $this->dashesToCamelCase($key);
        $graduacaoArea->$campo = $value;
      }

      //$graduacaoArea->save();

      var_dump($graduacaoArea);
    }else{
      return $this->_errorMessage;
    }

  }

  private function dashesToCamelCase($string){
    $str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
    $str[0] = strtolower($str[0]);
    return $str;
  }


  private function validateFields($fields){
    $this->_valid = true;
  }


  private function getById($id){
    if($id !== null){
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    }
    return TabGraduacaoAreaQuery::create()->findPK($id);
  }

}
