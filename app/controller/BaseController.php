<?php

class BaseController{

  public function utf8_converter($array){
    if(is_array($array)){
      array_walk_recursive($array, function(&$item, $key){
        if(!mb_detect_encoding($item, 'utf-8', true)){
          $item = utf8_encode($item);
        }
      });
    }
    return $array;
  }

  public function addError($msg){
    return array("erro"=> array("status"=>400, "mensagem"=> $msg));
  }
}
