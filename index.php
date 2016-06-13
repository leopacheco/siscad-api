<?php
require 'app/config/app.php';
require 'vendor/autoload.php';
require 'app/loader.php';

$app = new \Slim\Slim(array(
    'debug' => true,
    'mode' => 'development'
));

$app->response->headers->set('Content-Type', 'application/json; charset=utf-8');

$app->get('/', function () use ($app) {
  $app->response->setStatus(200);
  $app->response->body(json_encode(array("Nome"=>APP_NAME, "Versão"=>APP_VERSION)));

});

//AUTHENTICATION
$app->get('/auth', function () use ($app) {
  $token = new Token();
  $app->response->setStatus(200);
    $app->response->body(json_encode(array("Nome"=>APP_NAME, "Versão"=>APP_VERSION)));

});

// ERROR HANDLING
// 500
$app->error(function (\Exception $e) use ($app) {
    $app->response->setStatus(500);
    echo json_encode(["Erro"=> $e->getMessage()]);
});

//404
$app->notFound(function () use ($app) {
  $app->response->setStatus(404);
  echo json_encode(["Error"=> "URL inválida"]);
});

$app->run();
