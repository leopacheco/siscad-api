<?php
namespace Model;

use Model\om\BaseTabIes;


/**
 * Skeleton subclass for representing a row from the 'tab_ies' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */

class TabIes extends BaseTabIes
{

    /*

    */
    public function getIes($id){

      if($id !== null){
        $query = $this->getById($id);
      }else{
        $query = TabIesQuery::create()->find();
      }

      if(!is_null($query)){
        return $query->toArray();
      }else{
        throw new \Exception('Nenhum resultado encontrado', 400);
      }
    }

    /*

    */
    public function setIes($id, $fields, $logId){

      $query = $this->getById($id);

      $log = new LogAtividade();
      $log->setValorAnterior(json_encode($query->toArray()));
      $log->setLogRequisicaoId($logId);

      foreach ($fields as $key => $value) {
        //verifica se o  campo existe na tabela
        $tableMap = new map\TabIesTableMap();

        if($tableMap->hasColumnByPhpName($key)){
            $value = \Utils\Utils::sanitize($value, $tableMap->getColumnByPhpName($key)->getType());
            $column = 'set'.$key;
            $query->$column($value);
        }
      }

      if($query->validate()){
        $query->save();
        $log->setValorAtual(json_encode($query->toArray()));
        $log->save();
        return true;
      }else{
        $errorMsg = '';
        foreach ($query->getValidationFailures() as $failure) {
          $errorMsg .= $failure->getMessage() . "\n";
        }
        throw new \Exception($errorMsg, 400);
      }

    }


    /*

    */
    public function getIesWithFilters($filters){

      $parsedFilters = \Utils\Utils::parseFilters($filters);

      if(is_array($parsedFilters)){
        //compara os filtos enviados com as colunas da tabela
        $tableMap = new map\TabIesTableMap();
        $validFilters = array();
        foreach ($parsedFilters as $key => $value) {
          if($tableMap->hasColumnByPhpName($key)){
            $validFilters[$key] = $value;
          }
        }

        if(count($validFilters) > 0){
          $search =  TabIesQuery::create();
          $search->setModelAlias('t');
          foreach ($validFilters as $key => $value) {
            $search->where("t.{$key} like ?", "%{$value}%");
          }

          $query = $search->find();
          if(count($query) > 0){
            return $query->toArray();
          }else{
            throw new \Exception('Nenhum resultado encontrado', 400);
          }

        }else{
          throw new \Exception('Parâmetros de busca inválidos', 400);
        }
      }
    }

    /*

    */
    private function getById($id){
      if($id !== null){
          $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
      }
      return TabIesQuery::create()->findPK($id);
    }

}
