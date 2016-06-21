<?php
namespace Utils;
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
    $rawFilters = array();
    preg_match_all('/[\w-]+:[\w-]+/', $filters, $rawFilters);

    $parsedFilters = array();
    foreach ($rawFilters[0] as $key => $value) {

      list($k, $v) = array_map('trim',explode(":", $rawFilters[0][$key]));
      $parsedFilters[$k] = $v;
    }

    return $parsedFilters;
  }

  public static function sanitize($value, $type){
    switch ($type) {
      case 'VARCHAR':
        return filter_var($value, FILTER_SANITIZE_STRING);
        break;

      case 'TINYINT':
      case 'INTEGER':
        return filter_var($value, FILTER_SANITIZE_NUMBER_INT);
        break;

      default:
        return filter_var($value, FILTER_SANITIZE_STRING);
        break;
    }
  }

}
