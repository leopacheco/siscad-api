<?php
//Endpoints Ramo2
//retorna a lista de Ramo2 ou uma Ramo2 específica
$app->get('/ramo2(/(:id))', function ($id = null) use ($app) {
  $controller = new Ramo2;
  $response = $controller->getRamo2($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/ramo2/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new Ramo2;
  $response = $controller->getRamo2WithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/ramo2/:id', function ($id = null) use ($app) {
  $controller = new Ramo2;
  $response = $controller->setRamo2($id, $app->request->params());
  $app->response->body($response);
});
