<?php

class Profissao{


  public function getProfissao($id){

    $model = new PfProfissao();

    $response = $model->getProfissao($id);
    $response = Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setProfissao($id, $fields, $userId){

    $model = new PfProfissao();

    if(!empty($fields)){
      $model->setProfissao($id, $fields, $userId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getProfissaoWithFilters($filters){

    $model = new PfProfissao();
    if(!empty($filters)){
      $response = $model->getProfissaoWithFilters($filters);
      $response = Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
