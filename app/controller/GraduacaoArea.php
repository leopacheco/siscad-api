<?php
namespace Controller;

class GraduacaoArea{


  public function getGraduacaoArea($id){

    $graduacaoModel = new \Model\TabGraduacaoArea();

    $response = $graduacaoModel->getGraduacaoArea($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setGraduacaoArea($id, $fields, $logId){

    $graduacaoModel = new \Model\TabGraduacaoArea();

    if(!empty($fields)){
      $graduacaoModel->setGraduacaoArea($id, $fields, $logId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getGraduacaoAreaWithFilters($filters){

    $graduacaoModel = new \Model\TabGraduacaoArea();
    if(!empty($filters)){
      $response = $graduacaoModel->getGraduacaoAreaWithFilters($filters);
      $response = \Utils\Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
