<?php

class Graduacao{


  public function getGraduacao($id){

    $model = new PfGraduacao();

    $response = $model->getGraduacao($id);
    $response = Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setGraduacao($id, $fields, $userId){

    $model = new PfGraduacao();

    if(!empty($fields)){
      $model->setGraduacao($id, $fields, $userId='1');
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getGraduacaoWithFilters($filters){

    $model = new PfGraduacao();
    if(!empty($filters)){
      $response = $model->getGraduacaoWithFilters($filters);
      $response = Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
