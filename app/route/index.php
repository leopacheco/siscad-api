<?php
$app->get('/', function () use ($app) {
  $app->response->setStatus(200);
  $app->response->body(json_encode(array("Nome"=>APP_NAME, "Versão"=>APP_VERSION)));
});
