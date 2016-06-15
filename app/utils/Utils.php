<?php

class Utils{

  public static function utf8_converter($array){
    if(is_array($array)){
      array_walk_recursive($array, function(&$item, $key){
        if(!mb_detect_encoding($item, 'utf-8', true)){
          $item = utf8_encode($item);
        }
      });
    }
    return $array;
  }

  public static function dashesToCamelCase($string){
    $str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
    return $str;
  }

  public static function parseFilters($filters){

    $rawFilters = array_map('trim',explode(";", $filters));
    $parsedFilters = array();
    foreach ($rawFilters as $key => $value) {

      list($k, $v) = array_map('trim',explode(":", $rawFilters[$key]));
      $parsedFilters[$k] = $v;
    }

    return $parsedFilters;
  }

}
