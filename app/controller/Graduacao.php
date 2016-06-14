<?php

class Graduacao extends BaseController{


  public function getGraduacaoArea($id = null){
    $graduacaoModel = new TabGraduacaoArea();

    $response = $graduacaoModel->getGraduacaoArea($id);
    if($response !== false){
      $response = $this->utf8_converter($response);
    }else{
      $response = $this->addError("parâmetro inválido");
    }
    return json_encode($response);
  }


  public function setGraduacaoArea($id, $fields){
    $graduacaoModel = new TabGraduacaoArea();
    if(!empty($fields)){
      if($graduacaoModel->setGraduacaoArea($id, $fields)){
        echo 'yay';
      }else{
        echo 'boo';
      }
    }else{
      $response = $this->addError("dados invalidos");
    }

  }
}
