<?php
namespace Controller;

class Endereco{


  public function getEndereco($id){

    $model = new \Model\PfjEndereco();

    $response = $model->getEnderecoM($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setEndereco($id, $fields, $logId){

    $model = new \Model\PfjEndereco();

    if(!empty($fields)){
      $model->setEnderecoM($id, $fields, $logId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getEnderecoWithFilters($filters){

    $model = new \Model\PfjEndereco();
    if(!empty($filters)){
      $response = $model->getEnderecoWithFilters($filters);
      $response = \Utils\Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
