<?php
//Endpoints UF
//retorna a lista de UFs ou uma UF específica
$app->get('/uf(/(:id))', function ($id = null) use ($app) {
  $controller = new Uf;
  $response = $controller->getUf($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/uf/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new Uf;
  $response = $controller->getUfWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/uf/:id', function ($id = null) use ($app) {
  $controller = new Uf;
  $response = $controller->setUf($id, $app->request->params());
  $app->response->body($response);
});
