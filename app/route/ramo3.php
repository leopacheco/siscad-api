<?php
//Endpoints Ramo3
//retorna a lista de Ramo3 ou uma Ramo3 específica
$app->get('/ramo3(/(:id))', function ($id = null) use ($app) {
  $controller = new Controller\ Ramo3;
  $response = $controller->getRamo3($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/ramo3/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new Controller\ Ramo3;
  $response = $controller->getRamo3WithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/ramo3/:id', function ($id = null) use ($app) {
  $controller = new Controller\ Ramo3;
  if($app->request->getMediaType() == 'application/json'){
    $params = $app->request->getBody();
  }else{
    $params = $app->request->params();
  }
  $response = $controller->setRamo3($id, $params, $app->log->getId());
  $app->response->body($response);
});
