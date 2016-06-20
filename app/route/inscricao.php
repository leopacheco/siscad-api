<?php
//Endpoints Inscricao
//retorna a lista de Inscricao ou uma Inscricao específica
$app->get('/inscricao(/(:id))', function ($id = null) use ($app) {
  $controller = new Controller\ Inscricao;
  $response = $controller->getInscricao($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/inscricao/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new Controller\ Inscricao;
  $response = $controller->getInscricaoWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/inscricao/:id', function ($id = null) use ($app) {
  $controller = new Controller\ Inscricao;
  if($app->request->getMediaType() == 'application/json'){
    $params = $app->request->getBody();
  }else{
    $params = $app->request->params();
  }
  $response = $controller->setInscricao($id, $params, $app->log->getId());
  $app->response->body($response);
});
