<?php
//Endpoints Ramo1
//retorna a lista de Ramo1 ou uma Ramo1 específica
$app->get('/ramo1(/(:id))', function ($id = null) use ($app) {
  $controller = new Ramo1;
  $response = $controller->getRamo1($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/ramo1/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new Ramo1;
  $response = $controller->getRamo1WithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/ramo1/:id', function ($id = null) use ($app) {
  $controller = new Ramo1;
  if($app->request->getMediaType() == 'application/json'){
    $params = $app->request->getBody();
  }else{
    $params = $app->request->params();
  }
  $response = $controller->setRamo1($id, $params, $app->userId);
  $app->response->body($response);
});
