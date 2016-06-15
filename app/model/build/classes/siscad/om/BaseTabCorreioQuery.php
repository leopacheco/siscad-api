<?php


/**
 * Base class that represents a query for the 'tab_correio' table.
 *
 *
 *
 * @method TabCorreioQuery orderByIdTabCorreio($order = Criteria::ASC) Order by the id_tab_correio column
 * @method TabCorreioQuery orderByDescricao($order = Criteria::ASC) Order by the descricao column
 *
 * @method TabCorreioQuery groupByIdTabCorreio() Group by the id_tab_correio column
 * @method TabCorreioQuery groupByDescricao() Group by the descricao column
 *
 * @method TabCorreioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TabCorreioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TabCorreioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TabCorreio findOne(PropelPDO $con = null) Return the first TabCorreio matching the query
 * @method TabCorreio findOneOrCreate(PropelPDO $con = null) Return the first TabCorreio matching the query, or a new TabCorreio object populated from the query conditions when no match is found
 *
 * @method TabCorreio findOneByDescricao(string $descricao) Return the first TabCorreio filtered by the descricao column
 *
 * @method array findByIdTabCorreio(int $id_tab_correio) Return TabCorreio objects filtered by the id_tab_correio column
 * @method array findByDescricao(string $descricao) Return TabCorreio objects filtered by the descricao column
 *
 * @package    propel.generator.siscad.om
 */
abstract class BaseTabCorreioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTabCorreioQuery object.
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
            $modelName = 'TabCorreio';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TabCorreioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TabCorreioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TabCorreioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TabCorreioQuery) {
            return $criteria;
        }
        $query = new TabCorreioQuery(null, null, $modelAlias);

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
     * @return   TabCorreio|TabCorreio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TabCorreioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TabCorreioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TabCorreio A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTabCorreio($key, $con = null)
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
     * @return                 TabCorreio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_tab_correio`, `descricao` FROM `tab_correio` WHERE `id_tab_correio` = :p0';
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
            $obj = new TabCorreio();
            $obj->hydrate($row);
            TabCorreioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TabCorreio|TabCorreio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TabCorreio[]|mixed the list of results, formatted by the current formatter
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
     * @return TabCorreioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TabCorreioPeer::ID_TAB_CORREIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TabCorreioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TabCorreioPeer::ID_TAB_CORREIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tab_correio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTabCorreio(1234); // WHERE id_tab_correio = 1234
     * $query->filterByIdTabCorreio(array(12, 34)); // WHERE id_tab_correio IN (12, 34)
     * $query->filterByIdTabCorreio(array('min' => 12)); // WHERE id_tab_correio >= 12
     * $query->filterByIdTabCorreio(array('max' => 12)); // WHERE id_tab_correio <= 12
     * </code>
     *
     * @param     mixed $idTabCorreio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TabCorreioQuery The current query, for fluid interface
     */
    public function filterByIdTabCorreio($idTabCorreio = null, $comparison = null)
    {
        if (is_array($idTabCorreio)) {
            $useMinMax = false;
            if (isset($idTabCorreio['min'])) {
                $this->addUsingAlias(TabCorreioPeer::ID_TAB_CORREIO, $idTabCorreio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTabCorreio['max'])) {
                $this->addUsingAlias(TabCorreioPeer::ID_TAB_CORREIO, $idTabCorreio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabCorreioPeer::ID_TAB_CORREIO, $idTabCorreio, $comparison);
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
     * @return TabCorreioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TabCorreioPeer::DESCRICAO, $descricao, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TabCorreio $tabCorreio Object to remove from the list of results
     *
     * @return TabCorreioQuery The current query, for fluid interface
     */
    public function prune($tabCorreio = null)
    {
        if ($tabCorreio) {
            $this->addUsingAlias(TabCorreioPeer::ID_TAB_CORREIO, $tabCorreio->getIdTabCorreio(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
