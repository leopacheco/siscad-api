<?php
//Endpoints Informacoes
//retorna a lista de Informacoes ou uma Informacoes específica
$app->get('/informacoes(/:id)', function ($id = null) use ($app) {
  $controller = new Informacoes;
  $response = $controller->getInformacoes($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/informacoes/busca-por/:filters', function ($filters = null) use ($app) {
  $controller = new Informacoes;
  $response = $controller->getInformacoesWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/informacoes/:id', function ($id = null) use ($app) {
  $controller = new Informacoes;
  $response = $controller->setInformacoes($id, $app->request->params());
  $app->response->body($response);
});
