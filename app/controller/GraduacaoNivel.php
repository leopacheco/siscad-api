<?php
namespace Controller;

class GraduacaoNivel{


  public function getGraduacaoNivel($id){

    $graduacaoModel = new \Model\TabGraduacaoNivel();

    $response = $graduacaoModel->getGraduacaoNivel($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setGraduacaoNivel($id, $fields, $logId){

    $graduacaoModel = new \Model\TabGraduacaoNivel();

    if(!empty($fields)){
      $graduacaoModel->setGraduacaoNivel($id, $fields, $logId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getGraduacaoNivelWithFilters($filters){

    $graduacaoModel = new \Model\TabGraduacaoNivel();
    if(!empty($filters)){
      $response = $graduacaoModel->getGraduacaoNivelWithFilters($filters);
      $response = \Utils\Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
