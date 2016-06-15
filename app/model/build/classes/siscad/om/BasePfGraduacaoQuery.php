<?php


/**
 * Base class that represents a query for the 'pf_graduacao' table.
 *
 *
 *
 * @method PfGraduacaoQuery orderByIdPfGraduacao($order = Criteria::ASC) Order by the id_pf_graduacao column
 * @method PfGraduacaoQuery orderByFkIdTabUf($order = Criteria::ASC) Order by the fk_id_tab_uf column
 * @method PfGraduacaoQuery orderByFkIdPfInformacoes($order = Criteria::ASC) Order by the fk_id_pf_informacoes column
 * @method PfGraduacaoQuery orderByFkIdTabArea($order = Criteria::ASC) Order by the fk_id_tab_area column
 * @method PfGraduacaoQuery orderByFkIdTabNivel($order = Criteria::ASC) Order by the fk_id_tab_nivel column
 * @method PfGraduacaoQuery orderByFkIdTabIes($order = Criteria::ASC) Order by the fk_id_tab_ies column
 * @method PfGraduacaoQuery orderByDtConclusao($order = Criteria::ASC) Order by the dt_conclusao column
 *
 * @method PfGraduacaoQuery groupByIdPfGraduacao() Group by the id_pf_graduacao column
 * @method PfGraduacaoQuery groupByFkIdTabUf() Group by the fk_id_tab_uf column
 * @method PfGraduacaoQuery groupByFkIdPfInformacoes() Group by the fk_id_pf_informacoes column
 * @method PfGraduacaoQuery groupByFkIdTabArea() Group by the fk_id_tab_area column
 * @method PfGraduacaoQuery groupByFkIdTabNivel() Group by the fk_id_tab_nivel column
 * @method PfGraduacaoQuery groupByFkIdTabIes() Group by the fk_id_tab_ies column
 * @method PfGraduacaoQuery groupByDtConclusao() Group by the dt_conclusao column
 *
 * @method PfGraduacaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfGraduacaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfGraduacaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfGraduacao findOne(PropelPDO $con = null) Return the first PfGraduacao matching the query
 * @method PfGraduacao findOneOrCreate(PropelPDO $con = null) Return the first PfGraduacao matching the query, or a new PfGraduacao object populated from the query conditions when no match is found
 *
 * @method PfGraduacao findOneByFkIdTabUf(int $fk_id_tab_uf) Return the first PfGraduacao filtered by the fk_id_tab_uf column
 * @method PfGraduacao findOneByFkIdPfInformacoes(int $fk_id_pf_informacoes) Return the first PfGraduacao filtered by the fk_id_pf_informacoes column
 * @method PfGraduacao findOneByFkIdTabArea(int $fk_id_tab_area) Return the first PfGraduacao filtered by the fk_id_tab_area column
 * @method PfGraduacao findOneByFkIdTabNivel(int $fk_id_tab_nivel) Return the first PfGraduacao filtered by the fk_id_tab_nivel column
 * @method PfGraduacao findOneByFkIdTabIes(int $fk_id_tab_ies) Return the first PfGraduacao filtered by the fk_id_tab_ies column
 * @method PfGraduacao findOneByDtConclusao(string $dt_conclusao) Return the first PfGraduacao filtered by the dt_conclusao column
 *
 * @method array findByIdPfGraduacao(int $id_pf_graduacao) Return PfGraduacao objects filtered by the id_pf_graduacao column
 * @method array findByFkIdTabUf(int $fk_id_tab_uf) Return PfGraduacao objects filtered by the fk_id_tab_uf column
 * @method array findByFkIdPfInformacoes(int $fk_id_pf_informacoes) Return PfGraduacao objects filtered by the fk_id_pf_informacoes column
 * @method array findByFkIdTabArea(int $fk_id_tab_area) Return PfGraduacao objects filtered by the fk_id_tab_area column
 * @method array findByFkIdTabNivel(int $fk_id_tab_nivel) Return PfGraduacao objects filtered by the fk_id_tab_nivel column
 * @method array findByFkIdTabIes(int $fk_id_tab_ies) Return PfGraduacao objects filtered by the fk_id_tab_ies column
 * @method array findByDtConclusao(string $dt_conclusao) Return PfGraduacao objects filtered by the dt_conclusao column
 *
 * @package    propel.generator.siscad.om
 */
abstract class BasePfGraduacaoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfGraduacaoQuery object.
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
            $modelName = 'PfGraduacao';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfGraduacaoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfGraduacaoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfGraduacaoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfGraduacaoQuery) {
            return $criteria;
        }
        $query = new PfGraduacaoQuery(null, null, $modelAlias);

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
     * @return   PfGraduacao|PfGraduacao[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfGraduacaoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfGraduacaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PfGraduacao A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdPfGraduacao($key, $con = null)
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
     * @return                 PfGraduacao A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_pf_graduacao`, `fk_id_tab_uf`, `fk_id_pf_informacoes`, `fk_id_tab_area`, `fk_id_tab_nivel`, `fk_id_tab_ies`, `dt_conclusao` FROM `pf_graduacao` WHERE `id_pf_graduacao` = :p0';
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
            $obj = new PfGraduacao();
            $obj->hydrate($row);
            PfGraduacaoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PfGraduacao|PfGraduacao[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PfGraduacao[]|mixed the list of results, formatted by the current formatter
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
     * @return PfGraduacaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfGraduacaoPeer::ID_PF_GRADUACAO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfGraduacaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfGraduacaoPeer::ID_PF_GRADUACAO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_pf_graduacao column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPfGraduacao(1234); // WHERE id_pf_graduacao = 1234
     * $query->filterByIdPfGraduacao(array(12, 34)); // WHERE id_pf_graduacao IN (12, 34)
     * $query->filterByIdPfGraduacao(array('min' => 12)); // WHERE id_pf_graduacao >= 12
     * $query->filterByIdPfGraduacao(array('max' => 12)); // WHERE id_pf_graduacao <= 12
     * </code>
     *
     * @param     mixed $idPfGraduacao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfGraduacaoQuery The current query, for fluid interface
     */
    public function filterByIdPfGraduacao($idPfGraduacao = null, $comparison = null)
    {
        if (is_array($idPfGraduacao)) {
            $useMinMax = false;
            if (isset($idPfGraduacao['min'])) {
                $this->addUsingAlias(PfGraduacaoPeer::ID_PF_GRADUACAO, $idPfGraduacao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPfGraduacao['max'])) {
                $this->addUsingAlias(PfGraduacaoPeer::ID_PF_GRADUACAO, $idPfGraduacao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfGraduacaoPeer::ID_PF_GRADUACAO, $idPfGraduacao, $comparison);
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
     * @return PfGraduacaoQuery The current query, for fluid interface
     */
    public function filterByFkIdTabUf($fkIdTabUf = null, $comparison = null)
    {
        if (is_array($fkIdTabUf)) {
            $useMinMax = false;
            if (isset($fkIdTabUf['min'])) {
                $this->addUsingAlias(PfGraduacaoPeer::FK_ID_TAB_UF, $fkIdTabUf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabUf['max'])) {
                $this->addUsingAlias(PfGraduacaoPeer::FK_ID_TAB_UF, $fkIdTabUf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfGraduacaoPeer::FK_ID_TAB_UF, $fkIdTabUf, $comparison);
    }

    /**
     * Filter the query on the fk_id_pf_informacoes column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdPfInformacoes(1234); // WHERE fk_id_pf_informacoes = 1234
     * $query->filterByFkIdPfInformacoes(array(12, 34)); // WHERE fk_id_pf_informacoes IN (12, 34)
     * $query->filterByFkIdPfInformacoes(array('min' => 12)); // WHERE fk_id_pf_informacoes >= 12
     * $query->filterByFkIdPfInformacoes(array('max' => 12)); // WHERE fk_id_pf_informacoes <= 12
     * </code>
     *
     * @param     mixed $fkIdPfInformacoes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfGraduacaoQuery The current query, for fluid interface
     */
    public function filterByFkIdPfInformacoes($fkIdPfInformacoes = null, $comparison = null)
    {
        if (is_array($fkIdPfInformacoes)) {
            $useMinMax = false;
            if (isset($fkIdPfInformacoes['min'])) {
                $this->addUsingAlias(PfGraduacaoPeer::FK_ID_PF_INFORMACOES, $fkIdPfInformacoes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdPfInformacoes['max'])) {
                $this->addUsingAlias(PfGraduacaoPeer::FK_ID_PF_INFORMACOES, $fkIdPfInformacoes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfGraduacaoPeer::FK_ID_PF_INFORMACOES, $fkIdPfInformacoes, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_area column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabArea(1234); // WHERE fk_id_tab_area = 1234
     * $query->filterByFkIdTabArea(array(12, 34)); // WHERE fk_id_tab_area IN (12, 34)
     * $query->filterByFkIdTabArea(array('min' => 12)); // WHERE fk_id_tab_area >= 12
     * $query->filterByFkIdTabArea(array('max' => 12)); // WHERE fk_id_tab_area <= 12
     * </code>
     *
     * @param     mixed $fkIdTabArea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfGraduacaoQuery The current query, for fluid interface
     */
    public function filterByFkIdTabArea($fkIdTabArea = null, $comparison = null)
    {
        if (is_array($fkIdTabArea)) {
            $useMinMax = false;
            if (isset($fkIdTabArea['min'])) {
                $this->addUsingAlias(PfGraduacaoPeer::FK_ID_TAB_AREA, $fkIdTabArea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabArea['max'])) {
                $this->addUsingAlias(PfGraduacaoPeer::FK_ID_TAB_AREA, $fkIdTabArea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfGraduacaoPeer::FK_ID_TAB_AREA, $fkIdTabArea, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_nivel column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabNivel(1234); // WHERE fk_id_tab_nivel = 1234
     * $query->filterByFkIdTabNivel(array(12, 34)); // WHERE fk_id_tab_nivel IN (12, 34)
     * $query->filterByFkIdTabNivel(array('min' => 12)); // WHERE fk_id_tab_nivel >= 12
     * $query->filterByFkIdTabNivel(array('max' => 12)); // WHERE fk_id_tab_nivel <= 12
     * </code>
     *
     * @param     mixed $fkIdTabNivel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfGraduacaoQuery The current query, for fluid interface
     */
    public function filterByFkIdTabNivel($fkIdTabNivel = null, $comparison = null)
    {
        if (is_array($fkIdTabNivel)) {
            $useMinMax = false;
            if (isset($fkIdTabNivel['min'])) {
                $this->addUsingAlias(PfGraduacaoPeer::FK_ID_TAB_NIVEL, $fkIdTabNivel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabNivel['max'])) {
                $this->addUsingAlias(PfGraduacaoPeer::FK_ID_TAB_NIVEL, $fkIdTabNivel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfGraduacaoPeer::FK_ID_TAB_NIVEL, $fkIdTabNivel, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_ies column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabIes(1234); // WHERE fk_id_tab_ies = 1234
     * $query->filterByFkIdTabIes(array(12, 34)); // WHERE fk_id_tab_ies IN (12, 34)
     * $query->filterByFkIdTabIes(array('min' => 12)); // WHERE fk_id_tab_ies >= 12
     * $query->filterByFkIdTabIes(array('max' => 12)); // WHERE fk_id_tab_ies <= 12
     * </code>
     *
     * @param     mixed $fkIdTabIes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfGraduacaoQuery The current query, for fluid interface
     */
    public function filterByFkIdTabIes($fkIdTabIes = null, $comparison = null)
    {
        if (is_array($fkIdTabIes)) {
            $useMinMax = false;
            if (isset($fkIdTabIes['min'])) {
                $this->addUsingAlias(PfGraduacaoPeer::FK_ID_TAB_IES, $fkIdTabIes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabIes['max'])) {
                $this->addUsingAlias(PfGraduacaoPeer::FK_ID_TAB_IES, $fkIdTabIes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfGraduacaoPeer::FK_ID_TAB_IES, $fkIdTabIes, $comparison);
    }

    /**
     * Filter the query on the dt_conclusao column
     *
     * Example usage:
     * <code>
     * $query->filterByDtConclusao('2011-03-14'); // WHERE dt_conclusao = '2011-03-14'
     * $query->filterByDtConclusao('now'); // WHERE dt_conclusao = '2011-03-14'
     * $query->filterByDtConclusao(array('max' => 'yesterday')); // WHERE dt_conclusao < '2011-03-13'
     * </code>
     *
     * @param     mixed $dtConclusao The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfGraduacaoQuery The current query, for fluid interface
     */
    public function filterByDtConclusao($dtConclusao = null, $comparison = null)
    {
        if (is_array($dtConclusao)) {
            $useMinMax = false;
            if (isset($dtConclusao['min'])) {
                $this->addUsingAlias(PfGraduacaoPeer::DT_CONCLUSAO, $dtConclusao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtConclusao['max'])) {
                $this->addUsingAlias(PfGraduacaoPeer::DT_CONCLUSAO, $dtConclusao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfGraduacaoPeer::DT_CONCLUSAO, $dtConclusao, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfGraduacao $pfGraduacao Object to remove from the list of results
     *
     * @return PfGraduacaoQuery The current query, for fluid interface
     */
    public function prune($pfGraduacao = null)
    {
        if ($pfGraduacao) {
            $this->addUsingAlias(PfGraduacaoPeer::ID_PF_GRADUACAO, $pfGraduacao->getIdPfGraduacao(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
