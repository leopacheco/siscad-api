<?php

class Token{
// $dsn is the Data Source Name for your database, for exmaple "mysql:dbname=my_oauth2_db;host=localhost"

private $dsn = "mysql:dbname=siscad_autenticacao;host=localhost";
private $username = "root";
private $password = "";
private $storage;
private $server;

public function __construct(){
  $this->storage = new OAuth2_Storage_Pdo(array('dsn' => $this->dsn, 'username' => $this->username, 'password' => $this->password));
  $this->server = new OAuth2_Server($this->storage);
  $this->server->addGrantType(new OAuth2_GrantType_ClientCredentials($this->storage));
echo 'yep';
}

// Add the "Client Credentials" grant type (it is the simplest of the grant types)

// Handle a request for an OAuth2.0 Access Token and send the response to the client
//$server->handleTokenRequest(OAuth2_Request::createFromGlobals(), new OAuth2_Response())->send();
}
