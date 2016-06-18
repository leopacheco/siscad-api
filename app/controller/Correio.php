<?php

class Correio{


  public function getCorreio($id){

    $model = new TabCorreio();

    $response = $model->getCorreio($id);
    $response = Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setCorreio($id, $fields, $userId){

    $model = new TabCorreio();

    if(!empty($fields)){
      $model->setCorreio($id, $fields, $userId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getCorreioWithFilters($filters){

    $model = new TabCorreio();
    if(!empty($filters)){
      $response = $model->getCorreioWithFilters($filters);
      $response = Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
