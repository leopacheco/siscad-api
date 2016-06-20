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
use Model\TabIes;
use Model\TabIesPeer;
use Model\TabIesQuery;

/**
 * Base class that represents a query for the 'tab_ies' table.
 *
 *
 *
 * @method TabIesQuery orderByIdTabIes($order = Criteria::ASC) Order by the id_tab_ies column
 * @method TabIesQuery orderByFkIdTabIesVinculacao($order = Criteria::ASC) Order by the fk_id_tab_ies_vinculacao column
 * @method TabIesQuery orderByFkIdTabUf($order = Criteria::ASC) Order by the fk_id_tab_uf column
 * @method TabIesQuery orderByFkIdTabIesSituacao($order = Criteria::ASC) Order by the fk_id_tab_ies_situacao column
 * @method TabIesQuery orderByNome($order = Criteria::ASC) Order by the nome column
 * @method TabIesQuery orderBySigla($order = Criteria::ASC) Order by the sigla column
 * @method TabIesQuery orderByEndereco($order = Criteria::ASC) Order by the endereco column
 * @method TabIesQuery orderByBairro($order = Criteria::ASC) Order by the bairro column
 * @method TabIesQuery orderByCidade($order = Criteria::ASC) Order by the cidade column
 * @method TabIesQuery orderByCep($order = Criteria::ASC) Order by the cep column
 * @method TabIesQuery orderBySite($order = Criteria::ASC) Order by the site column
 * @method TabIesQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method TabIesQuery orderByCondicao($order = Criteria::ASC) Order by the condicao column
 *
 * @method TabIesQuery groupByIdTabIes() Group by the id_tab_ies column
 * @method TabIesQuery groupByFkIdTabIesVinculacao() Group by the fk_id_tab_ies_vinculacao column
 * @method TabIesQuery groupByFkIdTabUf() Group by the fk_id_tab_uf column
 * @method TabIesQuery groupByFkIdTabIesSituacao() Group by the fk_id_tab_ies_situacao column
 * @method TabIesQuery groupByNome() Group by the nome column
 * @method TabIesQuery groupBySigla() Group by the sigla column
 * @method TabIesQuery groupByEndereco() Group by the endereco column
 * @method TabIesQuery groupByBairro() Group by the bairro column
 * @method TabIesQuery groupByCidade() Group by the cidade column
 * @method TabIesQuery groupByCep() Group by the cep column
 * @method TabIesQuery groupBySite() Group by the site column
 * @method TabIesQuery groupByEmail() Group by the email column
 * @method TabIesQuery groupByCondicao() Group by the condicao column
 *
 * @method TabIesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TabIesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TabIesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TabIes findOne(PropelPDO $con = null) Return the first TabIes matching the query
 * @method TabIes findOneOrCreate(PropelPDO $con = null) Return the first TabIes matching the query, or a new TabIes object populated from the query conditions when no match is found
 *
 * @method TabIes findOneByFkIdTabIesVinculacao(int $fk_id_tab_ies_vinculacao) Return the first TabIes filtered by the fk_id_tab_ies_vinculacao column
 * @method TabIes findOneByFkIdTabUf(int $fk_id_tab_uf) Return the first TabIes filtered by the fk_id_tab_uf column
 * @method TabIes findOneByFkIdTabIesSituacao(int $fk_id_tab_ies_situacao) Return the first TabIes filtered by the fk_id_tab_ies_situacao column
 * @method TabIes findOneByNome(string $nome) Return the first TabIes filtered by the nome column
 * @method TabIes findOneBySigla(string $sigla) Return the first TabIes filtered by the sigla column
 * @method TabIes findOneByEndereco(string $endereco) Return the first TabIes filtered by the endereco column
 * @method TabIes findOneByBairro(string $bairro) Return the first TabIes filtered by the bairro column
 * @method TabIes findOneByCidade(string $cidade) Return the first TabIes filtered by the cidade column
 * @method TabIes findOneByCep(string $cep) Return the first TabIes filtered by the cep column
 * @method TabIes findOneBySite(string $site) Return the first TabIes filtered by the site column
 * @method TabIes findOneByEmail(string $email) Return the first TabIes filtered by the email column
 * @method TabIes findOneByCondicao(string $condicao) Return the first TabIes filtered by the condicao column
 *
 * @method array findByIdTabIes(int $id_tab_ies) Return TabIes objects filtered by the id_tab_ies column
 * @method array findByFkIdTabIesVinculacao(int $fk_id_tab_ies_vinculacao) Return TabIes objects filtered by the fk_id_tab_ies_vinculacao column
 * @method array findByFkIdTabUf(int $fk_id_tab_uf) Return TabIes objects filtered by the fk_id_tab_uf column
 * @method array findByFkIdTabIesSituacao(int $fk_id_tab_ies_situacao) Return TabIes objects filtered by the fk_id_tab_ies_situacao column
 * @method array findByNome(string $nome) Return TabIes objects filtered by the nome column
 * @method array findBySigla(string $sigla) Return TabIes objects filtered by the sigla column
 * @method array findByEndereco(string $endereco) Return TabIes objects filtered by the endereco column
 * @method array findByBairro(string $bairro) Return TabIes objects filtered by the bairro column
 * @method array findByCidade(string $cidade) Return TabIes objects filtered by the cidade column
 * @method array findByCep(string $cep) Return TabIes objects filtered by the cep column
 * @method array findBySite(string $site) Return TabIes objects filtered by the site column
 * @method array findByEmail(string $email) Return TabIes objects filtered by the email column
 * @method array findByCondicao(string $condicao) Return TabIes objects filtered by the condicao column
 *
 * @package    propel.generator.siscad.om
 */
abstract class BaseTabIesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTabIesQuery object.
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
            $modelName = 'Model\\TabIes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TabIesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TabIesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TabIesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TabIesQuery) {
            return $criteria;
        }
        $query = new TabIesQuery(null, null, $modelAlias);

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
     * @return   TabIes|TabIes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TabIesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TabIesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TabIes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTabIes($key, $con = null)
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
     * @return                 TabIes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_tab_ies`, `fk_id_tab_ies_vinculacao`, `fk_id_tab_uf`, `fk_id_tab_ies_situacao`, `nome`, `sigla`, `endereco`, `bairro`, `cidade`, `cep`, `site`, `email`, `condicao` FROM `tab_ies` WHERE `id_tab_ies` = :p0';
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
            $obj = new TabIes();
            $obj->hydrate($row);
            TabIesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TabIes|TabIes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TabIes[]|mixed the list of results, formatted by the current formatter
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
     * @return TabIesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TabIesPeer::ID_TAB_IES, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TabIesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TabIesPeer::ID_TAB_IES, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tab_ies column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTabIes(1234); // WHERE id_tab_ies = 1234
     * $query->filterByIdTabIes(array(12, 34)); // WHERE id_tab_ies IN (12, 34)
     * $query->filterByIdTabIes(array('min' => 12)); // WHERE id_tab_ies >= 12
     * $query->filterByIdTabIes(array('max' => 12)); // WHERE id_tab_ies <= 12
     * </code>
     *
     * @param     mixed $idTabIes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabIesQuery The current query, for fluid interface
     */
    public function filterByIdTabIes($idTabIes = null, $comparison = null)
    {
        if (is_array($idTabIes)) {
            $useMinMax = false;
            if (isset($idTabIes['min'])) {
                $this->addUsingAlias(TabIesPeer::ID_TAB_IES, $idTabIes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTabIes['max'])) {
                $this->addUsingAlias(TabIesPeer::ID_TAB_IES, $idTabIes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabIesPeer::ID_TAB_IES, $idTabIes, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_ies_vinculacao column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabIesVinculacao(1234); // WHERE fk_id_tab_ies_vinculacao = 1234
     * $query->filterByFkIdTabIesVinculacao(array(12, 34)); // WHERE fk_id_tab_ies_vinculacao IN (12, 34)
     * $query->filterByFkIdTabIesVinculacao(array('min' => 12)); // WHERE fk_id_tab_ies_vinculacao >= 12
     * $query->filterByFkIdTabIesVinculacao(array('max' => 12)); // WHERE fk_id_tab_ies_vinculacao <= 12
     * </code>
     *
     * @param     mixed $fkIdTabIesVinculacao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabIesQuery The current query, for fluid interface
     */
    public function filterByFkIdTabIesVinculacao($fkIdTabIesVinculacao = null, $comparison = null)
    {
        if (is_array($fkIdTabIesVinculacao)) {
            $useMinMax = false;
            if (isset($fkIdTabIesVinculacao['min'])) {
                $this->addUsingAlias(TabIesPeer::FK_ID_TAB_IES_VINCULACAO, $fkIdTabIesVinculacao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabIesVinculacao['max'])) {
                $this->addUsingAlias(TabIesPeer::FK_ID_TAB_IES_VINCULACAO, $fkIdTabIesVinculacao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabIesPeer::FK_ID_TAB_IES_VINCULACAO, $fkIdTabIesVinculacao, $comparison);
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
     * @return TabIesQuery The current query, for fluid interface
     */
    public function filterByFkIdTabUf($fkIdTabUf = null, $comparison = null)
    {
        if (is_array($fkIdTabUf)) {
            $useMinMax = false;
            if (isset($fkIdTabUf['min'])) {
                $this->addUsingAlias(TabIesPeer::FK_ID_TAB_UF, $fkIdTabUf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabUf['max'])) {
                $this->addUsingAlias(TabIesPeer::FK_ID_TAB_UF, $fkIdTabUf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabIesPeer::FK_ID_TAB_UF, $fkIdTabUf, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_ies_situacao column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabIesSituacao(1234); // WHERE fk_id_tab_ies_situacao = 1234
     * $query->filterByFkIdTabIesSituacao(array(12, 34)); // WHERE fk_id_tab_ies_situacao IN (12, 34)
     * $query->filterByFkIdTabIesSituacao(array('min' => 12)); // WHERE fk_id_tab_ies_situacao >= 12
     * $query->filterByFkIdTabIesSituacao(array('max' => 12)); // WHERE fk_id_tab_ies_situacao <= 12
     * </code>
     *
     * @param     mixed $fkIdTabIesSituacao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabIesQuery The current query, for fluid interface
     */
    public function filterByFkIdTabIesSituacao($fkIdTabIesSituacao = null, $comparison = null)
    {
        if (is_array($fkIdTabIesSituacao)) {
            $useMinMax = false;
            if (isset($fkIdTabIesSituacao['min'])) {
                $this->addUsingAlias(TabIesPeer::FK_ID_TAB_IES_SITUACAO, $fkIdTabIesSituacao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabIesSituacao['max'])) {
                $this->addUsingAlias(TabIesPeer::FK_ID_TAB_IES_SITUACAO, $fkIdTabIesSituacao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabIesPeer::FK_ID_TAB_IES_SITUACAO, $fkIdTabIesSituacao, $comparison);
    }

    /**
     * Filter the query on the nome column
     *
     * Example usage:
     * <code>
     * $query->filterByNome('fooValue');   // WHERE nome = 'fooValue'
     * $query->filterByNome('%fooValue%'); // WHERE nome LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nome The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabIesQuery The current query, for fluid interface
     */
    public function filterByNome($nome = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nome)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nome)) {
                $nome = str_replace('*', '%', $nome);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabIesPeer::NOME, $nome, $comparison);
    }

    /**
     * Filter the query on the sigla column
     *
     * Example usage:
     * <code>
     * $query->filterBySigla('fooValue');   // WHERE sigla = 'fooValue'
     * $query->filterBySigla('%fooValue%'); // WHERE sigla LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigla The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabIesQuery The current query, for fluid interface
     */
    public function filterBySigla($sigla = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigla)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigla)) {
                $sigla = str_replace('*', '%', $sigla);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabIesPeer::SIGLA, $sigla, $comparison);
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
     * @return TabIesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabIesPeer::ENDERECO, $endereco, $comparison);
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
     * @return TabIesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabIesPeer::BAIRRO, $bairro, $comparison);
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
     * @return TabIesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabIesPeer::CIDADE, $cidade, $comparison);
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
     * @return TabIesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabIesPeer::CEP, $cep, $comparison);
    }

    /**
     * Filter the query on the site column
     *
     * Example usage:
     * <code>
     * $query->filterBySite('fooValue');   // WHERE site = 'fooValue'
     * $query->filterBySite('%fooValue%'); // WHERE site LIKE '%fooValue%'
     * </code>
     *
     * @param     string $site The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabIesQuery The current query, for fluid interface
     */
    public function filterBySite($site = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($site)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $site)) {
                $site = str_replace('*', '%', $site);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabIesPeer::SITE, $site, $comparison);
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
     * @return TabIesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabIesPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the condicao column
     *
     * Example usage:
     * <code>
     * $query->filterByCondicao('fooValue');   // WHERE condicao = 'fooValue'
     * $query->filterByCondicao('%fooValue%'); // WHERE condicao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $condicao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabIesQuery The current query, for fluid interface
     */
    public function filterByCondicao($condicao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($condicao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $condicao)) {
                $condicao = str_replace('*', '%', $condicao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabIesPeer::CONDICAO, $condicao, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TabIes $tabIes Object to remove from the list of results
     *
     * @return TabIesQuery The current query, for fluid interface
     */
    public function prune($tabIes = null)
    {
        if ($tabIes) {
            $this->addUsingAlias(TabIesPeer::ID_TAB_IES, $tabIes->getIdTabIes(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
