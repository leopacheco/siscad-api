<?php
namespace Middleware;

class Autenticacao extends \Slim\Middleware{

  private $_method = '';
  private $_uri = '';
  private $_providedUser = '';
  private $_providedHash = '';
  private $_providedNonce = '';

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
    // hmac [usuario]:[nonce]:[hash]
    if(preg_match('/hmac\s+[\w]{1,30}:[\w]{1,20}:[\w]+/', $header)){
      $headerArray = preg_split('/[\s,]+/', $header);
      //recupera o conjunto usuário:nonce:hash
      $authArray = explode(':', $headerArray[1]);
      $this->_providedUser = filter_var($authArray[0], FILTER_SANITIZE_STRING); //[usuario]
      $this->_providedNonce = filter_var($authArray[1], FILTER_SANITIZE_STRING);//[nonce]
      $this->_providedHash = filter_var($authArray[2], FILTER_SANITIZE_STRING);//[hash]

      return true;

    }else{
      return false;
    }
  }

  private function _parseHash($secret){
    //gera o hash para comparação com o fornecido pela requisição
    return base64_encode(hash_hmac("sha256", $this->_method.$this->_uri.$this->_providedNonce, $secret ));
  }

  private function _authenticate($req){
    //valida o cabeçalho enviado na requisição
    //se cabeçalho no formato correto, continua a validação
    if($this->_getProvidedCredentials($req->headers->get('Authentication'))){
      $user = \Model\Usuario::getUserByName($this->_providedUser);
      $this->_method = $req->getMethod();
      $this->_uri = $req->getResourceUri();

      if(!is_null($user)){
        $endpoint = new \Model\Endpoint();
        $endpoint->validateEndpointAccess($user->getPerfilId(), $this->_method, $this->_uri);

        if((\Model\LogRequisicao::validateNonce($user->getId(), $this->_providedNonce)) && ($endpoint->hasAccess())){
          $hash = $this->_parseHash($user->getSecret());

          if($hash === $this->_providedHash){
            //acesso permitido
            //grava o log da requisição
              $this->_log($user->getId(), $req->getIp());

          }else{
            //$app->halt(403, 'hash inválida');
            throw new \Exception('Acesso negado', 403);
          }

        }else{
          //throw exception here
          //$app->halt(403, 'Acesso negado');
          throw new \Exception('Acesso negado', 403);
        }

      }else{
        throw new \Exception('Acesso negado', 403);
      }
    //se não, joga a exceção 403
    }else{
      //throw new Exception('Nenhum resultado encontrado', 400);
      throw new \Exception('Credenciais de acesso não informadas', 403);
    }
  }

  private function _log($userId, $ip){
    //recuperando o singleton de log injetado na aplicação
    $log = $this->app->log;
    $log->setUsuarioId($userId);
    $log->setRequisicao($this->_method.' '.$this->_uri);
    $log->setNonce($this->_providedNonce);
    $log->setIp($ip);
    $log->save();
  }

}
