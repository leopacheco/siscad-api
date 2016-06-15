<?php



/**
 * Skeleton subclass for representing a row from the 'tab_uf' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */
class TabUf extends BaseTabUf
{

  private $_columns = array("id_tab_uf"    => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size"=> "5"),
                            "sigla"        => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "2"),
                            "tratamento"   => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "2"),
                            "estado"       => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "30"),
                            "capital"      => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "20"),
                            "rua"          => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "100"),
                            "bairro"       => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "50"),
                            "cep"          => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "9"),
                            "ddd"          => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "2"),
                            "telefone"     => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "15"),
                            "fax"          => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "15"),
                            "email"        => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "50"),
                            "sequencia_tf" => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size"=> "5"),
                            "sequencia_ai" => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size"=> "5"),
                            "ano"          => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "4"),
                            "regiao"       => array("sanitize" => FILTER_SANITIZE_STRING,     "size"=> "12"),
                            "res1102"      => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size"=> "2")
                            );

  private $_valid = false;
  private $_errorMessage = '';
  /*

  */
  public function getUf($id){

    if($id !== null){
      $uf = $this->getById($id);
    }else{
      $uf = TabUfQuery::create()->find();
    }

    if(!is_null($uf)){
      return $uf->toArray();
    }else{
      throw new Exception('Nenhum resultado encontrado', 400);
    }
  }

  /*

  */
  public function setUf($id, $fields){

    $uf = $this->getById($id);

    foreach ($fields as $key => $value) {
      //verifica se o  campo existe na tabela
      if(array_key_exists($key, $this->_columns)){
          $value = $this->_sanitize($key, $value);

        if($this->_validate($key, $value)){
          $column = 'set'.Utils::dashesToCamelCase($key);
          $uf->$column($value);
        }
      }

    }

    if($this->_valid){
      $uf->save();
      return true;
    }else{
      throw new Exception($this->_errorMessage, 400);
    }

  }


  /*

  */
  public function getUfWithFilters($filters){

    $parsedFilters = Utils::parseFilters($filters);

    if(is_array($parsedFilters)){
      //compara os filtos enviados com as colunas da tabela
      $validFilters = array_intersect_key($parsedFilters, $this->_columns);
      if(count($validFilters) > 0){
        $query =  TabUfQuery::create();

        foreach ($validFilters as $key => $value) {
          $query->where("TabUf.{$key} like ?", "%{$value}%");
        }

        $uf = $query->find();
        if(count($uf) > 0){
          return $uf->toArray();
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
    return TabUfQuery::create()->findPK($id);
  }

  private function _validate($key, $value){
    $this->_valid = true;
    return true;
  }

  private function _sanitize($key, $value){
    return filter_var($value, $this->_columns[$key]['sanitize']);
  }

}
