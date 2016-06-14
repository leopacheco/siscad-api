<?php


/**
 * Base class that represents a query for the 'pf_profissao' table.
 *
 *
 *
 * @method PfProfissaoQuery orderByIdPfProfissao($order = Criteria::ASC) Order by the id_pf_profissao column
 * @method PfProfissaoQuery orderByFkIdPfInformacoes($order = Criteria::ASC) Order by the fk_id_pf_informacoes column
 * @method PfProfissaoQuery orderByEmpresa($order = Criteria::ASC) Order by the empresa column
 * @method PfProfissaoQuery orderByCidade($order = Criteria::ASC) Order by the cidade column
 * @method PfProfissaoQuery orderByDtAdmissao($order = Criteria::ASC) Order by the dt_admissao column
 * @method PfProfissaoQuery orderByDtDemissao($order = Criteria::ASC) Order by the dt_demissao column
 * @method PfProfissaoQuery orderByCargaHoraria($order = Criteria::ASC) Order by the carga_horaria column
 * @method PfProfissaoQuery orderByFkIdTabRamo1($order = Criteria::ASC) Order by the fk_id_tab_ramo1 column
 * @method PfProfissaoQuery orderByFkIdTabRamo2($order = Criteria::ASC) Order by the fk_id_tab_ramo2 column
 * @method PfProfissaoQuery orderByFkIdTabRamo3($order = Criteria::ASC) Order by the fk_id_tab_ramo3 column
 *
 * @method PfProfissaoQuery groupByIdPfProfissao() Group by the id_pf_profissao column
 * @method PfProfissaoQuery groupByFkIdPfInformacoes() Group by the fk_id_pf_informacoes column
 * @method PfProfissaoQuery groupByEmpresa() Group by the empresa column
 * @method PfProfissaoQuery groupByCidade() Group by the cidade column
 * @method PfProfissaoQuery groupByDtAdmissao() Group by the dt_admissao column
 * @method PfProfissaoQuery groupByDtDemissao() Group by the dt_demissao column
 * @method PfProfissaoQuery groupByCargaHoraria() Group by the carga_horaria column
 * @method PfProfissaoQuery groupByFkIdTabRamo1() Group by the fk_id_tab_ramo1 column
 * @method PfProfissaoQuery groupByFkIdTabRamo2() Group by the fk_id_tab_ramo2 column
 * @method PfProfissaoQuery groupByFkIdTabRamo3() Group by the fk_id_tab_ramo3 column
 *
 * @method PfProfissaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfProfissaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfProfissaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfProfissao findOne(PropelPDO $con = null) Return the first PfProfissao matching the query
 * @method PfProfissao findOneOrCreate(PropelPDO $con = null) Return the first PfProfissao matching the query, or a new PfProfissao object populated from the query conditions when no match is found
 *
 * @method PfProfissao findOneByFkIdPfInformacoes(int $fk_id_pf_informacoes) Return the first PfProfissao filtered by the fk_id_pf_informacoes column
 * @method PfProfissao findOneByEmpresa(string $empresa) Return the first PfProfissao filtered by the empresa column
 * @method PfProfissao findOneByCidade(string $cidade) Return the first PfProfissao filtered by the cidade column
 * @method PfProfissao findOneByDtAdmissao(string $dt_admissao) Return the first PfProfissao filtered by the dt_admissao column
 * @method PfProfissao findOneByDtDemissao(string $dt_demissao) Return the first PfProfissao filtered by the dt_demissao column
 * @method PfProfissao findOneByCargaHoraria(int $carga_horaria) Return the first PfProfissao filtered by the carga_horaria column
 * @method PfProfissao findOneByFkIdTabRamo1(int $fk_id_tab_ramo1) Return the first PfProfissao filtered by the fk_id_tab_ramo1 column
 * @method PfProfissao findOneByFkIdTabRamo2(int $fk_id_tab_ramo2) Return the first PfProfissao filtered by the fk_id_tab_ramo2 column
 * @method PfProfissao findOneByFkIdTabRamo3(int $fk_id_tab_ramo3) Return the first PfProfissao filtered by the fk_id_tab_ramo3 column
 *
 * @method array findByIdPfProfissao(int $id_pf_profissao) Return PfProfissao objects filtered by the id_pf_profissao column
 * @method array findByFkIdPfInformacoes(int $fk_id_pf_informacoes) Return PfProfissao objects filtered by the fk_id_pf_informacoes column
 * @method array findByEmpresa(string $empresa) Return PfProfissao objects filtered by the empresa column
 * @method array findByCidade(string $cidade) Return PfProfissao objects filtered by the cidade column
 * @method array findByDtAdmissao(string $dt_admissao) Return PfProfissao objects filtered by the dt_admissao column
 * @method array findByDtDemissao(string $dt_demissao) Return PfProfissao objects filtered by the dt_demissao column
 * @method array findByCargaHoraria(int $carga_horaria) Return PfProfissao objects filtered by the carga_horaria column
 * @method array findByFkIdTabRamo1(int $fk_id_tab_ramo1) Return PfProfissao objects filtered by the fk_id_tab_ramo1 column
 * @method array findByFkIdTabRamo2(int $fk_id_tab_ramo2) Return PfProfissao objects filtered by the fk_id_tab_ramo2 column
 * @method array findByFkIdTabRamo3(int $fk_id_tab_ramo3) Return PfProfissao objects filtered by the fk_id_tab_ramo3 column
 *
 * @package    propel.generator.siscad-api.om
 */
abstract class BasePfProfissaoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfProfissaoQuery object.
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
            $modelName = 'PfProfissao';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfProfissaoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfProfissaoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfProfissaoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfProfissaoQuery) {
            return $criteria;
        }
        $query = new PfProfissaoQuery(null, null, $modelAlias);

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
     * @return   PfProfissao|PfProfissao[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfProfissaoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfProfissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PfProfissao A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdPfProfissao($key, $con = null)
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
     * @return                 PfProfissao A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_pf_profissao`, `fk_id_pf_informacoes`, `empresa`, `cidade`, `dt_admissao`, `dt_demissao`, `carga_horaria`, `fk_id_tab_ramo1`, `fk_id_tab_ramo2`, `fk_id_tab_ramo3` FROM `pf_profissao` WHERE `id_pf_profissao` = :p0';
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
            $obj = new PfProfissao();
            $obj->hydrate($row);
            PfProfissaoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PfProfissao|PfProfissao[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PfProfissao[]|mixed the list of results, formatted by the current formatter
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
     * @return PfProfissaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfProfissaoPeer::ID_PF_PROFISSAO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfProfissaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfProfissaoPeer::ID_PF_PROFISSAO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_pf_profissao column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPfProfissao(1234); // WHERE id_pf_profissao = 1234
     * $query->filterByIdPfProfissao(array(12, 34)); // WHERE id_pf_profissao IN (12, 34)
     * $query->filterByIdPfProfissao(array('min' => 12)); // WHERE id_pf_profissao >= 12
     * $query->filterByIdPfProfissao(array('max' => 12)); // WHERE id_pf_profissao <= 12
     * </code>
     *
     * @param     mixed $idPfProfissao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfProfissaoQuery The current query, for fluid interface
     */
    public function filterByIdPfProfissao($idPfProfissao = null, $comparison = null)
    {
        if (is_array($idPfProfissao)) {
            $useMinMax = false;
            if (isset($idPfProfissao['min'])) {
                $this->addUsingAlias(PfProfissaoPeer::ID_PF_PROFISSAO, $idPfProfissao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPfProfissao['max'])) {
                $this->addUsingAlias(PfProfissaoPeer::ID_PF_PROFISSAO, $idPfProfissao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfProfissaoPeer::ID_PF_PROFISSAO, $idPfProfissao, $comparison);
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
     * @return PfProfissaoQuery The current query, for fluid interface
     */
    public function filterByFkIdPfInformacoes($fkIdPfInformacoes = null, $comparison = null)
    {
        if (is_array($fkIdPfInformacoes)) {
            $useMinMax = false;
            if (isset($fkIdPfInformacoes['min'])) {
                $this->addUsingAlias(PfProfissaoPeer::FK_ID_PF_INFORMACOES, $fkIdPfInformacoes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdPfInformacoes['max'])) {
                $this->addUsingAlias(PfProfissaoPeer::FK_ID_PF_INFORMACOES, $fkIdPfInformacoes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfProfissaoPeer::FK_ID_PF_INFORMACOES, $fkIdPfInformacoes, $comparison);
    }

    /**
     * Filter the query on the empresa column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresa('fooValue');   // WHERE empresa = 'fooValue'
     * $query->filterByEmpresa('%fooValue%'); // WHERE empresa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfProfissaoQuery The current query, for fluid interface
     */
    public function filterByEmpresa($empresa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresa)) {
                $empresa = str_replace('*', '%', $empresa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfProfissaoPeer::EMPRESA, $empresa, $comparison);
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
     * @return PfProfissaoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PfProfissaoPeer::CIDADE, $cidade, $comparison);
    }

    /**
     * Filter the query on the dt_admissao column
     *
     * Example usage:
     * <code>
     * $query->filterByDtAdmissao('2011-03-14'); // WHERE dt_admissao = '2011-03-14'
     * $query->filterByDtAdmissao('now'); // WHERE dt_admissao = '2011-03-14'
     * $query->filterByDtAdmissao(array('max' => 'yesterday')); // WHERE dt_admissao < '2011-03-13'
     * </code>
     *
     * @param     mixed $dtAdmissao The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfProfissaoQuery The current query, for fluid interface
     */
    public function filterByDtAdmissao($dtAdmissao = null, $comparison = null)
    {
        if (is_array($dtAdmissao)) {
            $useMinMax = false;
            if (isset($dtAdmissao['min'])) {
                $this->addUsingAlias(PfProfissaoPeer::DT_ADMISSAO, $dtAdmissao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtAdmissao['max'])) {
                $this->addUsingAlias(PfProfissaoPeer::DT_ADMISSAO, $dtAdmissao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfProfissaoPeer::DT_ADMISSAO, $dtAdmissao, $comparison);
    }

    /**
     * Filter the query on the dt_demissao column
     *
     * Example usage:
     * <code>
     * $query->filterByDtDemissao('2011-03-14'); // WHERE dt_demissao = '2011-03-14'
     * $query->filterByDtDemissao('now'); // WHERE dt_demissao = '2011-03-14'
     * $query->filterByDtDemissao(array('max' => 'yesterday')); // WHERE dt_demissao < '2011-03-13'
     * </code>
     *
     * @param     mixed $dtDemissao The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfProfissaoQuery The current query, for fluid interface
     */
    public function filterByDtDemissao($dtDemissao = null, $comparison = null)
    {
        if (is_array($dtDemissao)) {
            $useMinMax = false;
            if (isset($dtDemissao['min'])) {
                $this->addUsingAlias(PfProfissaoPeer::DT_DEMISSAO, $dtDemissao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtDemissao['max'])) {
                $this->addUsingAlias(PfProfissaoPeer::DT_DEMISSAO, $dtDemissao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfProfissaoPeer::DT_DEMISSAO, $dtDemissao, $comparison);
    }

    /**
     * Filter the query on the carga_horaria column
     *
     * Example usage:
     * <code>
     * $query->filterByCargaHoraria(1234); // WHERE carga_horaria = 1234
     * $query->filterByCargaHoraria(array(12, 34)); // WHERE carga_horaria IN (12, 34)
     * $query->filterByCargaHoraria(array('min' => 12)); // WHERE carga_horaria >= 12
     * $query->filterByCargaHoraria(array('max' => 12)); // WHERE carga_horaria <= 12
     * </code>
     *
     * @param     mixed $cargaHoraria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfProfissaoQuery The current query, for fluid interface
     */
    public function filterByCargaHoraria($cargaHoraria = null, $comparison = null)
    {
        if (is_array($cargaHoraria)) {
            $useMinMax = false;
            if (isset($cargaHoraria['min'])) {
                $this->addUsingAlias(PfProfissaoPeer::CARGA_HORARIA, $cargaHoraria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cargaHoraria['max'])) {
                $this->addUsingAlias(PfProfissaoPeer::CARGA_HORARIA, $cargaHoraria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfProfissaoPeer::CARGA_HORARIA, $cargaHoraria, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_ramo1 column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabRamo1(1234); // WHERE fk_id_tab_ramo1 = 1234
     * $query->filterByFkIdTabRamo1(array(12, 34)); // WHERE fk_id_tab_ramo1 IN (12, 34)
     * $query->filterByFkIdTabRamo1(array('min' => 12)); // WHERE fk_id_tab_ramo1 >= 12
     * $query->filterByFkIdTabRamo1(array('max' => 12)); // WHERE fk_id_tab_ramo1 <= 12
     * </code>
     *
     * @param     mixed $fkIdTabRamo1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfProfissaoQuery The current query, for fluid interface
     */
    public function filterByFkIdTabRamo1($fkIdTabRamo1 = null, $comparison = null)
    {
        if (is_array($fkIdTabRamo1)) {
            $useMinMax = false;
            if (isset($fkIdTabRamo1['min'])) {
                $this->addUsingAlias(PfProfissaoPeer::FK_ID_TAB_RAMO1, $fkIdTabRamo1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabRamo1['max'])) {
                $this->addUsingAlias(PfProfissaoPeer::FK_ID_TAB_RAMO1, $fkIdTabRamo1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfProfissaoPeer::FK_ID_TAB_RAMO1, $fkIdTabRamo1, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_ramo2 column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabRamo2(1234); // WHERE fk_id_tab_ramo2 = 1234
     * $query->filterByFkIdTabRamo2(array(12, 34)); // WHERE fk_id_tab_ramo2 IN (12, 34)
     * $query->filterByFkIdTabRamo2(array('min' => 12)); // WHERE fk_id_tab_ramo2 >= 12
     * $query->filterByFkIdTabRamo2(array('max' => 12)); // WHERE fk_id_tab_ramo2 <= 12
     * </code>
     *
     * @param     mixed $fkIdTabRamo2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfProfissaoQuery The current query, for fluid interface
     */
    public function filterByFkIdTabRamo2($fkIdTabRamo2 = null, $comparison = null)
    {
        if (is_array($fkIdTabRamo2)) {
            $useMinMax = false;
            if (isset($fkIdTabRamo2['min'])) {
                $this->addUsingAlias(PfProfissaoPeer::FK_ID_TAB_RAMO2, $fkIdTabRamo2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabRamo2['max'])) {
                $this->addUsingAlias(PfProfissaoPeer::FK_ID_TAB_RAMO2, $fkIdTabRamo2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfProfissaoPeer::FK_ID_TAB_RAMO2, $fkIdTabRamo2, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_ramo3 column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabRamo3(1234); // WHERE fk_id_tab_ramo3 = 1234
     * $query->filterByFkIdTabRamo3(array(12, 34)); // WHERE fk_id_tab_ramo3 IN (12, 34)
     * $query->filterByFkIdTabRamo3(array('min' => 12)); // WHERE fk_id_tab_ramo3 >= 12
     * $query->filterByFkIdTabRamo3(array('max' => 12)); // WHERE fk_id_tab_ramo3 <= 12
     * </code>
     *
     * @param     mixed $fkIdTabRamo3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfProfissaoQuery The current query, for fluid interface
     */
    public function filterByFkIdTabRamo3($fkIdTabRamo3 = null, $comparison = null)
    {
        if (is_array($fkIdTabRamo3)) {
            $useMinMax = false;
            if (isset($fkIdTabRamo3['min'])) {
                $this->addUsingAlias(PfProfissaoPeer::FK_ID_TAB_RAMO3, $fkIdTabRamo3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabRamo3['max'])) {
                $this->addUsingAlias(PfProfissaoPeer::FK_ID_TAB_RAMO3, $fkIdTabRamo3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfProfissaoPeer::FK_ID_TAB_RAMO3, $fkIdTabRamo3, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfProfissao $pfProfissao Object to remove from the list of results
     *
     * @return PfProfissaoQuery The current query, for fluid interface
     */
    public function prune($pfProfissao = null)
    {
        if ($pfProfissao) {
            $this->addUsingAlias(PfProfissaoPeer::ID_PF_PROFISSAO, $pfProfissao->getIdPfProfissao(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
