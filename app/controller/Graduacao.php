<?php
namespace Controller;

class Graduacao{


  public function getGraduacao($id){

    $model = new \Model\PfGraduacao();

    $response = $model->getGraduacao($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setGraduacao($id, $fields, $logId){

    $model = new \Model\PfGraduacao();

    if(!empty($fields)){
      $model->setGraduacao($id, $fields, $logId='1');
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getGraduacaoWithFilters($filters){

    $model = new \Model\PfGraduacao();
    if(!empty($filters)){
      $response = $model->getGraduacaoWithFilters($filters);
      $response = \Utils\Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
