
<?php

class Inscricao{


  public function getInscricao($id){

    $model = new PfInscricao();

    $response = $model->getInscricao($id);
    $response = Utils::utf8_converter($response);

    return json_encode($response);
  }


  public function setInscricao($id, $fields, $userId){

    $model = new PfInscricao();

    if(!empty($fields)){
      $model->setInscricao($id, $fields, $userId);
      $response = 'Atualizado com sucesso';
    }else{
      throw new Exception('Dados inválidos', 400);
    }

    return json_encode($response);
  }

  public function getInscricaoWithFilters($filters){

    $model = new PfInscricao();
    if(!empty($filters)){
      $response = $model->getInscricaoWithFilters($filters);
      $response = Utils::utf8_converter($response);
    }
    return json_encode($response);
  }
}
