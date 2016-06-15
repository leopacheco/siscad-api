<?php
//Endpoints Graduação
//retorna a lista de graduações ou uma graduação específica
$app->get('/graduacao-area(/:id)', function ($id = null) use ($app) {
  $controller = new GraduacaoArea;
  $response = $controller->getGraduacaoArea($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/graduacao-area/busca-por/:filters', function ($filters = null) use ($app) {
  $controller = new GraduacaoArea;
  $response = $controller->getGraduacaoAreaWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/graduacao-area/:id', function ($id = null) use ($app) {
  $controller = new GraduacaoArea;
  $response = $controller->setGraduacaoArea($id, $app->request->params());
  $app->response->body($response);
});
