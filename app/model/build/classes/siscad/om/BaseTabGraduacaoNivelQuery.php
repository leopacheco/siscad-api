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
use Model\TabGraduacaoNivel;
use Model\TabGraduacaoNivelPeer;
use Model\TabGraduacaoNivelQuery;

/**
 * Base class that represents a query for the 'tab_graduacao_nivel' table.
 *
 *
 *
 * @method TabGraduacaoNivelQuery orderByIdTabGraduacaoNivel($order = Criteria::ASC) Order by the id_tab_graduacao_nivel column
 * @method TabGraduacaoNivelQuery orderByDescricao($order = Criteria::ASC) Order by the descricao column
 *
 * @method TabGraduacaoNivelQuery groupByIdTabGraduacaoNivel() Group by the id_tab_graduacao_nivel column
 * @method TabGraduacaoNivelQuery groupByDescricao() Group by the descricao column
 *
 * @method TabGraduacaoNivelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TabGraduacaoNivelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TabGraduacaoNivelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TabGraduacaoNivel findOne(PropelPDO $con = null) Return the first TabGraduacaoNivel matching the query
 * @method TabGraduacaoNivel findOneOrCreate(PropelPDO $con = null) Return the first TabGraduacaoNivel matching the query, or a new TabGraduacaoNivel object populated from the query conditions when no match is found
 *
 * @method TabGraduacaoNivel findOneByDescricao(string $descricao) Return the first TabGraduacaoNivel filtered by the descricao column
 *
 * @method array findByIdTabGraduacaoNivel(int $id_tab_graduacao_nivel) Return TabGraduacaoNivel objects filtered by the id_tab_graduacao_nivel column
 * @method array findByDescricao(string $descricao) Return TabGraduacaoNivel objects filtered by the descricao column
 *
 * @package    propel.generator.siscad.om
 */
abstract class BaseTabGraduacaoNivelQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTabGraduacaoNivelQuery object.
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
            $modelName = 'Model\\TabGraduacaoNivel';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TabGraduacaoNivelQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TabGraduacaoNivelQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TabGraduacaoNivelQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TabGraduacaoNivelQuery) {
            return $criteria;
        }
        $query = new TabGraduacaoNivelQuery(null, null, $modelAlias);

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
     * @return   TabGraduacaoNivel|TabGraduacaoNivel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TabGraduacaoNivelPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TabGraduacaoNivelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TabGraduacaoNivel A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTabGraduacaoNivel($key, $con = null)
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
     * @return                 TabGraduacaoNivel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_tab_graduacao_nivel`, `descricao` FROM `tab_graduacao_nivel` WHERE `id_tab_graduacao_nivel` = :p0';
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
            $obj = new TabGraduacaoNivel();
            $obj->hydrate($row);
            TabGraduacaoNivelPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TabGraduacaoNivel|TabGraduacaoNivel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TabGraduacaoNivel[]|mixed the list of results, formatted by the current formatter
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
     * @return TabGraduacaoNivelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TabGraduacaoNivelPeer::ID_TAB_GRADUACAO_NIVEL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TabGraduacaoNivelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TabGraduacaoNivelPeer::ID_TAB_GRADUACAO_NIVEL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tab_graduacao_nivel column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTabGraduacaoNivel(1234); // WHERE id_tab_graduacao_nivel = 1234
     * $query->filterByIdTabGraduacaoNivel(array(12, 34)); // WHERE id_tab_graduacao_nivel IN (12, 34)
     * $query->filterByIdTabGraduacaoNivel(array('min' => 12)); // WHERE id_tab_graduacao_nivel >= 12
     * $query->filterByIdTabGraduacaoNivel(array('max' => 12)); // WHERE id_tab_graduacao_nivel <= 12
     * </code>
     *
     * @param     mixed $idTabGraduacaoNivel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabGraduacaoNivelQuery The current query, for fluid interface
     */
    public function filterByIdTabGraduacaoNivel($idTabGraduacaoNivel = null, $comparison = null)
    {
        if (is_array($idTabGraduacaoNivel)) {
            $useMinMax = false;
            if (isset($idTabGraduacaoNivel['min'])) {
                $this->addUsingAlias(TabGraduacaoNivelPeer::ID_TAB_GRADUACAO_NIVEL, $idTabGraduacaoNivel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTabGraduacaoNivel['max'])) {
                $this->addUsingAlias(TabGraduacaoNivelPeer::ID_TAB_GRADUACAO_NIVEL, $idTabGraduacaoNivel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabGraduacaoNivelPeer::ID_TAB_GRADUACAO_NIVEL, $idTabGraduacaoNivel, $comparison);
    }

    /**
     * Filter the query on the descricao column
     *
     * Example usage:
     * <code>
     * $query->filterByDescricao('fooValue');   // WHERE descricao = 'fooValue'
     * $query->filterByDescricao('%fooValue%'); // WHERE descricao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descricao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabGraduacaoNivelQuery The current query, for fluid interface
     */
    public function filterByDescricao($descricao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descricao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descricao)) {
                $descricao = str_replace('*', '%', $descricao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabGraduacaoNivelPeer::DESCRICAO, $descricao, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TabGraduacaoNivel $tabGraduacaoNivel Object to remove from the list of results
     *
     * @return TabGraduacaoNivelQuery The current query, for fluid interface
     */
    public function prune($tabGraduacaoNivel = null)
    {
        if ($tabGraduacaoNivel) {
            $this->addUsingAlias(TabGraduacaoNivelPeer::ID_TAB_GRADUACAO_NIVEL, $tabGraduacaoNivel->getIdTabGraduacaoNivel(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
