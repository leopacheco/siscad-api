<?php



/**
 * Skeleton subclass for representing a row from the 'pf_graduacao' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */
class PfGraduacao extends BasePfGraduacao
{
  public function getGraduacao($id = null){

    if($id !== null){
        $graduacao = PfGraduacaoQuery::create()->findPK($id);
        return $graduacao;
    }else{
      $graduacao = PfGraduacaoQuery::create()->find();
      return $graduacao;
    }
  }

}
