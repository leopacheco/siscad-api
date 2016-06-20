<?php
namespace Controller;

class Correio{


  public function getCorreio($id){

    $model = new \Model\TabCorreio();

    $response = $model->getCorreio($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setCorreio($id, $fields, $logId){

    $model = new \Model\TabCorreio();

    if(!empty($fields)){
      $model->setCorreio($id, $fields, $logId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getCorreioWithFilters($filters){

    $model = new \Model\TabCorreio();
    if(!empty($filters)){
      $response = $model->getCorreioWithFilters($filters);
      $response = \Utils\Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
