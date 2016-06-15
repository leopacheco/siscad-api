<?php
//Endpoints Inscricao
//retorna a lista de Inscricao ou uma Inscricao específica
$app->get('/inscricao(/:id)', function ($id = null) use ($app) {
  $controller = new Inscricao;
  $response = $controller->getInscricao($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/inscricao/busca-por/:filters', function ($filters = null) use ($app) {
  $controller = new Inscricao;
  $response = $controller->getInscricaoWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/inscricao/:id', function ($id = null) use ($app) {
  $controller = new Inscricao;
  $response = $controller->setInscricao($id, $app->request->params());
  $app->response->body($response);
});
