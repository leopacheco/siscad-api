<?php


/**
 * Base class that represents a query for the 'tab_ramo3' table.
 *
 *
 *
 * @method TabRamo3Query orderByIdTabRamo3($order = Criteria::ASC) Order by the id_tab_ramo3 column
 * @method TabRamo3Query orderByCodRamo1($order = Criteria::ASC) Order by the cod_ramo1 column
 * @method TabRamo3Query orderByCodRamo2($order = Criteria::ASC) Order by the cod_ramo2 column
 * @method TabRamo3Query orderByCodRamo3($order = Criteria::ASC) Order by the cod_ramo3 column
 * @method TabRamo3Query orderByDescricao($order = Criteria::ASC) Order by the descricao column
 *
 * @method TabRamo3Query groupByIdTabRamo3() Group by the id_tab_ramo3 column
 * @method TabRamo3Query groupByCodRamo1() Group by the cod_ramo1 column
 * @method TabRamo3Query groupByCodRamo2() Group by the cod_ramo2 column
 * @method TabRamo3Query groupByCodRamo3() Group by the cod_ramo3 column
 * @method TabRamo3Query groupByDescricao() Group by the descricao column
 *
 * @method TabRamo3Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TabRamo3Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TabRamo3Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TabRamo3 findOne(PropelPDO $con = null) Return the first TabRamo3 matching the query
 * @method TabRamo3 findOneOrCreate(PropelPDO $con = null) Return the first TabRamo3 matching the query, or a new TabRamo3 object populated from the query conditions when no match is found
 *
 * @method TabRamo3 findOneByCodRamo1(string $cod_ramo1) Return the first TabRamo3 filtered by the cod_ramo1 column
 * @method TabRamo3 findOneByCodRamo2(string $cod_ramo2) Return the first TabRamo3 filtered by the cod_ramo2 column
 * @method TabRamo3 findOneByCodRamo3(string $cod_ramo3) Return the first TabRamo3 filtered by the cod_ramo3 column
 * @method TabRamo3 findOneByDescricao(string $descricao) Return the first TabRamo3 filtered by the descricao column
 *
 * @method array findByIdTabRamo3(int $id_tab_ramo3) Return TabRamo3 objects filtered by the id_tab_ramo3 column
 * @method array findByCodRamo1(string $cod_ramo1) Return TabRamo3 objects filtered by the cod_ramo1 column
 * @method array findByCodRamo2(string $cod_ramo2) Return TabRamo3 objects filtered by the cod_ramo2 column
 * @method array findByCodRamo3(string $cod_ramo3) Return TabRamo3 objects filtered by the cod_ramo3 column
 * @method array findByDescricao(string $descricao) Return TabRamo3 objects filtered by the descricao column
 *
 * @package    propel.generator.siscad.om
 */
abstract class BaseTabRamo3Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTabRamo3Query object.
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
            $modelName = 'TabRamo3';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TabRamo3Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TabRamo3Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TabRamo3Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TabRamo3Query) {
            return $criteria;
        }
        $query = new TabRamo3Query(null, null, $modelAlias);

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
     * @return   TabRamo3|TabRamo3[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TabRamo3Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TabRamo3Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TabRamo3 A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTabRamo3($key, $con = null)
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
     * @return                 TabRamo3 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_tab_ramo3`, `cod_ramo1`, `cod_ramo2`, `cod_ramo3`, `descricao` FROM `tab_ramo3` WHERE `id_tab_ramo3` = :p0';
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
            $obj = new TabRamo3();
            $obj->hydrate($row);
            TabRamo3Peer::addInstanceToPool($obj, (string) $key);
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
     * @return TabRamo3|TabRamo3[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TabRamo3[]|mixed the list of results, formatted by the current formatter
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
     * @return TabRamo3Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TabRamo3Peer::ID_TAB_RAMO3, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TabRamo3Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TabRamo3Peer::ID_TAB_RAMO3, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tab_ramo3 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTabRamo3(1234); // WHERE id_tab_ramo3 = 1234
     * $query->filterByIdTabRamo3(array(12, 34)); // WHERE id_tab_ramo3 IN (12, 34)
     * $query->filterByIdTabRamo3(array('min' => 12)); // WHERE id_tab_ramo3 >= 12
     * $query->filterByIdTabRamo3(array('max' => 12)); // WHERE id_tab_ramo3 <= 12
     * </code>
     *
     * @param     mixed $idTabRamo3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabRamo3Query The current query, for fluid interface
     */
    public function filterByIdTabRamo3($idTabRamo3 = null, $comparison = null)
    {
        if (is_array($idTabRamo3)) {
            $useMinMax = false;
            if (isset($idTabRamo3['min'])) {
                $this->addUsingAlias(TabRamo3Peer::ID_TAB_RAMO3, $idTabRamo3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTabRamo3['max'])) {
                $this->addUsingAlias(TabRamo3Peer::ID_TAB_RAMO3, $idTabRamo3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabRamo3Peer::ID_TAB_RAMO3, $idTabRamo3, $comparison);
    }

    /**
     * Filter the query on the cod_ramo1 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodRamo1('fooValue');   // WHERE cod_ramo1 = 'fooValue'
     * $query->filterByCodRamo1('%fooValue%'); // WHERE cod_ramo1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codRamo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabRamo3Query The current query, for fluid interface
     */
    public function filterByCodRamo1($codRamo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codRamo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codRamo1)) {
                $codRamo1 = str_replace('*', '%', $codRamo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabRamo3Peer::COD_RAMO1, $codRamo1, $comparison);
    }

    /**
     * Filter the query on the cod_ramo2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodRamo2('fooValue');   // WHERE cod_ramo2 = 'fooValue'
     * $query->filterByCodRamo2('%fooValue%'); // WHERE cod_ramo2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codRamo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabRamo3Query The current query, for fluid interface
     */
    public function filterByCodRamo2($codRamo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codRamo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codRamo2)) {
                $codRamo2 = str_replace('*', '%', $codRamo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabRamo3Peer::COD_RAMO2, $codRamo2, $comparison);
    }

    /**
     * Filter the query on the cod_ramo3 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodRamo3('fooValue');   // WHERE cod_ramo3 = 'fooValue'
     * $query->filterByCodRamo3('%fooValue%'); // WHERE cod_ramo3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codRamo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabRamo3Query The current query, for fluid interface
     */
    public function filterByCodRamo3($codRamo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codRamo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codRamo3)) {
                $codRamo3 = str_replace('*', '%', $codRamo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TabRamo3Peer::COD_RAMO3, $codRamo3, $comparison);
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
     * @return TabRamo3Query The current query, for fluid interface
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

        return $this->addUsingAlias(TabRamo3Peer::DESCRICAO, $descricao, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TabRamo3 $tabRamo3 Object to remove from the list of results
     *
     * @return TabRamo3Query The current query, for fluid interface
     */
    public function prune($tabRamo3 = null)
    {
        if ($tabRamo3) {
            $this->addUsingAlias(TabRamo3Peer::ID_TAB_RAMO3, $tabRamo3->getIdTabRamo3(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
