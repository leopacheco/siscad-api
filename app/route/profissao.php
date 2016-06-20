<?php
//Endpoints Profissao
//retorna a lista de Profissao ou uma Profissao específica
$app->get('/profissao(/(:id))', function ($id = null) use ($app) {
  $controller = new Controller\ Profissao;
  $response = $controller->getProfissao($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/profissao/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new Controller\ Profissao;
  $response = $controller->getProfissaoWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/profissao/:id', function ($id = null) use ($app) {
  $controller = new Controller\ Profissao;
  if($app->request->getMediaType() == 'application/json'){
    $params = $app->request->getBody();
  }else{
    $params = $app->request->params();
  }
  $response = $controller->setProfissao($id, $params, $app->log->getId());
  $app->response->body($response);
});
