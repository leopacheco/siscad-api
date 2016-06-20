<?php
namespace Controller;

class Informacoes{


  public function getInformacoes($id){

    $model = new \Model\PfInformacoes();

    $response = $model->getInformacoes($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setInformacoes($id, $fields, $logId){

    $model = new \Model\PfInformacoes();

    if(!empty($fields)){
      $model->setInformacoes($id, $fields, $logId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getInformacoesWithFilters($filters){

    $model = new \Model\PfInformacoes();
    if(!empty($filters)){
      $response = $model->getInformacoesWithFilters($filters);
      $response = \Utils\Utils::utf8_converter($response);
    }
    return json_encode($response);
  }

  public function getProfissional($id){

    $model = new \Model\PfInformacoes();

    $response = $model->getProfissional($id);
    $response = \Utils\Utils::utf8_converter($response);

    return json_encode($response);
  }
}
