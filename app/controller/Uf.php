<?php

class Uf{


  public function getUf($id){

    $ufModel = new TabUf();

    $response = $ufModel->getUf($id);
    $response = Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setUf($id, $fields, $userId){

    $ufModel = new TabUf();

    if(!empty($fields)){
      $ufModel->setUf($id, $fields, $userId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getUfWithFilters($filters){

    $ufModel = new TabUf();
    if(!empty($filters)){
      $response = $ufModel->getUfWithFilters($filters);
      $response = Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
