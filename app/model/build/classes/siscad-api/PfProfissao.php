<?php



/**
 * Skeleton subclass for representing a row from the 'pf_profissao' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */
class PfProfissao extends BasePfProfissao
{

  private $_columns = array("id_pf_profissao"      => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10", "required" => "true"),
                            "fk_id_pf_informacoes" => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10"),
                            "empresa"              => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "50"),
                            "cidade"               => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "40"),
                            "dt_admissao"          => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "dt_demissao"          => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "carga_horaria"        => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "3"),
                            "fk_id_tab_ramo1"      => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5"),
                            "fk_id_tab_ramo2"      => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5"),
                            "fk_id_tab_ramo3"      => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5")
                          );

  private $_valid = false;
  private $_errorMessage = '';
  /*

  */
  public function getProfissao($id){

    if($id !== null){
      $query = $this->getById($id);
    }else{
      $query = PfProfissaoQuery::create()->find();
    }

    if(!is_null($query)){
      return $query->toArray();
    }else{
      throw new Exception('Nenhum resultado encontrado', 400);
    }
  }

  /*

  */
  public function setProfissao($id, $fields){

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
  public function getProfissaoWithFilters($filters){

    $parsedFilters = Utils::parseFilters($filters);

    if(is_array($parsedFilters)){
      //compara os filtos enviados com as colunas da tabela
      $validFilters = array_intersect_key($parsedFilters, $this->_columns);
      if(count($validFilters) > 0){
        $search =  PfProfissaoQuery::create();

        foreach ($validFilters as $key => $value) {
          $search->where("PfProfissao.{$key} like ?", "%{$value}%");
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
    return PfProfissaoQuery::create()->findPK($id);
  }

  private function _validate($key, $value){
    $this->_valid = true;
    return true;
  }

  private function _sanitize($key, $value){
    return filter_var($value, $this->_columns[$key]['sanitize']);
  }

}
