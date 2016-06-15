<?php
//Endpoints Ies
//retorna a lista de Ies ou uma Ies específica
$app->get('/ies(/:id)', function ($id = null) use ($app) {
  $controller = new Ies;
  $response = $controller->getIes($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/ies/busca-por/:filters', function ($filters = null) use ($app) {
  $controller = new Ies;
  $response = $controller->getIesWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/ies/:id', function ($id = null) use ($app) {
  $controller = new Ies;
  $response = $controller->setIes($id, $app->request->params());
  $app->response->body($response);
});
