<?php



/**
 * Skeleton subclass for representing a row from the 'pf_informacoes' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.siscad-api
 */
class PfInformacoes extends BasePfInformacoes
{

  private $_columns = array("id_pf_informacoes"        => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "10", "required" => true),
                            "fk_id_tab_nacionalidade"  => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5"),
                            "fk_id_tab_estado_civil"   => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5"),
                            "fk_id_tab_tipo_sanguineo" => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5"),
                            "fk_id_tab_faixa_salarial" => array("sanitize" => FILTER_SANITIZE_NUMBER_INT, "size" => "5"),
                            "mae"                      => array("sanitize"  => FILTER_SANITIZE_STRING, "size" => "60"),
                            "pai"                      => array("sanitize"  => FILTER_SANITIZE_STRING, "size" => "60"),
                            "dt_nascimento"            => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "naturalidade"             => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "50"),
                            "uf_naturalidade"          => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "2" ),
                            "sexo"                     => array("sanitize" => FILTER_SANITIZE_STRING, "required" => "false"),
                            "rg_nro"                   => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "20"),
                            "rg_orgao_expedidor"       => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "50"),
                            "rg_dt_expedicao"          => array("sanitize" => FILTER_SANITIZE_NUMBER_INT),
                            "certificado_militar"      => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "50"),
                            "titulo_eleitor"           => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "50"),
                            "ctps_numero"              => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "10"),
                            "ctps_serie"               => array("sanitize" => FILTER_SANITIZE_STRING, "size" => "10"),
                            "ctps_dt_expedicao"        => array("sanitize" => FILTER_SANITIZE_NUMBER_INT)
                            );

  private $_valid = false;
  private $_errorMessage = '';
  /*
  */
  public function getInformacoes($id){

    if($id !== null){
      $query = $this->getById($id);
    }else{
      $query = PfInformacoesQuery::create()->find();
    }

    if(!is_null($query)){
      return $query->toArray();
    }else{
      throw new Exception('Nenhum resultado encontrado', 400);
    }
  }

  /*

  */
  public function setInformacoes($id, $fields){

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
  public function getInformacoesWithFilters($filters){

    $parsedFilters = Utils::parseFilters($filters);

    if(is_array($parsedFilters)){
      //compara os filtos enviados com as colunas da tabela
      $validFilters = array_intersect_key($parsedFilters, $this->_columns);
      if(count($validFilters) > 0){
        $search =  PfInformacoesQuery::create();

        foreach ($validFilters as $key => $value) {
          $search->where("PfInformacoes.{$key} like ?", "%{$value}%");
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
    return PfInformacoesQuery::create()->findPK($id);
  }

  private function _validate($key, $value){
    $this->_valid = true;
    return true;
  }

  private function _sanitize($key, $value){
    return filter_var($value, $this->_columns[$key]['sanitize']);
  }

}