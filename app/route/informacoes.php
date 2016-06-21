<?php
//Endpoints Informacoes
//retorna a lista de Informacoes ou uma Informacoes específica
$app->get('/informacoes(/(:id))', function ($id = null) use ($app) {
  $controller = new Controller\ Informacoes;
  $response = $controller->getInformacoes($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/informacoes/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new Controller\ Informacoes;
  $response = $controller->getInformacoesWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/informacoes/:id', function ($id = null) use ($app) {
  $controller = new Controller\ Informacoes;
  if($app->request->getMediaType() == 'application/json'){
    $params = $app->request->getBody();
  }else{
    $params = $app->request->params();
  }
  $response = $controller->setInformacoes($id, $params, $app->log->getId());
  $app->response->body($response);
});

//busca a view_profissional
$app->get('/profissional/:id', function ($id) use ($app) {
  $controller = new Controller\ Informacoes;
  $response = $controller->getProfissional($id);
  $app->response->body($response);
});

//busca a view_profissional
$app->get('/profissional/filtrar/:filters', function ($filters) use ($app) {
  $controller = new Controller\ Informacoes;
  $response = $controller->getProfissionalWithFilters($filters);
  $app->response->body($response);
});
