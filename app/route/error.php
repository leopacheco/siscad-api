<?php
// ERROR HANDLING
// 500
$app->error(function (\Exception $e) use ($app) {
    $app->response->setStatus($e->getCode());
    $app->response->body(json_encode(["Code" => $e->getCode(),"Erro"=> $e->getMessage()]));

});

//404
$app->notFound(function () use ($app) {
  $app->response->setStatus(404);
  $app->response->body(json_encode(["Code"=> 404, "Erro"=> "URL inválida"]));
});
