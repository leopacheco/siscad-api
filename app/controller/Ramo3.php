<?php
namespace Controller;

class Ramo3{


  public function getRamo3($id){

    $model = new \Model\TabRamo3();

    $response = $model->getRamo3($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setRamo3($id, $fields, $logId){

    $model = new \Model\TabRamo3();

    if(!empty($fields)){
      $model->setRamo3($id, $fields, $logId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getRamo3WithFilters($filters){

    $model = new \Model\TabRamo3();
    if(!empty($filters)){
      $response = $model->getRamo3WithFilters($filters);
      $response = \Utils\Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
