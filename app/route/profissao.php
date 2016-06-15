<?php
//Endpoints Profissao
//retorna a lista de Profissao ou uma Profissao específica
$app->get('/profissao(/:id)', function ($id = null) use ($app) {
  $controller = new Profissao;
  $response = $controller->getProfissao($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/profissao/busca-por/:filters', function ($filters = null) use ($app) {
  $controller = new Profissao;
  $response = $controller->getProfissaoWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/profissao/:id', function ($id = null) use ($app) {
  $controller = new Profissao;
  $response = $controller->setProfissao($id, $app->request->params());
  $app->response->body($response);
});
