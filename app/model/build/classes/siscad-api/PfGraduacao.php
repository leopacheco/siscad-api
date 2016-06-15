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
  private $_columns = array("fk_id_tab_uf"             => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5" ),
                            "id_pf_graduacao"          => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10", "required" => "true"),
                            "fk_id_pf_informacoes"     => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10"),
                            "fk_id_tab_area"           => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5" ),
                            "fk_id_tab_nivel"          => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5" ),
                            "fk_id_tab_ies"            => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5" ),
                            "dt_conclusao"             => array("sanitize" => FILTER_SANITIZE_NUMBER_INT)
                            );

  private $_valid = false;
  private $_errorMessage = '';
  /*
  */
  public function getGraduacao($id){

    if($id !== null){
      $query = $this->getById($id);
    }else{
      $query = PfGraduacaoQuery::create()->find();
    }

    if(!is_null($query)){
      return $query->toArray();
    }else{
      throw new Exception('Nenhum resultado encontrado', 400);
    }
  }

  /*

  */
  public function setGraduacao($id, $fields){

    $query = $this->getById($id);

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

    if($this->_valid){
      $query->save();
      return true;
    }else{
      throw new Exception($this->_errorMessage, 400);
    }

  }


  /*

  */
  public function getGraduacaoWithFilters($filters){

    $parsedFilters = Utils::parseFilters($filters);

    if(is_array($parsedFilters)){
      //compara os filtos enviados com as colunas da tabela
      $validFilters = array_intersect_key($parsedFilters, $this->_columns);
      if(count($validFilters) > 0){
        $search =  PfGraduacaoQuery::create();

        foreach ($validFilters as $key => $value) {
          $search->where("PfGraduacao.{$key} like ?", "%{$value}%");
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
    return PfGraduacaoQuery::create()->findPK($id);
  }

  private function _validate($key, $value){
    $this->_valid = true;
    return true;
  }

  private function _sanitize($key, $value){
    return filter_var($value, $this->_columns[$key]['sanitize']);
  }

}
