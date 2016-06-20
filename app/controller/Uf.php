<?php
namespace Controller;

class Uf{


  public function getUf($id){

    $ufModel = new \Model\TabUf();

    $response = $ufModel->getUf($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setUf($id, $fields, $logId){

    $ufModel = new \Model\TabUf();

    if(!empty($fields)){
      $ufModel->setUf($id, $fields, $logId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getUfWithFilters($filters){

    $ufModel = new \Model\TabUf();
    if(!empty($filters)){
      $response = $ufModel->getUfWithFilters($filters);
      $response = \Utils\Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
