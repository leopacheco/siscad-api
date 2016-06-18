<?php

class GraduacaoNivel{


  public function getGraduacaoNivel($id){

    $graduacaoModel = new TabGraduacaoNivel();

    $response = $graduacaoModel->getGraduacaoNivel($id);
    $response = Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setGraduacaoNivel($id, $fields, $userId){

    $graduacaoModel = new TabGraduacaoNivel();

    if(!empty($fields)){
      $graduacaoModel->setGraduacaoNivel($id, $fields, $userId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getGraduacaoNivelWithFilters($filters){

    $graduacaoModel = new TabGraduacaoNivel();
    if(!empty($filters)){
      $response = $graduacaoModel->getGraduacaoNivelWithFilters($filters);
      $response = Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
