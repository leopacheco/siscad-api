<?php
//Endpoints Ramo3
//retorna a lista de Ramo3 ou uma Ramo3 específica
$app->get('/ramo3(/:id)', function ($id = null) use ($app) {
  $controller = new Ramo3;
  $response = $controller->getRamo3($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/ramo3/busca-por/:filters', function ($filters = null) use ($app) {
  $controller = new Ramo3;
  $response = $controller->getRamo3WithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/ramo3/:id', function ($id = null) use ($app) {
  $controller = new Ramo3;
  $response = $controller->setRamo3($id, $app->request->params());
  $app->response->body($response);
});
