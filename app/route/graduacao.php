<?php
//Endpoints Graduacao
//retorna a lista de Graduacao ou uma Graduacao específica
$app->get('/graduacao(/(:id))', function ($id = null) use ($app) {
  $controller = new Graduacao;
  $response = $controller->getGraduacao($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/graduacao/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new Graduacao;
  $response = $controller->getGraduacaoWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/graduacao/:id', function ($id = null) use ($app) {
  $controller = new Graduacao;
  if($app->request->getMediaType() == 'application/json'){
    $params = $app->request->getBody();
  }else{
    $params = $app->request->params();
  }
  $response = $controller->setGraduacao($id, $params, $app->userId);
  $app->response->body($response);
});
