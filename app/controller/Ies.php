<?php
namespace Controller;

class Ies{


  public function getIes($id){

    $model = new \Model\TabIes();

    $response = $model->getIes($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setIes($id, $fields, $logId){

    $model = new \Model\TabIes();

    if(!empty($fields)){
      $model->setIes($id, $fields, $logId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getIesWithFilters($filters){

    $model = new \Model\TabIes();
    if(!empty($filters)){
      $response = $model->getIesWithFilters($filters);
      $response = \Utils\Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
