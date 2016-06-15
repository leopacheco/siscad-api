<?php
//Endpoints Correio
//retorna a lista de Correio ou uma Correio específica
$app->get('/correio(/(:id))', function ($id = null) use ($app) {
  $controller = new Correio;
  $response = $controller->getCorreio($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/correio/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new Correio;
  $response = $controller->getCorreioWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/correio/:id', function ($id = null) use ($app) {
  $controller = new Correio;
  $response = $controller->setCorreio($id, $app->request->params());
  $app->response->body($response);
});
