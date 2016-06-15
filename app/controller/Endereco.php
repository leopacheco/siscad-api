<?php

class Endereco{


  public function getEndereco($id){

    $model = new PfjEndereco();

    $response = $model->getEnderecoM($id);
    $response = Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setEndereco($id, $fields){

    $model = new PfjEndereco();

    if(!empty($fields)){
      $model->setEnderecoM($id, $fields);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getEnderecoWithFilters($filters){

    $model = new PfjEndereco();
    if(!empty($filters)){
      $response = $model->getEnderecoWithFilters($filters);
      $response = Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
