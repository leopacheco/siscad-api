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
use Model\TabUf;
use Model\TabUfPeer;
use Model\TabUfQuery;

/**
 * Base class that represents a query for the 'tab_uf' table.
 *
 *
 *
 * @method TabUfQuery orderByIdTabUf($order = Criteria::ASC) Order by the id_tab_uf column
 * @method TabUfQuery orderBySigla($order = Criteria::ASC) Order by the sigla column
 * @method TabUfQuery orderByTratamento($order = Criteria::ASC) Order by the tratamento column
 * @method TabUfQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 * @method TabUfQuery orderByCapital($order = Criteria::ASC) Order by the capital column
 * @method TabUfQuery orderByRua($order = Criteria::ASC) Order by the rua column
 * @method TabUfQuery orderByBairro($order = Criteria::ASC) Order by the bairro column
 * @method TabUfQuery orderByCep($order = Criteria::ASC) Order by the cep column
 * @method TabUfQuery orderByDdd($order = Criteria::ASC) Order by the ddd column
 * @method TabUfQuery orderByTelefone($order = Criteria::ASC) Order by the telefone column
 * @method TabUfQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method TabUfQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method TabUfQuery orderBySequenciaTf($order = Criteria::ASC) Order by the sequencia_tf column
 * @method TabUfQuery orderBySequenciaAi($order = Criteria::ASC) Order by the sequencia_ai column
 * @method TabUfQuery orderByAno($order = Criteria::ASC) Order by the ano column
 * @method TabUfQuery orderByRegiao($order = Criteria::ASC) Order by the regiao column
 * @method TabUfQuery orderByRes1102($order = Criteria::ASC) Order by the res1102 column
 *
 * @method TabUfQuery groupByIdTabUf() Group by the id_tab_uf column
 * @method TabUfQuery groupBySigla() Group by the sigla column
 * @method TabUfQuery groupByTratamento() Group by the tratamento column
 * @method TabUfQuery groupByEstado() Group by the estado column
 * @method TabUfQuery groupByCapital() Group by the capital column
 * @method TabUfQuery groupByRua() Group by the rua column
 * @method TabUfQuery groupByBairro() Group by the bairro column
 * @method TabUfQuery groupByCep() Group by the cep column
 * @method TabUfQuery groupByDdd() Group by the ddd column
 * @method TabUfQuery groupByTelefone() Group by the telefone column
 * @method TabUfQuery groupByFax() Group by the fax column
 * @method TabUfQuery groupByEmail() Group by the email column
 * @method TabUfQuery groupBySequenciaTf() Group by the sequencia_tf column
 * @method TabUfQuery groupBySequenciaAi() Group by the sequencia_ai column
 * @method TabUfQuery groupByAno() Group by the ano column
 * @method TabUfQuery groupByRegiao() Group by the regiao column
 * @method TabUfQuery groupByRes1102() Group by the res1102 column
 *
 * @method TabUfQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TabUfQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TabUfQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TabUf findOne(PropelPDO $con = null) Return the first TabUf matching the query
 * @method TabUf findOneOrCreate(PropelPDO $con = null) Return the first TabUf matching the query, or a new TabUf object populated from the query conditions when no match is found
 *
 * @method TabUf findOneBySigla(string $sigla) Return the first TabUf filtered by the sigla column
 * @method TabUf findOneByTratamento(string $tratamento) Return the first TabUf filtered by the tratamento column
 * @method TabUf findOneByEstado(string $estado) Return the first TabUf filtered by the estado column
 * @method TabUf findOneByCapital(string $capital) Return the first TabUf filtered by the capital column
 * @method TabUf findOneByRua(string $rua) Return the first TabUf filtered by the rua column
 * @method TabUf findOneByBairro(string $bairro) Return the first TabUf filtered by the bairro column
 * @method TabUf findOneByCep(string $cep) Return the first TabUf filtered by the cep column
 * @method TabUf findOneByDdd(string $ddd) Return the first TabUf filtered by the ddd column
 * @method TabUf findOneByTelefone(string $telefone) Return the first TabUf filtered by the telefone column
 * @method TabUf findOneByFax(string $fax) Return the first TabUf filtered by the fax column
 * @method TabUf findOneByEmail(string $email) Return the first TabUf filtered by the email column
 * @method TabUf findOneBySequenciaTf(int $sequencia_tf) Return the first TabUf filtered by the sequencia_tf column
 * @method TabUf findOneBySequenciaAi(int $sequencia_ai) Return the first TabUf filtered by the sequencia_ai column
 * @method TabUf findOneByAno(string $ano) Return the first TabUf filtered by the ano column
 * @method TabUf findOneByRegiao(string $regiao) Return the first TabUf filtered by the regiao column
 * @method TabUf findOneByRes1102(int $res1102) Return the first TabUf filtered by the res1102 column
 *
 * @method array findByIdTabUf(int $id_tab_uf) Return TabUf objects filtered by the id_tab_uf column
 * @method array findBySigla(string $sigla) Return TabUf objects filtered by the sigla column
 * @method array findByTratamento(string $tratamento) Return TabUf objects filtered by the tratamento column
 * @method array findByEstado(string $estado) Return TabUf objects filtered by the estado column
 * @method array findByCapital(string $capital) Return TabUf objects filtered by the capital column
 * @method array findByRua(string $rua) Return TabUf objects filtered by the rua column
 * @method array findByBairro(string $bairro) Return TabUf objects filtered by the bairro column
 * @method array findByCep(string $cep) Return TabUf objects filtered by the cep column
 * @method array findByDdd(string $ddd) Return TabUf objects filtered by the ddd column
 * @method array findByTelefone(string $telefone) Return TabUf objects filtered by the telefone column
 * @method array findByFax(string $fax) Return TabUf objects filtered by the fax column
 * @method array findByEmail(string $email) Return TabUf objects filtered by the email column
 * @method array findBySequenciaTf(int $sequencia_tf) Return TabUf objects filtered by the sequencia_tf column
 * @method array findBySequenciaAi(int $sequencia_ai) Return TabUf objects filtered by the sequencia_ai column
 * @method array findByAno(string $ano) Return TabUf objects filtered by the ano column
 * @method array findByRegiao(string $regiao) Return TabUf objects filtered by the regiao column
 * @method array findByRes1102(int $res1102) Return TabUf objects filtered by the res1102 column
 *
 * @package    propel.generator.siscad.om
 */
abstract class BaseTabUfQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTabUfQuery object.
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
            $modelName = 'Model\\TabUf';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TabUfQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TabUfQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TabUfQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TabUfQuery) {
            return $criteria;
        }
        $query = new TabUfQuery(null, null, $modelAlias);

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
     * @return   TabUf|TabUf[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TabUfPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TabUfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TabUf A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTabUf($key, $con = null)
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
     * @return                 TabUf A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_tab_uf`, `sigla`, `tratamento`, `estado`, `capital`, `rua`, `bairro`, `cep`, `ddd`, `telefone`, `fax`, `email`, `sequencia_tf`, `sequencia_ai`, `ano`, `regiao`, `res1102` FROM `tab_uf` WHERE `id_tab_uf` = :p0';
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
            $obj = new TabUf();
            $obj->hydrate($row);
            TabUfPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TabUf|TabUf[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TabUf[]|mixed the list of results, formatted by the current formatter
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
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TabUfPeer::ID_TAB_UF, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TabUfPeer::ID_TAB_UF, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tab_uf column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTabUf(1234); // WHERE id_tab_uf = 1234
     * $query->filterByIdTabUf(array(12, 34)); // WHERE id_tab_uf IN (12, 34)
     * $query->filterByIdTabUf(array('min' => 12)); // WHERE id_tab_uf >= 12
     * $query->filterByIdTabUf(array('max' => 12)); // WHERE id_tab_uf <= 12
     * </code>
     *
     * @param     mixed $idTabUf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterByIdTabUf($idTabUf = null, $comparison = null)
    {
        if (is_array($idTabUf)) {
            $useMinMax = false;
            if (isset($idTabUf['min'])) {
                $this->addUsingAlias(TabUfPeer::ID_TAB_UF, $idTabUf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTabUf['max'])) {
                $this->addUsingAlias(TabUfPeer::ID_TAB_UF, $idTabUf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabUfPeer::ID_TAB_UF, $idTabUf, $comparison);
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
     * @return TabUfQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabUfPeer::SIGLA, $sigla, $comparison);
    }

    /**
     * Filter the query on the tratamento column
     *
     * Example usage:
     * <code>
     * $query->filterByTratamento('fooValue');   // WHERE tratamento = 'fooValue'
     * $query->filterByTratamento('%fooValue%'); // WHERE tratamento LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tratamento The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterByTratamento($tratamento = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tratamento)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tratamento)) {
                $tratamento = str_replace('*', '%', $tratamento);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabUfPeer::TRATAMENTO, $tratamento, $comparison);
    }

    /**
     * Filter the query on the estado column
     *
     * Example usage:
     * <code>
     * $query->filterByEstado('fooValue');   // WHERE estado = 'fooValue'
     * $query->filterByEstado('%fooValue%'); // WHERE estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterByEstado($estado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estado)) {
                $estado = str_replace('*', '%', $estado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabUfPeer::ESTADO, $estado, $comparison);
    }

    /**
     * Filter the query on the capital column
     *
     * Example usage:
     * <code>
     * $query->filterByCapital('fooValue');   // WHERE capital = 'fooValue'
     * $query->filterByCapital('%fooValue%'); // WHERE capital LIKE '%fooValue%'
     * </code>
     *
     * @param     string $capital The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterByCapital($capital = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($capital)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $capital)) {
                $capital = str_replace('*', '%', $capital);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabUfPeer::CAPITAL, $capital, $comparison);
    }

    /**
     * Filter the query on the rua column
     *
     * Example usage:
     * <code>
     * $query->filterByRua('fooValue');   // WHERE rua = 'fooValue'
     * $query->filterByRua('%fooValue%'); // WHERE rua LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rua The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterByRua($rua = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rua)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rua)) {
                $rua = str_replace('*', '%', $rua);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabUfPeer::RUA, $rua, $comparison);
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
     * @return TabUfQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabUfPeer::BAIRRO, $bairro, $comparison);
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
     * @return TabUfQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabUfPeer::CEP, $cep, $comparison);
    }

    /**
     * Filter the query on the ddd column
     *
     * Example usage:
     * <code>
     * $query->filterByDdd('fooValue');   // WHERE ddd = 'fooValue'
     * $query->filterByDdd('%fooValue%'); // WHERE ddd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ddd The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterByDdd($ddd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ddd)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ddd)) {
                $ddd = str_replace('*', '%', $ddd);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabUfPeer::DDD, $ddd, $comparison);
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
     * @return TabUfQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabUfPeer::TELEFONE, $telefone, $comparison);
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
     * @return TabUfQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabUfPeer::FAX, $fax, $comparison);
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
     * @return TabUfQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabUfPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the sequencia_tf column
     *
     * Example usage:
     * <code>
     * $query->filterBySequenciaTf(1234); // WHERE sequencia_tf = 1234
     * $query->filterBySequenciaTf(array(12, 34)); // WHERE sequencia_tf IN (12, 34)
     * $query->filterBySequenciaTf(array('min' => 12)); // WHERE sequencia_tf >= 12
     * $query->filterBySequenciaTf(array('max' => 12)); // WHERE sequencia_tf <= 12
     * </code>
     *
     * @param     mixed $sequenciaTf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterBySequenciaTf($sequenciaTf = null, $comparison = null)
    {
        if (is_array($sequenciaTf)) {
            $useMinMax = false;
            if (isset($sequenciaTf['min'])) {
                $this->addUsingAlias(TabUfPeer::SEQUENCIA_TF, $sequenciaTf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sequenciaTf['max'])) {
                $this->addUsingAlias(TabUfPeer::SEQUENCIA_TF, $sequenciaTf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabUfPeer::SEQUENCIA_TF, $sequenciaTf, $comparison);
    }

    /**
     * Filter the query on the sequencia_ai column
     *
     * Example usage:
     * <code>
     * $query->filterBySequenciaAi(1234); // WHERE sequencia_ai = 1234
     * $query->filterBySequenciaAi(array(12, 34)); // WHERE sequencia_ai IN (12, 34)
     * $query->filterBySequenciaAi(array('min' => 12)); // WHERE sequencia_ai >= 12
     * $query->filterBySequenciaAi(array('max' => 12)); // WHERE sequencia_ai <= 12
     * </code>
     *
     * @param     mixed $sequenciaAi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterBySequenciaAi($sequenciaAi = null, $comparison = null)
    {
        if (is_array($sequenciaAi)) {
            $useMinMax = false;
            if (isset($sequenciaAi['min'])) {
                $this->addUsingAlias(TabUfPeer::SEQUENCIA_AI, $sequenciaAi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sequenciaAi['max'])) {
                $this->addUsingAlias(TabUfPeer::SEQUENCIA_AI, $sequenciaAi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabUfPeer::SEQUENCIA_AI, $sequenciaAi, $comparison);
    }

    /**
     * Filter the query on the ano column
     *
     * Example usage:
     * <code>
     * $query->filterByAno('fooValue');   // WHERE ano = 'fooValue'
     * $query->filterByAno('%fooValue%'); // WHERE ano LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ano The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterByAno($ano = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ano)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ano)) {
                $ano = str_replace('*', '%', $ano);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabUfPeer::ANO, $ano, $comparison);
    }

    /**
     * Filter the query on the regiao column
     *
     * Example usage:
     * <code>
     * $query->filterByRegiao('fooValue');   // WHERE regiao = 'fooValue'
     * $query->filterByRegiao('%fooValue%'); // WHERE regiao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regiao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterByRegiao($regiao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regiao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $regiao)) {
                $regiao = str_replace('*', '%', $regiao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabUfPeer::REGIAO, $regiao, $comparison);
    }

    /**
     * Filter the query on the res1102 column
     *
     * Example usage:
     * <code>
     * $query->filterByRes1102(1234); // WHERE res1102 = 1234
     * $query->filterByRes1102(array(12, 34)); // WHERE res1102 IN (12, 34)
     * $query->filterByRes1102(array('min' => 12)); // WHERE res1102 >= 12
     * $query->filterByRes1102(array('max' => 12)); // WHERE res1102 <= 12
     * </code>
     *
     * @param     mixed $res1102 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function filterByRes1102($res1102 = null, $comparison = null)
    {
        if (is_array($res1102)) {
            $useMinMax = false;
            if (isset($res1102['min'])) {
                $this->addUsingAlias(TabUfPeer::RES1102, $res1102['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($res1102['max'])) {
                $this->addUsingAlias(TabUfPeer::RES1102, $res1102['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabUfPeer::RES1102, $res1102, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TabUf $tabUf Object to remove from the list of results
     *
     * @return TabUfQuery The current query, for fluid interface
     */
    public function prune($tabUf = null)
    {
        if ($tabUf) {
            $this->addUsingAlias(TabUfPeer::ID_TAB_UF, $tabUf->getIdTabUf(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
