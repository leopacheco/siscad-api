<?php
namespace Controller;

class Ramo1{


  public function getRamo1($id){

    $model = new \Model\TabRamo1();

    $response = $model->getRamo1($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setRamo1($id, $fields, $logId){

    $model = new \Model\TabRamo1();

    if(!empty($fields)){
      $model->setRamo1($id, $fields, $logId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getRamo1WithFilters($filters){

    $model = new \Model\TabRamo1();
    if(!empty($filters)){
      $response = $model->getRamo1WithFilters($filters);
      $response = \Utils\Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
