<?php

class Ies{


  public function getIes($id){

    $model = new TabIes();

    $response = $model->getIes($id);
    $response = Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setIes($id, $fields){

    $model = new TabIes();

    if(!empty($fields)){
      $model->setIes($id, $fields);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getIesWithFilters($filters){

    $model = new TabIes();
    if(!empty($filters)){
      $response = $model->getIesWithFilters($filters);
      $response = Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
