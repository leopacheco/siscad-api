<?php



/**
 * Skeleton subclass for representing a row from the 'log_acesso' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad_autenticacao
 */
class LogAcesso extends BaseLogAcesso
{

  public static function validateNonce($userId, $nonce){

    $query = LogAcessoQuery::create()
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
