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
    'debug' => false,
    'mode' => 'development'
));
//definindo o objeto de log como singleton para ser durante toda a requisição
$app->container->singleton('log', function () {
    return new \Model\LogRequisicao();
});

$app->add(new Slim\Middleware\ContentTypes);
// Middleware de autenticação
$app->add(new Middleware\Autenticacao);
// setando headers de resposta para json
$app->response->headers->set('Content-Type', 'application/json; charset=utf-8');

//routes
require 'app/route/index.php';
require 'app/route/correio.php';
require 'app/route/endereco.php';
require 'app/route/graduacao.php';
require 'app/route/graduacao-area.php';
require 'app/route/graduacao-nivel.php';
require 'app/route/ies.php';
require 'app/route/inscricao.php';
require 'app/route/informacoes.php';
require 'app/route/profissao.php';
require 'app/route/ramo1.php';
require 'app/route/ramo2.php';
require 'app/route/ramo3.php';
require 'app/route/uf.php';
require 'app/route/error.php';

$app->run();
