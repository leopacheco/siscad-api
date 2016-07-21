<?php
namespace Controller;

class Inscricao{


  public function getInscricao($id){

    $model = new \Model\PfInscricao();

    $response = $model->getInscricao($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setInscricao($id, $fields, $logId){

    $model = new \Model\PfInscricao();

    if(!empty($fields)){
      $model->setInscricao($id, $fields, $logId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getInscricaoWithFilters($filters){

    $model = new \Model\PfInscricao();
    if(!empty($filters)){
      $response = $model->getInscricaoWithFilters($filters);
      $response = \Utils\Utils::utf8_converter($response);
    }
    return json_encode($response);
  }

  public function getInadimplente($id){

    $model = new \Model\PfInscricao();

    $response = $model->getInadimplente($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }
}
