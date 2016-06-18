<?php

class GraduacaoArea{


  public function getGraduacaoArea($id){

    $graduacaoModel = new TabGraduacaoArea();

    $response = $graduacaoModel->getGraduacaoArea($id);
    $response = Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setGraduacaoArea($id, $fields, $userId){

    $graduacaoModel = new TabGraduacaoArea();

    if(!empty($fields)){
      $graduacaoModel->setGraduacaoArea($id, $fields, $userId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getGraduacaoAreaWithFilters($filters){

    $graduacaoModel = new TabGraduacaoArea();
    if(!empty($filters)){
      $response = $graduacaoModel->getGraduacaoAreaWithFilters($filters);
      $response = Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
