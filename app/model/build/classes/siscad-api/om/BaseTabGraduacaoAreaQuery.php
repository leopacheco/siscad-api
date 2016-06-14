<?php


/**
 * Base class that represents a query for the 'tab_graduacao_area' table.
 *
 *
 *
 * @method TabGraduacaoAreaQuery orderByIdTabGraduacaoArea($order = Criteria::ASC) Order by the id_tab_graduacao_area column
 * @method TabGraduacaoAreaQuery orderByDescricao($order = Criteria::ASC) Order by the descricao column
 *
 * @method TabGraduacaoAreaQuery groupByIdTabGraduacaoArea() Group by the id_tab_graduacao_area column
 * @method TabGraduacaoAreaQuery groupByDescricao() Group by the descricao column
 *
 * @method TabGraduacaoAreaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TabGraduacaoAreaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TabGraduacaoAreaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TabGraduacaoArea findOne(PropelPDO $con = null) Return the first TabGraduacaoArea matching the query
 * @method TabGraduacaoArea findOneOrCreate(PropelPDO $con = null) Return the first TabGraduacaoArea matching the query, or a new TabGraduacaoArea object populated from the query conditions when no match is found
 *
 * @method TabGraduacaoArea findOneByDescricao(string $descricao) Return the first TabGraduacaoArea filtered by the descricao column
 *
 * @method array findByIdTabGraduacaoArea(int $id_tab_graduacao_area) Return TabGraduacaoArea objects filtered by the id_tab_graduacao_area column
 * @method array findByDescricao(string $descricao) Return TabGraduacaoArea objects filtered by the descricao column
 *
 * @package    propel.generator.siscad-api.om
 */
abstract class BaseTabGraduacaoAreaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTabGraduacaoAreaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'siscad-api';
        }
        if (null === $modelName) {
            $modelName = 'TabGraduacaoArea';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TabGraduacaoAreaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TabGraduacaoAreaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TabGraduacaoAreaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TabGraduacaoAreaQuery) {
            return $criteria;
        }
        $query = new TabGraduacaoAreaQuery(null, null, $modelAlias);

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
     * @return   TabGraduacaoArea|TabGraduacaoArea[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TabGraduacaoAreaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TabGraduacaoAreaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TabGraduacaoArea A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTabGraduacaoArea($key, $con = null)
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
     * @return                 TabGraduacaoArea A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_tab_graduacao_area`, `descricao` FROM `tab_graduacao_area` WHERE `id_tab_graduacao_area` = :p0';
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
            $obj = new TabGraduacaoArea();
            $obj->hydrate($row);
            TabGraduacaoAreaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TabGraduacaoArea|TabGraduacaoArea[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TabGraduacaoArea[]|mixed the list of results, formatted by the current formatter
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
     * @return TabGraduacaoAreaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TabGraduacaoAreaPeer::ID_TAB_GRADUACAO_AREA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TabGraduacaoAreaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TabGraduacaoAreaPeer::ID_TAB_GRADUACAO_AREA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tab_graduacao_area column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTabGraduacaoArea(1234); // WHERE id_tab_graduacao_area = 1234
     * $query->filterByIdTabGraduacaoArea(array(12, 34)); // WHERE id_tab_graduacao_area IN (12, 34)
     * $query->filterByIdTabGraduacaoArea(array('min' => 12)); // WHERE id_tab_graduacao_area >= 12
     * $query->filterByIdTabGraduacaoArea(array('max' => 12)); // WHERE id_tab_graduacao_area <= 12
     * </code>
     *
     * @param     mixed $idTabGraduacaoArea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabGraduacaoAreaQuery The current query, for fluid interface
     */
    public function filterByIdTabGraduacaoArea($idTabGraduacaoArea = null, $comparison = null)
    {
        if (is_array($idTabGraduacaoArea)) {
            $useMinMax = false;
            if (isset($idTabGraduacaoArea['min'])) {
                $this->addUsingAlias(TabGraduacaoAreaPeer::ID_TAB_GRADUACAO_AREA, $idTabGraduacaoArea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTabGraduacaoArea['max'])) {
                $this->addUsingAlias(TabGraduacaoAreaPeer::ID_TAB_GRADUACAO_AREA, $idTabGraduacaoArea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabGraduacaoAreaPeer::ID_TAB_GRADUACAO_AREA, $idTabGraduacaoArea, $comparison);
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
     * @return TabGraduacaoAreaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabGraduacaoAreaPeer::DESCRICAO, $descricao, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TabGraduacaoArea $tabGraduacaoArea Object to remove from the list of results
     *
     * @return TabGraduacaoAreaQuery The current query, for fluid interface
     */
    public function prune($tabGraduacaoArea = null)
    {
        if ($tabGraduacaoArea) {
            $this->addUsingAlias(TabGraduacaoAreaPeer::ID_TAB_GRADUACAO_AREA, $tabGraduacaoArea->getIdTabGraduacaoArea(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
