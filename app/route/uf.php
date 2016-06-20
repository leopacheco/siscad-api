<?php
//Endpoints UF
//retorna a lista de UFs ou uma UF específica
$app->get('/uf(/(:id))', function ($id = null) use ($app) {
  $controller = new Controller\ Uf;
  $response = $controller->getUf($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/uf/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new Controller\ Uf;
  $response = $controller->getUfWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/uf/:id', function ($id = null) use ($app) {
  $controller = new Controller\ Uf;
  if($app->request->getMediaType() == 'application/json'){
    $params = $app->request->getBody();
  }else{
    $params = $app->request->params();
  }
  $response = $controller->setUf($id, $params, $app->log->getId());
  $app->response->body($response);
});
