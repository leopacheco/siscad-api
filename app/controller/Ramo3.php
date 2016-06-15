<?php

class Ramo3{


  public function getRamo3($id){

    $model = new TabRamo3();

    $response = $model->getRamo3($id);
    $response = Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setRamo3($id, $fields){

    $model = new TabRamo3();

    if(!empty($fields)){
      $model->setRamo3($id, $fields);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getRamo3WithFilters($filters){

    $model = new TabRamo3();
    if(!empty($filters)){
      $response = $model->getRamo3WithFilters($filters);
      $response = Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
