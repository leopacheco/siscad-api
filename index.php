<?php
require 'app/config/app.php';
require 'vendor/autoload.php';
require 'app/loader.php';

// Initialize Propel with the runtime configuration
Propel::init("app/model/build/conf/siscad-api-conf.php");

// Add the generated 'classes' directory to the include path
set_include_path("app/model/build/classes" . PATH_SEPARATOR . get_include_path());

//Iniciando a aplicação
$app = new \Slim\Slim(array(
    'debug' => true,
    'mode' => 'development',
    'log.enabled' => true
));
// Middleware de autenticação
$app->add(new \Autenticacao());
// setando headers de resposta para json
$app->response->headers->set('Content-Type', 'application/json; charset=utf-8');


$app->get('/', function () use ($app) {
  $app->response->setStatus(200);
  $app->response->body(json_encode(array("Nome"=>APP_NAME, "Versão"=>APP_VERSION)));

});


//Endpoints Graduação
//retorna a lista de graduações ou uma graduação específica
$app->get('/graduacao-area(/:id)', function ($id = null) use ($app) {
  $graduacao = new Graduacao;
  $app->response->body($graduacao->getGraduacaoArea($id));
});

$app->put('/graduacao-area/:id', function ($id = null) use ($app) {
  $graduacao = new Graduacao;
  $graduacao->setGraduacaoArea($id, $app->request->params());
  $app->response->body();
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
  echo json_encode(["Erro"=> "URL inválida"]);
});

$app->run();
