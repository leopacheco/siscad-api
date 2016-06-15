<?php
//Endpoints Graduação
//retorna a lista de graduações ou uma graduação específica
$app->get('/graduacao-nivel(/(:id))', function ($id = null) use ($app) {
  $controller = new GraduacaoNivel;
  $response = $controller->getGraduacaoNivel($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/graduacao-nivel/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new GraduacaoNivel;
  $response = $controller->getGraduacaoNivelWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/graduacao-nivel/:id', function ($id = null) use ($app) {
  $controller = new GraduacaoNivel;
  $response = $controller->setGraduacaoNivel($id, $app->request->params());
  $app->response->body($response);
});