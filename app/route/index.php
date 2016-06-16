<?php
$app->get('/', function () use ($app) {
  $app->response->setStatus(200);
  $endpoint = new Endpoint();
  $endpoint->validateEndpointAccess('1', 'PUT', '/');
  $app->response->body(json_encode(array("Nome"=>APP_NAME, "Versão"=>APP_VERSION)));
});
