<?php
namespace Controller;

class Profissao{


  public function getProfissao($id){

    $model = new \Model\PfProfissao();

    $response = $model->getProfissao($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setProfissao($id, $fields, $logId){

    $model = new \Model\PfProfissao();

    if(!empty($fields)){
      $model->setProfissao($id, $fields, $logId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getProfissaoWithFilters($filters){

    $model = new \Model\PfProfissao();
    if(!empty($filters)){
      $response = $model->getProfissaoWithFilters($filters);
      $response = \Utils\Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
