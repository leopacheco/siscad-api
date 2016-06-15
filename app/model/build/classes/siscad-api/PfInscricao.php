<?php



/**
 * Skeleton subclass for representing a row from the 'pf_inscricao' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */
class PfInscricao extends BasePfInscricao
{


  private $_columns = array("id_pf_inscricao"       => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10", "required" => "true"),
                            "fk_id_pf_informacoes"  => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10"),
                            "pf_uf"                 => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "2" ),
                            "pf_inscricao"          => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "5" ),
                            "pf_classe"             => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "2" ),
                            "nome"                  => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "60"),
                            "cpf"                   => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "14"),
                            "carteira_crmv"         => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "10"),
                            "dt_carteira_crmv"      => array("sanitize" => FILTER_SANITIZE_NUMBER_INT ),
                            "dt_inscricao"          => array("sanitize" => FILTER_SANITIZE_NUMBER_INT ),
                            "atuante"               => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "1"),
                            "isento"                => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "1"),
                            "dt_inc_cadin"          => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "dt_exc_cadin"          => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "processo"              => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "1"),
                            "revista_cfmv"          => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "1"),
                            "revista_cfmv_dt"       => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "carteira_validade"     => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "provisoria"            => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "provisoria_num"        => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "10"),
                            "provisoria_data"       => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "provisoria_validade"   => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "especialista_num"      => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "10"),
                            "especialista_data"     => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "especialista_validade" => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "segundavia_num"        => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "10"),
                            "segundavia_data"       => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "segundavia_validade"   => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "senha"                 => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "32")
);

private $_valid = false;
private $_errorMessage = '';
/*
  */
  public function getInscricao($id){

    if($id !== null){
      $query = $this->getById($id);
    }else{
      $query = PfInscricaoQuery::create()->find();
    }

    if(!is_null($query)){
      return $query->toArray();
    }else{
      throw new Exception('Nenhum resultado encontrado', 400);
    }
  }

  /*

  */
  public function setInscricao($id, $fields){

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
  public function getInscricaoWithFilters($filters){

    $parsedFilters = Utils::parseFilters($filters);

    if(is_array($parsedFilters)){
      //compara os filtos enviados com as colunas da tabela
      $validFilters = array_intersect_key($parsedFilters, $this->_columns);
      if(count($validFilters) > 0){
        $search =  PfInscricaoQuery::create();

        foreach ($validFilters as $key => $value) {
          $search->where("PfInscricao.{$key} like ?", "%{$value}%");
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
    return PfInscricaoQuery::create()->findPK($id);
  }

  private function _validate($key, $value){
    $this->_valid = true;
    return true;
  }

  private function _sanitize($key, $value){
    return filter_var($value, $this->_columns[$key]['sanitize']);
  }

}
