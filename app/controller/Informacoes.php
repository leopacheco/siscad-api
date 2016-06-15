<?php

class Informacoes{


  public function getInformacoes($id){

    $model = new PfInformacoes();

    $response = $model->getInformacoes($id);
    $response = Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setInformacoes($id, $fields){

    $model = new PfInformacoes();

    if(!empty($fields)){
      $model->setInformacoes($id, $fields);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getInformacoesWithFilters($filters){

    $model = new PfInformacoes();
    if(!empty($filters)){
      $response = $model->getInformacoesWithFilters($filters);
      $response = Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
