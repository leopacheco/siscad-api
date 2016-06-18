<?php



/**
 * Skeleton subclass for representing a row from the 'tab_ramo3' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */
class TabRamo3 extends BaseTabRamo3
{

  private $_columns = array("id_tab_ramo3" => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5"),
                            "cod_ramo1"    => array("sanitize" => FILTER_SANITIZE_STRING,     "size" => "2"),
                            "cod_ramo2"    => array("sanitize" => FILTER_SANITIZE_STRING,     "size" => "2"),
                            "cod_ramo3"    => array("sanitize" => FILTER_SANITIZE_STRING,     "size" => "2"),
                            "descricao"    => array("sanitize" => FILTER_SANITIZE_STRING,    "size" => "40")
                          );

  private $_valid = false;
  private $_errorMessage = '';
  /*

  */
  public function getRamo3($id){

    if($id !== null){
      $query = $this->getById($id);
    }else{
      $query = TabRamo3Query::create()->find();
    }

    if(!is_null($query)){
      return $query->toArray();
    }else{
      throw new Exception('Nenhum resultado encontrado', 400);
    }
  }

  /*

  */
  public function setRamo3($id, $fields, $userId){

    $query = $this->getById($id);

    $log = new LogAtividade();
    $log->setValorAnterior(json_encode($query->toArray()));
    $log->setUsuarioId($userId);
    $tableName = new TabRamo3TableMap();
    $log->setTabelaAtualizada($tableName->getName());

    foreach ($fields as $key => $value) {
      //verifica se o  campo existe na tabela
      if(array_key_exists($key, $this->_columns)){
          $value = $this->_sanitize($key, $value);

        if($this->_validate($key, $value)){
          $column = 'set'.Utils::dashesToCamelCase($key);
          $query->$column($value);
        }
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
      throw new Exception($errorMsg, 400);
    }

  }


  /*

  */
  public function getRamo3WithFilters($filters){

    $parsedFilters = Utils::parseFilters($filters);

    if(is_array($parsedFilters)){
      //compara os filtos enviados com as colunas da tabela
      $validFilters = array_intersect_key($parsedFilters, $this->_columns);
      if(count($validFilters) > 0){
        $search =  TabRamo3Query::create();

        foreach ($validFilters as $key => $value) {
          $search->where("TabRamo3.{$key} like ?", "%{$value}%");
        }

        $query = $search->find();
        if(count($query) > 0){
          return $query->toArray();
        }else{
          throw new Exception('Nenhum resultado encontrado', 400);
        }

      }else{
        throw new Exception('Parâmetros de busca inválidos', 400);
      }
    }
  }

  /*

  */
  private function getById($id){
    if($id !== null){
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    }
    return TabRamo3Query::create()->findPK($id);
  }

  private function _validate($key, $value){
    $this->_valid = true;
    return true;
  }

  private function _sanitize($key, $value){
    return filter_var($value, $this->_columns[$key]['sanitize']);
  }

}
