<?php



/**
 * Skeleton subclass for representing a row from the 'pfj_endereco' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */
class PfjEndereco extends BasePfjEndereco
{

  private $_columns = array("id_pfj_endereco"      => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10", "required" => "true"),
                            "fk_id_pj_registro"    => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10"),
                            "fk_id_pf_inscricao"   => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10"),
                            "fk_id_tab_uf"         => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5" ),
                            "fk_id_tab_cep_cidade" => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10"),
                            "endereco"             => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "50"),
                            "bairro"               => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "30"),
                            "cidade"               => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "40"),
                            "cep"                  => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "9" ),
                            "uf"                   => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "2" ),
                            "fk_id_tab_correio"    => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5" ),
                            "dt_atualizacao"       => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "dt_atualizacao_web"   => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "email"                => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "100"),
                            "ddd_tel"              => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "2" ),
                            "telefone"             => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "15"),
                            "ramal"                => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "5" ),
                            "ddd_cel"              => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "2" ),
                            "celular"              => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "15"),
                            "ddd_fax"              => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "2" ),
                            "fax"                  => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "15")
                          );

  private $_valid = false;
  private $_errorMessage = '';
  /*
  */
  public function getEndereco($id){

    if($id !== null){
      $query = $this->getById($id);
    }else{
      $query = PfjEnderecoQuery::create()->find();
    }

    if(!is_null($query)){
      return $query->toArray();
    }else{
      throw new Exception('Nenhum resultado encontrado', 400);
    }
  }

  /*

  */
  public function setEndereco($id, $fields){

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
  public function getEnderecoWithFilters($filters){

    $parsedFilters = Utils::parseFilters($filters);

    if(is_array($parsedFilters)){
      //compara os filtos enviados com as colunas da tabela
      $validFilters = array_intersect_key($parsedFilters, $this->_columns);
      if(count($validFilters) > 0){
        $search =  PfjEnderecoQuery::create();

        foreach ($validFilters as $key => $value) {
          $search->where("PfjEndereco.{$key} like ?", "%{$value}%");
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
    return PfjEnderecoQuery::create()->findPK($id);
  }

  private function _validate($key, $value){
    $this->_valid = true;
    return true;
  }

  private function _sanitize($key, $value){
    return filter_var($value, $this->_columns[$key]['sanitize']);
  }

}
