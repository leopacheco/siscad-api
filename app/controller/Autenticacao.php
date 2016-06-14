<?php

class Autenticacao extends \Slim\Middleware{

  private $autorizado = true;

  public function call(){
    // Get reference to application
    $app = $this->app;
    // Run inner middleware and application
    // Autenticacao vai aqui
    if($this->autorizado){
      $this->next->call();
    }else{
      throw new Exception("Operação não autorizada", 1);
    }


  }

}
