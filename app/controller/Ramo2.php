<?php

class Ramo2{


  public function getRamo2($id){

    $model = new TabRamo2();

    $response = $model->getRamo2($id);
    $response = Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setRamo2($id, $fields){

    $model = new TabRamo2();

    if(!empty($fields)){
      $model->setRamo2($id, $fields);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getRamo2WithFilters($filters){

    $model = new TabRamo2();
    if(!empty($filters)){
      $response = $model->getRamo2WithFilters($filters);
      $response = Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
