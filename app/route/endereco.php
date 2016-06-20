<?php
//Endpoints Endereco
//retorna a lista de Endereco ou uma Endereco específica
$app->get('/endereco(/(:id))', function ($id = null) use ($app) {
  $controller = new Controller\ Endereco;
  $response = $controller->getEndereco($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/endereco/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new Controller\ Endereco;
  $response = $controller->getEnderecoWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/endereco/:id', function ($id = null) use ($app) {
  $controller = new Controller\ Endereco;
  $params = array();
  if($app->request->getMediaType() == 'application/json'){
    $params = $app->request->getBody();
  }else{
    $params = $app->request->params();
  }
  $response = $controller->setEndereco($id, $params, $app->log->getId());
  $app->response->body($response);
});
