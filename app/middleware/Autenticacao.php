<?php

class Autenticacao extends \Slim\Middleware{

  private $_method = '';
  private $_uri = '';
  private $_providedUser = '';
  private $_providedHash = '';
  private $_authorized = false;

  public function call(){
    // Get reference to application
    $app = $this->app;
    $req = $app->request;

    try{

      $this->_authenticate($req);

    }catch (\Exception $e) {
      die($e->getMessage());
    }
      //nenhuma exceção foi lançada
      //prossegue com a requisição
      $this->next->call();

  }

  private function _getProvidedCredentials($header){
    //valida o cabeçalho, garantindo o envio do formato correto
    if(preg_match('/hmac\s+[\w]{1,30}:[\w]+/', $header)){
      $headerArray = preg_split('/[\s,]+/', $header);
      //recupera o par usuário:hash
      $authArray = explode(':', $headerArray[1]);

      $this->_providedUser = $authArray[0];
      $this->_providedHash = $authArray[1];
      return true;

    }else{
      return false;
    }
  }

  private function _parseHash($secret){
    return base64_encode(hash_hmac("sha256", $this->_method.'+'.$this->_uri, $secret ));
  }

  private function _authenticate($req){
    //valida o cabeçalho enviado na requisição
    //se cabeçalho no formato correto, continua a validação
    if($this->_getProvidedCredentials($req->headers->get('Authentication'))){

      $userModel = new Usuario();
      $user = $userModel->getUserByName($this->_providedUser);

      if(!is_null($user)){

        $this->_method = $req->getMethod();
        $this->_uri = $req->getResourceUri();
        $hash = $this->_parseHash($user->getSecret());

        if($hash !== $this->_providedHash){
          //$app->halt(403, 'hash inválida');
          throw new Exception('Acesso negado', 403);
        }
      }else{
        //throw exception here
        //$app->halt(403, 'Acesso negado');
        throw new Exception('Acesso negado', 403);
      }
    //se não, joga a exceção 403
    }else{
      //throw new Exception('Nenhum resultado encontrado', 400);
      throw new Exception('Credenciais de acesso não informadas', 403);
    }
  }

}
