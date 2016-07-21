<?php

namespace Model;

use Model\om\BaseLogRequisicao;


/**
 * Skeleton subclass for representing a row from the 'log_requisicao' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad_api
 */
class LogRequisicao extends BaseLogRequisicao
{

  public static function validateNonce($userId, $nonce){
    $query = LogRequisicaoQuery::create()
                          ->filterByNonce($nonce)
                          ->findOneByUsuarioId($userId);
  if(is_null($query)){
    //par usuario_id:nonce não encontrado
    // nonce valido
    return true;
  }else{
    return false;
  }
}
}
