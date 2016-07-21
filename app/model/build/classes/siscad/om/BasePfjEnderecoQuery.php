<?php

namespace Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \PDO;
use \Propel;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use Model\PfjEndereco;
use Model\PfjEnderecoPeer;
use Model\PfjEnderecoQuery;

/**
 * Base class that represents a query for the 'pfj_endereco' table.
 *
 *
 *
 * @method PfjEnderecoQuery orderByIdPfjEndereco($order = Criteria::ASC) Order by the id_pfj_endereco column
 * @method PfjEnderecoQuery orderByFkIdPjRegistro($order = Criteria::ASC) Order by the fk_id_pj_registro column
 * @method PfjEnderecoQuery orderByFkIdPfInscricao($order = Criteria::ASC) Order by the fk_id_pf_inscricao column
 * @method PfjEnderecoQuery orderByFkIdTabUf($order = Criteria::ASC) Order by the fk_id_tab_uf column
 * @method PfjEnderecoQuery orderByFkIdTabCepCidade($order = Criteria::ASC) Order by the fk_id_tab_cep_cidade column
 * @method PfjEnderecoQuery orderByEndereco($order = Criteria::ASC) Order by the endereco column
 * @method PfjEnderecoQuery orderByBairro($order = Criteria::ASC) Order by the bairro column
 * @method PfjEnderecoQuery orderByCidade($order = Criteria::ASC) Order by the cidade column
 * @method PfjEnderecoQuery orderByCep($order = Criteria::ASC) Order by the cep column
 * @method PfjEnderecoQuery orderByUf($order = Criteria::ASC) Order by the uf column
 * @method PfjEnderecoQuery orderByFkIdTabCorreio($order = Criteria::ASC) Order by the fk_id_tab_correio column
 * @method PfjEnderecoQuery orderByDtAtualizacao($order = Criteria::ASC) Order by the dt_atualizacao column
 * @method PfjEnderecoQuery orderByDtAtualizacaoWeb($order = Criteria::ASC) Order by the dt_atualizacao_web column
 * @method PfjEnderecoQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method PfjEnderecoQuery orderByDddTel($order = Criteria::ASC) Order by the ddd_tel column
 * @method PfjEnderecoQuery orderByTelefone($order = Criteria::ASC) Order by the telefone column
 * @method PfjEnderecoQuery orderByRamal($order = Criteria::ASC) Order by the ramal column
 * @method PfjEnderecoQuery orderByDddCel($order = Criteria::ASC) Order by the ddd_cel column
 * @method PfjEnderecoQuery orderByCelular($order = Criteria::ASC) Order by the celular column
 * @method PfjEnderecoQuery orderByDddFax($order = Criteria::ASC) Order by the ddd_fax column
 * @method PfjEnderecoQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method PfjEnderecoQuery orderByUsuarioApi($order = Criteria::ASC) Order by the usuario_api column
 *
 * @method PfjEnderecoQuery groupByIdPfjEndereco() Group by the id_pfj_endereco column
 * @method PfjEnderecoQuery groupByFkIdPjRegistro() Group by the fk_id_pj_registro column
 * @method PfjEnderecoQuery groupByFkIdPfInscricao() Group by the fk_id_pf_inscricao column
 * @method PfjEnderecoQuery groupByFkIdTabUf() Group by the fk_id_tab_uf column
 * @method PfjEnderecoQuery groupByFkIdTabCepCidade() Group by the fk_id_tab_cep_cidade column
 * @method PfjEnderecoQuery groupByEndereco() Group by the endereco column
 * @method PfjEnderecoQuery groupByBairro() Group by the bairro column
 * @method PfjEnderecoQuery groupByCidade() Group by the cidade column
 * @method PfjEnderecoQuery groupByCep() Group by the cep column
 * @method PfjEnderecoQuery groupByUf() Group by the uf column
 * @method PfjEnderecoQuery groupByFkIdTabCorreio() Group by the fk_id_tab_correio column
 * @method PfjEnderecoQuery groupByDtAtualizacao() Group by the dt_atualizacao column
 * @method PfjEnderecoQuery groupByDtAtualizacaoWeb() Group by the dt_atualizacao_web column
 * @method PfjEnderecoQuery groupByEmail() Group by the email column
 * @method PfjEnderecoQuery groupByDddTel() Group by the ddd_tel column
 * @method PfjEnderecoQuery groupByTelefone() Group by the telefone column
 * @method PfjEnderecoQuery groupByRamal() Group by the ramal column
 * @method PfjEnderecoQuery groupByDddCel() Group by the ddd_cel column
 * @method PfjEnderecoQuery groupByCelular() Group by the celular column
 * @method PfjEnderecoQuery groupByDddFax() Group by the ddd_fax column
 * @method PfjEnderecoQuery groupByFax() Group by the fax column
 * @method PfjEnderecoQuery groupByUsuarioApi() Group by the usuario_api column
 *
 * @method PfjEnderecoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfjEnderecoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfjEnderecoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfjEndereco findOne(PropelPDO $con = null) Return the first PfjEndereco matching the query
 * @method PfjEndereco findOneOrCreate(PropelPDO $con = null) Return the first PfjEndereco matching the query, or a new PfjEndereco object populated from the query conditions when no match is found
 *
 * @method PfjEndereco findOneByFkIdPjRegistro(int $fk_id_pj_registro) Return the first PfjEndereco filtered by the fk_id_pj_registro column
 * @method PfjEndereco findOneByFkIdPfInscricao(int $fk_id_pf_inscricao) Return the first PfjEndereco filtered by the fk_id_pf_inscricao column
 * @method PfjEndereco findOneByFkIdTabUf(int $fk_id_tab_uf) Return the first PfjEndereco filtered by the fk_id_tab_uf column
 * @method PfjEndereco findOneByFkIdTabCepCidade(int $fk_id_tab_cep_cidade) Return the first PfjEndereco filtered by the fk_id_tab_cep_cidade column
 * @method PfjEndereco findOneByEndereco(string $endereco) Return the first PfjEndereco filtered by the endereco column
 * @method PfjEndereco findOneByBairro(string $bairro) Return the first PfjEndereco filtered by the bairro column
 * @method PfjEndereco findOneByCidade(string $cidade) Return the first PfjEndereco filtered by the cidade column
 * @method PfjEndereco findOneByCep(string $cep) Return the first PfjEndereco filtered by the cep column
 * @method PfjEndereco findOneByUf(string $uf) Return the first PfjEndereco filtered by the uf column
 * @method PfjEndereco findOneByFkIdTabCorreio(int $fk_id_tab_correio) Return the first PfjEndereco filtered by the fk_id_tab_correio column
 * @method PfjEndereco findOneByDtAtualizacao(string $dt_atualizacao) Return the first PfjEndereco filtered by the dt_atualizacao column
 * @method PfjEndereco findOneByDtAtualizacaoWeb(string $dt_atualizacao_web) Return the first PfjEndereco filtered by the dt_atualizacao_web column
 * @method PfjEndereco findOneByEmail(string $email) Return the first PfjEndereco filtered by the email column
 * @method PfjEndereco findOneByDddTel(string $ddd_tel) Return the first PfjEndereco filtered by the ddd_tel column
 * @method PfjEndereco findOneByTelefone(string $telefone) Return the first PfjEndereco filtered by the telefone column
 * @method PfjEndereco findOneByRamal(string $ramal) Return the first PfjEndereco filtered by the ramal column
 * @method PfjEndereco findOneByDddCel(string $ddd_cel) Return the first PfjEndereco filtered by the ddd_cel column
 * @method PfjEndereco findOneByCelular(string $celular) Return the first PfjEndereco filtered by the celular column
 * @method PfjEndereco findOneByDddFax(string $ddd_fax) Return the first PfjEndereco filtered by the ddd_fax column
 * @method PfjEndereco findOneByFax(string $fax) Return the first PfjEndereco filtered by the fax column
 * @method PfjEndereco findOneByUsuarioApi(string $usuario_api) Return the first PfjEndereco filtered by the usuario_api column
 *
 * @method array findByIdPfjEndereco(int $id_pfj_endereco) Return PfjEndereco objects filtered by the id_pfj_endereco column
 * @method array findByFkIdPjRegistro(int $fk_id_pj_registro) Return PfjEndereco objects filtered by the fk_id_pj_registro column
 * @method array findByFkIdPfInscricao(int $fk_id_pf_inscricao) Return PfjEndereco objects filtered by the fk_id_pf_inscricao column
 * @method array findByFkIdTabUf(int $fk_id_tab_uf) Return PfjEndereco objects filtered by the fk_id_tab_uf column
 * @method array findByFkIdTabCepCidade(int $fk_id_tab_cep_cidade) Return PfjEndereco objects filtered by the fk_id_tab_cep_cidade column
 * @method array findByEndereco(string $endereco) Return PfjEndereco objects filtered by the endereco column
 * @method array findByBairro(string $bairro) Return PfjEndereco objects filtered by the bairro column
 * @method array findByCidade(string $cidade) Return PfjEndereco objects filtered by the cidade column
 * @method array findByCep(string $cep) Return PfjEndereco objects filtered by the cep column
 * @method array findByUf(string $uf) Return PfjEndereco objects filtered by the uf column
 * @method array findByFkIdTabCorreio(int $fk_id_tab_correio) Return PfjEndereco objects filtered by the fk_id_tab_correio column
 * @method array findByDtAtualizacao(string $dt_atualizacao) Return PfjEndereco objects filtered by the dt_atualizacao column
 * @method array findByDtAtualizacaoWeb(string $dt_atualizacao_web) Return PfjEndereco objects filtered by the dt_atualizacao_web column
 * @method array findByEmail(string $email) Return PfjEndereco objects filtered by the email column
 * @method array findByDddTel(string $ddd_tel) Return PfjEndereco objects filtered by the ddd_tel column
 * @method array findByTelefone(string $telefone) Return PfjEndereco objects filtered by the telefone column
 * @method array findByRamal(string $ramal) Return PfjEndereco objects filtered by the ramal column
 * @method array findByDddCel(string $ddd_cel) Return PfjEndereco objects filtered by the ddd_cel column
 * @method array findByCelular(string $celular) Return PfjEndereco objects filtered by the celular column
 * @method array findByDddFax(string $ddd_fax) Return PfjEndereco objects filtered by the ddd_fax column
 * @method array findByFax(string $fax) Return PfjEndereco objects filtered by the fax column
 * @method array findByUsuarioApi(string $usuario_api) Return PfjEndereco objects filtered by the usuario_api column
 *
 * @package    propel.generator.siscad.om
 */
abstract class BasePfjEnderecoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfjEnderecoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'siscad';
        }
        if (null === $modelName) {
            $modelName = 'Model\\PfjEndereco';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfjEnderecoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfjEnderecoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfjEnderecoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfjEnderecoQuery) {
            return $criteria;
        }
        $query = new PfjEnderecoQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   PfjEndereco|PfjEndereco[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfjEnderecoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfjEnderecoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 PfjEndereco A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdPfjEndereco($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 PfjEndereco A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_pfj_endereco`, `fk_id_pj_registro`, `fk_id_pf_inscricao`, `fk_id_tab_uf`, `fk_id_tab_cep_cidade`, `endereco`, `bairro`, `cidade`, `cep`, `uf`, `fk_id_tab_correio`, `dt_atualizacao`, `dt_atualizacao_web`, `email`, `ddd_tel`, `telefone`, `ramal`, `ddd_cel`, `celular`, `ddd_fax`, `fax`, `usuario_api` FROM `pfj_endereco` WHERE `id_pfj_endereco` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new PfjEndereco();
            $obj->hydrate($row);
            PfjEnderecoPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return PfjEndereco|PfjEndereco[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|PfjEndereco[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfjEnderecoPeer::ID_PFJ_ENDERECO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfjEnderecoPeer::ID_PFJ_ENDERECO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_pfj_endereco column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPfjEndereco(1234); // WHERE id_pfj_endereco = 1234
     * $query->filterByIdPfjEndereco(array(12, 34)); // WHERE id_pfj_endereco IN (12, 34)
     * $query->filterByIdPfjEndereco(array('min' => 12)); // WHERE id_pfj_endereco >= 12
     * $query->filterByIdPfjEndereco(array('max' => 12)); // WHERE id_pfj_endereco <= 12
     * </code>
     *
     * @param     mixed $idPfjEndereco The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByIdPfjEndereco($idPfjEndereco = null, $comparison = null)
    {
        if (is_array($idPfjEndereco)) {
            $useMinMax = false;
            if (isset($idPfjEndereco['min'])) {
                $this->addUsingAlias(PfjEnderecoPeer::ID_PFJ_ENDERECO, $idPfjEndereco['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPfjEndereco['max'])) {
                $this->addUsingAlias(PfjEnderecoPeer::ID_PFJ_ENDERECO, $idPfjEndereco['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::ID_PFJ_ENDERECO, $idPfjEndereco, $comparison);
    }

    /**
     * Filter the query on the fk_id_pj_registro column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdPjRegistro(1234); // WHERE fk_id_pj_registro = 1234
     * $query->filterByFkIdPjRegistro(array(12, 34)); // WHERE fk_id_pj_registro IN (12, 34)
     * $query->filterByFkIdPjRegistro(array('min' => 12)); // WHERE fk_id_pj_registro >= 12
     * $query->filterByFkIdPjRegistro(array('max' => 12)); // WHERE fk_id_pj_registro <= 12
     * </code>
     *
     * @param     mixed $fkIdPjRegistro The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByFkIdPjRegistro($fkIdPjRegistro = null, $comparison = null)
    {
        if (is_array($fkIdPjRegistro)) {
            $useMinMax = false;
            if (isset($fkIdPjRegistro['min'])) {
                $this->addUsingAlias(PfjEnderecoPeer::FK_ID_PJ_REGISTRO, $fkIdPjRegistro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdPjRegistro['max'])) {
                $this->addUsingAlias(PfjEnderecoPeer::FK_ID_PJ_REGISTRO, $fkIdPjRegistro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::FK_ID_PJ_REGISTRO, $fkIdPjRegistro, $comparison);
    }

    /**
     * Filter the query on the fk_id_pf_inscricao column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdPfInscricao(1234); // WHERE fk_id_pf_inscricao = 1234
     * $query->filterByFkIdPfInscricao(array(12, 34)); // WHERE fk_id_pf_inscricao IN (12, 34)
     * $query->filterByFkIdPfInscricao(array('min' => 12)); // WHERE fk_id_pf_inscricao >= 12
     * $query->filterByFkIdPfInscricao(array('max' => 12)); // WHERE fk_id_pf_inscricao <= 12
     * </code>
     *
     * @param     mixed $fkIdPfInscricao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByFkIdPfInscricao($fkIdPfInscricao = null, $comparison = null)
    {
        if (is_array($fkIdPfInscricao)) {
            $useMinMax = false;
            if (isset($fkIdPfInscricao['min'])) {
                $this->addUsingAlias(PfjEnderecoPeer::FK_ID_PF_INSCRICAO, $fkIdPfInscricao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdPfInscricao['max'])) {
                $this->addUsingAlias(PfjEnderecoPeer::FK_ID_PF_INSCRICAO, $fkIdPfInscricao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::FK_ID_PF_INSCRICAO, $fkIdPfInscricao, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_uf column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabUf(1234); // WHERE fk_id_tab_uf = 1234
     * $query->filterByFkIdTabUf(array(12, 34)); // WHERE fk_id_tab_uf IN (12, 34)
     * $query->filterByFkIdTabUf(array('min' => 12)); // WHERE fk_id_tab_uf >= 12
     * $query->filterByFkIdTabUf(array('max' => 12)); // WHERE fk_id_tab_uf <= 12
     * </code>
     *
     * @param     mixed $fkIdTabUf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByFkIdTabUf($fkIdTabUf = null, $comparison = null)
    {
        if (is_array($fkIdTabUf)) {
            $useMinMax = false;
            if (isset($fkIdTabUf['min'])) {
                $this->addUsingAlias(PfjEnderecoPeer::FK_ID_TAB_UF, $fkIdTabUf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabUf['max'])) {
                $this->addUsingAlias(PfjEnderecoPeer::FK_ID_TAB_UF, $fkIdTabUf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::FK_ID_TAB_UF, $fkIdTabUf, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_cep_cidade column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabCepCidade(1234); // WHERE fk_id_tab_cep_cidade = 1234
     * $query->filterByFkIdTabCepCidade(array(12, 34)); // WHERE fk_id_tab_cep_cidade IN (12, 34)
     * $query->filterByFkIdTabCepCidade(array('min' => 12)); // WHERE fk_id_tab_cep_cidade >= 12
     * $query->filterByFkIdTabCepCidade(array('max' => 12)); // WHERE fk_id_tab_cep_cidade <= 12
     * </code>
     *
     * @param     mixed $fkIdTabCepCidade The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByFkIdTabCepCidade($fkIdTabCepCidade = null, $comparison = null)
    {
        if (is_array($fkIdTabCepCidade)) {
            $useMinMax = false;
            if (isset($fkIdTabCepCidade['min'])) {
                $this->addUsingAlias(PfjEnderecoPeer::FK_ID_TAB_CEP_CIDADE, $fkIdTabCepCidade['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabCepCidade['max'])) {
                $this->addUsingAlias(PfjEnderecoPeer::FK_ID_TAB_CEP_CIDADE, $fkIdTabCepCidade['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::FK_ID_TAB_CEP_CIDADE, $fkIdTabCepCidade, $comparison);
    }

    /**
     * Filter the query on the endereco column
     *
     * Example usage:
     * <code>
     * $query->filterByEndereco('fooValue');   // WHERE endereco = 'fooValue'
     * $query->filterByEndereco('%fooValue%'); // WHERE endereco LIKE '%fooValue%'
     * </code>
     *
     * @param     string $endereco The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByEndereco($endereco = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($endereco)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $endereco)) {
                $endereco = str_replace('*', '%', $endereco);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::ENDERECO, $endereco, $comparison);
    }

    /**
     * Filter the query on the bairro column
     *
     * Example usage:
     * <code>
     * $query->filterByBairro('fooValue');   // WHERE bairro = 'fooValue'
     * $query->filterByBairro('%fooValue%'); // WHERE bairro LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bairro The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByBairro($bairro = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bairro)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bairro)) {
                $bairro = str_replace('*', '%', $bairro);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::BAIRRO, $bairro, $comparison);
    }

    /**
     * Filter the query on the cidade column
     *
     * Example usage:
     * <code>
     * $query->filterByCidade('fooValue');   // WHERE cidade = 'fooValue'
     * $query->filterByCidade('%fooValue%'); // WHERE cidade LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cidade The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByCidade($cidade = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cidade)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cidade)) {
                $cidade = str_replace('*', '%', $cidade);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::CIDADE, $cidade, $comparison);
    }

    /**
     * Filter the query on the cep column
     *
     * Example usage:
     * <code>
     * $query->filterByCep('fooValue');   // WHERE cep = 'fooValue'
     * $query->filterByCep('%fooValue%'); // WHERE cep LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cep The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByCep($cep = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cep)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cep)) {
                $cep = str_replace('*', '%', $cep);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::CEP, $cep, $comparison);
    }

    /**
     * Filter the query on the uf column
     *
     * Example usage:
     * <code>
     * $query->filterByUf('fooValue');   // WHERE uf = 'fooValue'
     * $query->filterByUf('%fooValue%'); // WHERE uf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByUf($uf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uf)) {
                $uf = str_replace('*', '%', $uf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::UF, $uf, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_correio column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabCorreio(1234); // WHERE fk_id_tab_correio = 1234
     * $query->filterByFkIdTabCorreio(array(12, 34)); // WHERE fk_id_tab_correio IN (12, 34)
     * $query->filterByFkIdTabCorreio(array('min' => 12)); // WHERE fk_id_tab_correio >= 12
     * $query->filterByFkIdTabCorreio(array('max' => 12)); // WHERE fk_id_tab_correio <= 12
     * </code>
     *
     * @param     mixed $fkIdTabCorreio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByFkIdTabCorreio($fkIdTabCorreio = null, $comparison = null)
    {
        if (is_array($fkIdTabCorreio)) {
            $useMinMax = false;
            if (isset($fkIdTabCorreio['min'])) {
                $this->addUsingAlias(PfjEnderecoPeer::FK_ID_TAB_CORREIO, $fkIdTabCorreio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabCorreio['max'])) {
                $this->addUsingAlias(PfjEnderecoPeer::FK_ID_TAB_CORREIO, $fkIdTabCorreio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::FK_ID_TAB_CORREIO, $fkIdTabCorreio, $comparison);
    }

    /**
     * Filter the query on the dt_atualizacao column
     *
     * Example usage:
     * <code>
     * $query->filterByDtAtualizacao('2011-03-14'); // WHERE dt_atualizacao = '2011-03-14'
     * $query->filterByDtAtualizacao('now'); // WHERE dt_atualizacao = '2011-03-14'
     * $query->filterByDtAtualizacao(array('max' => 'yesterday')); // WHERE dt_atualizacao < '2011-03-13'
     * </code>
     *
     * @param     mixed $dtAtualizacao The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByDtAtualizacao($dtAtualizacao = null, $comparison = null)
    {
        if (is_array($dtAtualizacao)) {
            $useMinMax = false;
            if (isset($dtAtualizacao['min'])) {
                $this->addUsingAlias(PfjEnderecoPeer::DT_ATUALIZACAO, $dtAtualizacao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtAtualizacao['max'])) {
                $this->addUsingAlias(PfjEnderecoPeer::DT_ATUALIZACAO, $dtAtualizacao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::DT_ATUALIZACAO, $dtAtualizacao, $comparison);
    }

    /**
     * Filter the query on the dt_atualizacao_web column
     *
     * Example usage:
     * <code>
     * $query->filterByDtAtualizacaoWeb('2011-03-14'); // WHERE dt_atualizacao_web = '2011-03-14'
     * $query->filterByDtAtualizacaoWeb('now'); // WHERE dt_atualizacao_web = '2011-03-14'
     * $query->filterByDtAtualizacaoWeb(array('max' => 'yesterday')); // WHERE dt_atualizacao_web < '2011-03-13'
     * </code>
     *
     * @param     mixed $dtAtualizacaoWeb The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByDtAtualizacaoWeb($dtAtualizacaoWeb = null, $comparison = null)
    {
        if (is_array($dtAtualizacaoWeb)) {
            $useMinMax = false;
            if (isset($dtAtualizacaoWeb['min'])) {
                $this->addUsingAlias(PfjEnderecoPeer::DT_ATUALIZACAO_WEB, $dtAtualizacaoWeb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtAtualizacaoWeb['max'])) {
                $this->addUsingAlias(PfjEnderecoPeer::DT_ATUALIZACAO_WEB, $dtAtualizacaoWeb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::DT_ATUALIZACAO_WEB, $dtAtualizacaoWeb, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the ddd_tel column
     *
     * Example usage:
     * <code>
     * $query->filterByDddTel('fooValue');   // WHERE ddd_tel = 'fooValue'
     * $query->filterByDddTel('%fooValue%'); // WHERE ddd_tel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dddTel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByDddTel($dddTel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dddTel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dddTel)) {
                $dddTel = str_replace('*', '%', $dddTel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::DDD_TEL, $dddTel, $comparison);
    }

    /**
     * Filter the query on the telefone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefone('fooValue');   // WHERE telefone = 'fooValue'
     * $query->filterByTelefone('%fooValue%'); // WHERE telefone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByTelefone($telefone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefone)) {
                $telefone = str_replace('*', '%', $telefone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::TELEFONE, $telefone, $comparison);
    }

    /**
     * Filter the query on the ramal column
     *
     * Example usage:
     * <code>
     * $query->filterByRamal('fooValue');   // WHERE ramal = 'fooValue'
     * $query->filterByRamal('%fooValue%'); // WHERE ramal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ramal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByRamal($ramal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ramal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ramal)) {
                $ramal = str_replace('*', '%', $ramal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::RAMAL, $ramal, $comparison);
    }

    /**
     * Filter the query on the ddd_cel column
     *
     * Example usage:
     * <code>
     * $query->filterByDddCel('fooValue');   // WHERE ddd_cel = 'fooValue'
     * $query->filterByDddCel('%fooValue%'); // WHERE ddd_cel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dddCel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByDddCel($dddCel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dddCel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dddCel)) {
                $dddCel = str_replace('*', '%', $dddCel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::DDD_CEL, $dddCel, $comparison);
    }

    /**
     * Filter the query on the celular column
     *
     * Example usage:
     * <code>
     * $query->filterByCelular('fooValue');   // WHERE celular = 'fooValue'
     * $query->filterByCelular('%fooValue%'); // WHERE celular LIKE '%fooValue%'
     * </code>
     *
     * @param     string $celular The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByCelular($celular = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($celular)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $celular)) {
                $celular = str_replace('*', '%', $celular);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::CELULAR, $celular, $comparison);
    }

    /**
     * Filter the query on the ddd_fax column
     *
     * Example usage:
     * <code>
     * $query->filterByDddFax('fooValue');   // WHERE ddd_fax = 'fooValue'
     * $query->filterByDddFax('%fooValue%'); // WHERE ddd_fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dddFax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByDddFax($dddFax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dddFax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dddFax)) {
                $dddFax = str_replace('*', '%', $dddFax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::DDD_FAX, $dddFax, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the usuario_api column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioApi('fooValue');   // WHERE usuario_api = 'fooValue'
     * $query->filterByUsuarioApi('%fooValue%'); // WHERE usuario_api LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usuarioApi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function filterByUsuarioApi($usuarioApi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usuarioApi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usuarioApi)) {
                $usuarioApi = str_replace('*', '%', $usuarioApi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfjEnderecoPeer::USUARIO_API, $usuarioApi, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfjEndereco $pfjEndereco Object to remove from the list of results
     *
     * @return PfjEnderecoQuery The current query, for fluid interface
     */
    public function prune($pfjEndereco = null)
    {
        if ($pfjEndereco) {
            $this->addUsingAlias(PfjEnderecoPeer::ID_PFJ_ENDERECO, $pfjEndereco->getIdPfjEndereco(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
