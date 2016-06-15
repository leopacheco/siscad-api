<?php
//Endpoints Endereco
//retorna a lista de Endereco ou uma Endereco específica
$app->get('/endereco(/(:id))', function ($id = null) use ($app) {
  $controller = new Endereco;
  $response = $controller->getEndereco($id);
  $app->response->body($response);
});

//busca registros conforme filtros no formato coluna1:valor1;coluna2:valor2
$app->get('/endereco/filtrar/:filters', function ($filters = null) use ($app) {
  $controller = new Endereco;
  $response = $controller->getEnderecoWithFilters($filters);
  $app->response->body($response);
});

//atualiza um registro conforme :id
$app->put('/endereco/:id', function ($id = null) use ($app) {
  $controller = new Endereco;
  $response = $controller->setEndereco($id, $app->request->params());
  $app->response->body($response);
});
