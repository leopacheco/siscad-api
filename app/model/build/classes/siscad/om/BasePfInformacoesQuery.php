<?php


/**
 * Base class that represents a query for the 'pf_informacoes' table.
 *
 *
 *
 * @method PfInformacoesQuery orderByIdPfInformacoes($order = Criteria::ASC) Order by the id_pf_informacoes column
 * @method PfInformacoesQuery orderByFkIdTabNacionalidade($order = Criteria::ASC) Order by the fk_id_tab_nacionalidade column
 * @method PfInformacoesQuery orderByFkIdTabEstadoCivil($order = Criteria::ASC) Order by the fk_id_tab_estado_civil column
 * @method PfInformacoesQuery orderByFkIdTabTipoSanguineo($order = Criteria::ASC) Order by the fk_id_tab_tipo_sanguineo column
 * @method PfInformacoesQuery orderByFkIdTabFaixaSalarial($order = Criteria::ASC) Order by the fk_id_tab_faixa_salarial column
 * @method PfInformacoesQuery orderByMae($order = Criteria::ASC) Order by the mae column
 * @method PfInformacoesQuery orderByPai($order = Criteria::ASC) Order by the pai column
 * @method PfInformacoesQuery orderByDtNascimento($order = Criteria::ASC) Order by the dt_nascimento column
 * @method PfInformacoesQuery orderByNaturalidade($order = Criteria::ASC) Order by the naturalidade column
 * @method PfInformacoesQuery orderByUfNaturalidade($order = Criteria::ASC) Order by the uf_naturalidade column
 * @method PfInformacoesQuery orderBySexo($order = Criteria::ASC) Order by the sexo column
 * @method PfInformacoesQuery orderByRgNro($order = Criteria::ASC) Order by the rg_nro column
 * @method PfInformacoesQuery orderByRgOrgaoExpedidor($order = Criteria::ASC) Order by the rg_orgao_expedidor column
 * @method PfInformacoesQuery orderByRgDtExpedicao($order = Criteria::ASC) Order by the rg_dt_expedicao column
 * @method PfInformacoesQuery orderByCertificadoMilitar($order = Criteria::ASC) Order by the certificado_militar column
 * @method PfInformacoesQuery orderByTituloEleitor($order = Criteria::ASC) Order by the titulo_eleitor column
 * @method PfInformacoesQuery orderByCtpsNumero($order = Criteria::ASC) Order by the ctps_numero column
 * @method PfInformacoesQuery orderByCtpsSerie($order = Criteria::ASC) Order by the ctps_serie column
 * @method PfInformacoesQuery orderByCtpsDtExpedicao($order = Criteria::ASC) Order by the ctps_dt_expedicao column
 *
 * @method PfInformacoesQuery groupByIdPfInformacoes() Group by the id_pf_informacoes column
 * @method PfInformacoesQuery groupByFkIdTabNacionalidade() Group by the fk_id_tab_nacionalidade column
 * @method PfInformacoesQuery groupByFkIdTabEstadoCivil() Group by the fk_id_tab_estado_civil column
 * @method PfInformacoesQuery groupByFkIdTabTipoSanguineo() Group by the fk_id_tab_tipo_sanguineo column
 * @method PfInformacoesQuery groupByFkIdTabFaixaSalarial() Group by the fk_id_tab_faixa_salarial column
 * @method PfInformacoesQuery groupByMae() Group by the mae column
 * @method PfInformacoesQuery groupByPai() Group by the pai column
 * @method PfInformacoesQuery groupByDtNascimento() Group by the dt_nascimento column
 * @method PfInformacoesQuery groupByNaturalidade() Group by the naturalidade column
 * @method PfInformacoesQuery groupByUfNaturalidade() Group by the uf_naturalidade column
 * @method PfInformacoesQuery groupBySexo() Group by the sexo column
 * @method PfInformacoesQuery groupByRgNro() Group by the rg_nro column
 * @method PfInformacoesQuery groupByRgOrgaoExpedidor() Group by the rg_orgao_expedidor column
 * @method PfInformacoesQuery groupByRgDtExpedicao() Group by the rg_dt_expedicao column
 * @method PfInformacoesQuery groupByCertificadoMilitar() Group by the certificado_militar column
 * @method PfInformacoesQuery groupByTituloEleitor() Group by the titulo_eleitor column
 * @method PfInformacoesQuery groupByCtpsNumero() Group by the ctps_numero column
 * @method PfInformacoesQuery groupByCtpsSerie() Group by the ctps_serie column
 * @method PfInformacoesQuery groupByCtpsDtExpedicao() Group by the ctps_dt_expedicao column
 *
 * @method PfInformacoesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfInformacoesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfInformacoesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfInformacoes findOne(PropelPDO $con = null) Return the first PfInformacoes matching the query
 * @method PfInformacoes findOneOrCreate(PropelPDO $con = null) Return the first PfInformacoes matching the query, or a new PfInformacoes object populated from the query conditions when no match is found
 *
 * @method PfInformacoes findOneByFkIdTabNacionalidade(int $fk_id_tab_nacionalidade) Return the first PfInformacoes filtered by the fk_id_tab_nacionalidade column
 * @method PfInformacoes findOneByFkIdTabEstadoCivil(int $fk_id_tab_estado_civil) Return the first PfInformacoes filtered by the fk_id_tab_estado_civil column
 * @method PfInformacoes findOneByFkIdTabTipoSanguineo(int $fk_id_tab_tipo_sanguineo) Return the first PfInformacoes filtered by the fk_id_tab_tipo_sanguineo column
 * @method PfInformacoes findOneByFkIdTabFaixaSalarial(int $fk_id_tab_faixa_salarial) Return the first PfInformacoes filtered by the fk_id_tab_faixa_salarial column
 * @method PfInformacoes findOneByMae(string $mae) Return the first PfInformacoes filtered by the mae column
 * @method PfInformacoes findOneByPai(string $pai) Return the first PfInformacoes filtered by the pai column
 * @method PfInformacoes findOneByDtNascimento(string $dt_nascimento) Return the first PfInformacoes filtered by the dt_nascimento column
 * @method PfInformacoes findOneByNaturalidade(string $naturalidade) Return the first PfInformacoes filtered by the naturalidade column
 * @method PfInformacoes findOneByUfNaturalidade(string $uf_naturalidade) Return the first PfInformacoes filtered by the uf_naturalidade column
 * @method PfInformacoes findOneBySexo(string $sexo) Return the first PfInformacoes filtered by the sexo column
 * @method PfInformacoes findOneByRgNro(string $rg_nro) Return the first PfInformacoes filtered by the rg_nro column
 * @method PfInformacoes findOneByRgOrgaoExpedidor(string $rg_orgao_expedidor) Return the first PfInformacoes filtered by the rg_orgao_expedidor column
 * @method PfInformacoes findOneByRgDtExpedicao(string $rg_dt_expedicao) Return the first PfInformacoes filtered by the rg_dt_expedicao column
 * @method PfInformacoes findOneByCertificadoMilitar(string $certificado_militar) Return the first PfInformacoes filtered by the certificado_militar column
 * @method PfInformacoes findOneByTituloEleitor(string $titulo_eleitor) Return the first PfInformacoes filtered by the titulo_eleitor column
 * @method PfInformacoes findOneByCtpsNumero(string $ctps_numero) Return the first PfInformacoes filtered by the ctps_numero column
 * @method PfInformacoes findOneByCtpsSerie(string $ctps_serie) Return the first PfInformacoes filtered by the ctps_serie column
 * @method PfInformacoes findOneByCtpsDtExpedicao(string $ctps_dt_expedicao) Return the first PfInformacoes filtered by the ctps_dt_expedicao column
 *
 * @method array findByIdPfInformacoes(int $id_pf_informacoes) Return PfInformacoes objects filtered by the id_pf_informacoes column
 * @method array findByFkIdTabNacionalidade(int $fk_id_tab_nacionalidade) Return PfInformacoes objects filtered by the fk_id_tab_nacionalidade column
 * @method array findByFkIdTabEstadoCivil(int $fk_id_tab_estado_civil) Return PfInformacoes objects filtered by the fk_id_tab_estado_civil column
 * @method array findByFkIdTabTipoSanguineo(int $fk_id_tab_tipo_sanguineo) Return PfInformacoes objects filtered by the fk_id_tab_tipo_sanguineo column
 * @method array findByFkIdTabFaixaSalarial(int $fk_id_tab_faixa_salarial) Return PfInformacoes objects filtered by the fk_id_tab_faixa_salarial column
 * @method array findByMae(string $mae) Return PfInformacoes objects filtered by the mae column
 * @method array findByPai(string $pai) Return PfInformacoes objects filtered by the pai column
 * @method array findByDtNascimento(string $dt_nascimento) Return PfInformacoes objects filtered by the dt_nascimento column
 * @method array findByNaturalidade(string $naturalidade) Return PfInformacoes objects filtered by the naturalidade column
 * @method array findByUfNaturalidade(string $uf_naturalidade) Return PfInformacoes objects filtered by the uf_naturalidade column
 * @method array findBySexo(string $sexo) Return PfInformacoes objects filtered by the sexo column
 * @method array findByRgNro(string $rg_nro) Return PfInformacoes objects filtered by the rg_nro column
 * @method array findByRgOrgaoExpedidor(string $rg_orgao_expedidor) Return PfInformacoes objects filtered by the rg_orgao_expedidor column
 * @method array findByRgDtExpedicao(string $rg_dt_expedicao) Return PfInformacoes objects filtered by the rg_dt_expedicao column
 * @method array findByCertificadoMilitar(string $certificado_militar) Return PfInformacoes objects filtered by the certificado_militar column
 * @method array findByTituloEleitor(string $titulo_eleitor) Return PfInformacoes objects filtered by the titulo_eleitor column
 * @method array findByCtpsNumero(string $ctps_numero) Return PfInformacoes objects filtered by the ctps_numero column
 * @method array findByCtpsSerie(string $ctps_serie) Return PfInformacoes objects filtered by the ctps_serie column
 * @method array findByCtpsDtExpedicao(string $ctps_dt_expedicao) Return PfInformacoes objects filtered by the ctps_dt_expedicao column
 *
 * @package    propel.generator.siscad.om
 */
abstract class BasePfInformacoesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfInformacoesQuery object.
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
            $modelName = 'PfInformacoes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfInformacoesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfInformacoesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfInformacoesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfInformacoesQuery) {
            return $criteria;
        }
        $query = new PfInformacoesQuery(null, null, $modelAlias);

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
     * @return   PfInformacoes|PfInformacoes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfInformacoesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfInformacoesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PfInformacoes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdPfInformacoes($key, $con = null)
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
     * @return                 PfInformacoes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_pf_informacoes`, `fk_id_tab_nacionalidade`, `fk_id_tab_estado_civil`, `fk_id_tab_tipo_sanguineo`, `fk_id_tab_faixa_salarial`, `mae`, `pai`, `dt_nascimento`, `naturalidade`, `uf_naturalidade`, `sexo`, `rg_nro`, `rg_orgao_expedidor`, `rg_dt_expedicao`, `certificado_militar`, `titulo_eleitor`, `ctps_numero`, `ctps_serie`, `ctps_dt_expedicao` FROM `pf_informacoes` WHERE `id_pf_informacoes` = :p0';
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
            $obj = new PfInformacoes();
            $obj->hydrate($row);
            PfInformacoesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PfInformacoes|PfInformacoes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PfInformacoes[]|mixed the list of results, formatted by the current formatter
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
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfInformacoesPeer::ID_PF_INFORMACOES, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfInformacoesPeer::ID_PF_INFORMACOES, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_pf_informacoes column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPfInformacoes(1234); // WHERE id_pf_informacoes = 1234
     * $query->filterByIdPfInformacoes(array(12, 34)); // WHERE id_pf_informacoes IN (12, 34)
     * $query->filterByIdPfInformacoes(array('min' => 12)); // WHERE id_pf_informacoes >= 12
     * $query->filterByIdPfInformacoes(array('max' => 12)); // WHERE id_pf_informacoes <= 12
     * </code>
     *
     * @param     mixed $idPfInformacoes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByIdPfInformacoes($idPfInformacoes = null, $comparison = null)
    {
        if (is_array($idPfInformacoes)) {
            $useMinMax = false;
            if (isset($idPfInformacoes['min'])) {
                $this->addUsingAlias(PfInformacoesPeer::ID_PF_INFORMACOES, $idPfInformacoes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPfInformacoes['max'])) {
                $this->addUsingAlias(PfInformacoesPeer::ID_PF_INFORMACOES, $idPfInformacoes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::ID_PF_INFORMACOES, $idPfInformacoes, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_nacionalidade column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabNacionalidade(1234); // WHERE fk_id_tab_nacionalidade = 1234
     * $query->filterByFkIdTabNacionalidade(array(12, 34)); // WHERE fk_id_tab_nacionalidade IN (12, 34)
     * $query->filterByFkIdTabNacionalidade(array('min' => 12)); // WHERE fk_id_tab_nacionalidade >= 12
     * $query->filterByFkIdTabNacionalidade(array('max' => 12)); // WHERE fk_id_tab_nacionalidade <= 12
     * </code>
     *
     * @param     mixed $fkIdTabNacionalidade The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByFkIdTabNacionalidade($fkIdTabNacionalidade = null, $comparison = null)
    {
        if (is_array($fkIdTabNacionalidade)) {
            $useMinMax = false;
            if (isset($fkIdTabNacionalidade['min'])) {
                $this->addUsingAlias(PfInformacoesPeer::FK_ID_TAB_NACIONALIDADE, $fkIdTabNacionalidade['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabNacionalidade['max'])) {
                $this->addUsingAlias(PfInformacoesPeer::FK_ID_TAB_NACIONALIDADE, $fkIdTabNacionalidade['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::FK_ID_TAB_NACIONALIDADE, $fkIdTabNacionalidade, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_estado_civil column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabEstadoCivil(1234); // WHERE fk_id_tab_estado_civil = 1234
     * $query->filterByFkIdTabEstadoCivil(array(12, 34)); // WHERE fk_id_tab_estado_civil IN (12, 34)
     * $query->filterByFkIdTabEstadoCivil(array('min' => 12)); // WHERE fk_id_tab_estado_civil >= 12
     * $query->filterByFkIdTabEstadoCivil(array('max' => 12)); // WHERE fk_id_tab_estado_civil <= 12
     * </code>
     *
     * @param     mixed $fkIdTabEstadoCivil The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByFkIdTabEstadoCivil($fkIdTabEstadoCivil = null, $comparison = null)
    {
        if (is_array($fkIdTabEstadoCivil)) {
            $useMinMax = false;
            if (isset($fkIdTabEstadoCivil['min'])) {
                $this->addUsingAlias(PfInformacoesPeer::FK_ID_TAB_ESTADO_CIVIL, $fkIdTabEstadoCivil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabEstadoCivil['max'])) {
                $this->addUsingAlias(PfInformacoesPeer::FK_ID_TAB_ESTADO_CIVIL, $fkIdTabEstadoCivil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::FK_ID_TAB_ESTADO_CIVIL, $fkIdTabEstadoCivil, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_tipo_sanguineo column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabTipoSanguineo(1234); // WHERE fk_id_tab_tipo_sanguineo = 1234
     * $query->filterByFkIdTabTipoSanguineo(array(12, 34)); // WHERE fk_id_tab_tipo_sanguineo IN (12, 34)
     * $query->filterByFkIdTabTipoSanguineo(array('min' => 12)); // WHERE fk_id_tab_tipo_sanguineo >= 12
     * $query->filterByFkIdTabTipoSanguineo(array('max' => 12)); // WHERE fk_id_tab_tipo_sanguineo <= 12
     * </code>
     *
     * @param     mixed $fkIdTabTipoSanguineo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByFkIdTabTipoSanguineo($fkIdTabTipoSanguineo = null, $comparison = null)
    {
        if (is_array($fkIdTabTipoSanguineo)) {
            $useMinMax = false;
            if (isset($fkIdTabTipoSanguineo['min'])) {
                $this->addUsingAlias(PfInformacoesPeer::FK_ID_TAB_TIPO_SANGUINEO, $fkIdTabTipoSanguineo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabTipoSanguineo['max'])) {
                $this->addUsingAlias(PfInformacoesPeer::FK_ID_TAB_TIPO_SANGUINEO, $fkIdTabTipoSanguineo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::FK_ID_TAB_TIPO_SANGUINEO, $fkIdTabTipoSanguineo, $comparison);
    }

    /**
     * Filter the query on the fk_id_tab_faixa_salarial column
     *
     * Example usage:
     * <code>
     * $query->filterByFkIdTabFaixaSalarial(1234); // WHERE fk_id_tab_faixa_salarial = 1234
     * $query->filterByFkIdTabFaixaSalarial(array(12, 34)); // WHERE fk_id_tab_faixa_salarial IN (12, 34)
     * $query->filterByFkIdTabFaixaSalarial(array('min' => 12)); // WHERE fk_id_tab_faixa_salarial >= 12
     * $query->filterByFkIdTabFaixaSalarial(array('max' => 12)); // WHERE fk_id_tab_faixa_salarial <= 12
     * </code>
     *
     * @param     mixed $fkIdTabFaixaSalarial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByFkIdTabFaixaSalarial($fkIdTabFaixaSalarial = null, $comparison = null)
    {
        if (is_array($fkIdTabFaixaSalarial)) {
            $useMinMax = false;
            if (isset($fkIdTabFaixaSalarial['min'])) {
                $this->addUsingAlias(PfInformacoesPeer::FK_ID_TAB_FAIXA_SALARIAL, $fkIdTabFaixaSalarial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdTabFaixaSalarial['max'])) {
                $this->addUsingAlias(PfInformacoesPeer::FK_ID_TAB_FAIXA_SALARIAL, $fkIdTabFaixaSalarial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::FK_ID_TAB_FAIXA_SALARIAL, $fkIdTabFaixaSalarial, $comparison);
    }

    /**
     * Filter the query on the mae column
     *
     * Example usage:
     * <code>
     * $query->filterByMae('fooValue');   // WHERE mae = 'fooValue'
     * $query->filterByMae('%fooValue%'); // WHERE mae LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mae The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByMae($mae = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mae)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mae)) {
                $mae = str_replace('*', '%', $mae);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::MAE, $mae, $comparison);
    }

    /**
     * Filter the query on the pai column
     *
     * Example usage:
     * <code>
     * $query->filterByPai('fooValue');   // WHERE pai = 'fooValue'
     * $query->filterByPai('%fooValue%'); // WHERE pai LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pai The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByPai($pai = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pai)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pai)) {
                $pai = str_replace('*', '%', $pai);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::PAI, $pai, $comparison);
    }

    /**
     * Filter the query on the dt_nascimento column
     *
     * Example usage:
     * <code>
     * $query->filterByDtNascimento('2011-03-14'); // WHERE dt_nascimento = '2011-03-14'
     * $query->filterByDtNascimento('now'); // WHERE dt_nascimento = '2011-03-14'
     * $query->filterByDtNascimento(array('max' => 'yesterday')); // WHERE dt_nascimento < '2011-03-13'
     * </code>
     *
     * @param     mixed $dtNascimento The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByDtNascimento($dtNascimento = null, $comparison = null)
    {
        if (is_array($dtNascimento)) {
            $useMinMax = false;
            if (isset($dtNascimento['min'])) {
                $this->addUsingAlias(PfInformacoesPeer::DT_NASCIMENTO, $dtNascimento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtNascimento['max'])) {
                $this->addUsingAlias(PfInformacoesPeer::DT_NASCIMENTO, $dtNascimento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::DT_NASCIMENTO, $dtNascimento, $comparison);
    }

    /**
     * Filter the query on the naturalidade column
     *
     * Example usage:
     * <code>
     * $query->filterByNaturalidade('fooValue');   // WHERE naturalidade = 'fooValue'
     * $query->filterByNaturalidade('%fooValue%'); // WHERE naturalidade LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naturalidade The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByNaturalidade($naturalidade = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naturalidade)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naturalidade)) {
                $naturalidade = str_replace('*', '%', $naturalidade);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::NATURALIDADE, $naturalidade, $comparison);
    }

    /**
     * Filter the query on the uf_naturalidade column
     *
     * Example usage:
     * <code>
     * $query->filterByUfNaturalidade('fooValue');   // WHERE uf_naturalidade = 'fooValue'
     * $query->filterByUfNaturalidade('%fooValue%'); // WHERE uf_naturalidade LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ufNaturalidade The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByUfNaturalidade($ufNaturalidade = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ufNaturalidade)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ufNaturalidade)) {
                $ufNaturalidade = str_replace('*', '%', $ufNaturalidade);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::UF_NATURALIDADE, $ufNaturalidade, $comparison);
    }

    /**
     * Filter the query on the sexo column
     *
     * Example usage:
     * <code>
     * $query->filterBySexo('fooValue');   // WHERE sexo = 'fooValue'
     * $query->filterBySexo('%fooValue%'); // WHERE sexo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sexo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterBySexo($sexo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sexo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sexo)) {
                $sexo = str_replace('*', '%', $sexo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::SEXO, $sexo, $comparison);
    }

    /**
     * Filter the query on the rg_nro column
     *
     * Example usage:
     * <code>
     * $query->filterByRgNro('fooValue');   // WHERE rg_nro = 'fooValue'
     * $query->filterByRgNro('%fooValue%'); // WHERE rg_nro LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rgNro The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByRgNro($rgNro = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rgNro)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rgNro)) {
                $rgNro = str_replace('*', '%', $rgNro);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::RG_NRO, $rgNro, $comparison);
    }

    /**
     * Filter the query on the rg_orgao_expedidor column
     *
     * Example usage:
     * <code>
     * $query->filterByRgOrgaoExpedidor('fooValue');   // WHERE rg_orgao_expedidor = 'fooValue'
     * $query->filterByRgOrgaoExpedidor('%fooValue%'); // WHERE rg_orgao_expedidor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rgOrgaoExpedidor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByRgOrgaoExpedidor($rgOrgaoExpedidor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rgOrgaoExpedidor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rgOrgaoExpedidor)) {
                $rgOrgaoExpedidor = str_replace('*', '%', $rgOrgaoExpedidor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::RG_ORGAO_EXPEDIDOR, $rgOrgaoExpedidor, $comparison);
    }

    /**
     * Filter the query on the rg_dt_expedicao column
     *
     * Example usage:
     * <code>
     * $query->filterByRgDtExpedicao('2011-03-14'); // WHERE rg_dt_expedicao = '2011-03-14'
     * $query->filterByRgDtExpedicao('now'); // WHERE rg_dt_expedicao = '2011-03-14'
     * $query->filterByRgDtExpedicao(array('max' => 'yesterday')); // WHERE rg_dt_expedicao < '2011-03-13'
     * </code>
     *
     * @param     mixed $rgDtExpedicao The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByRgDtExpedicao($rgDtExpedicao = null, $comparison = null)
    {
        if (is_array($rgDtExpedicao)) {
            $useMinMax = false;
            if (isset($rgDtExpedicao['min'])) {
                $this->addUsingAlias(PfInformacoesPeer::RG_DT_EXPEDICAO, $rgDtExpedicao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rgDtExpedicao['max'])) {
                $this->addUsingAlias(PfInformacoesPeer::RG_DT_EXPEDICAO, $rgDtExpedicao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::RG_DT_EXPEDICAO, $rgDtExpedicao, $comparison);
    }

    /**
     * Filter the query on the certificado_militar column
     *
     * Example usage:
     * <code>
     * $query->filterByCertificadoMilitar('fooValue');   // WHERE certificado_militar = 'fooValue'
     * $query->filterByCertificadoMilitar('%fooValue%'); // WHERE certificado_militar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $certificadoMilitar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByCertificadoMilitar($certificadoMilitar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($certificadoMilitar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $certificadoMilitar)) {
                $certificadoMilitar = str_replace('*', '%', $certificadoMilitar);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::CERTIFICADO_MILITAR, $certificadoMilitar, $comparison);
    }

    /**
     * Filter the query on the titulo_eleitor column
     *
     * Example usage:
     * <code>
     * $query->filterByTituloEleitor('fooValue');   // WHERE titulo_eleitor = 'fooValue'
     * $query->filterByTituloEleitor('%fooValue%'); // WHERE titulo_eleitor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tituloEleitor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByTituloEleitor($tituloEleitor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tituloEleitor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tituloEleitor)) {
                $tituloEleitor = str_replace('*', '%', $tituloEleitor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::TITULO_ELEITOR, $tituloEleitor, $comparison);
    }

    /**
     * Filter the query on the ctps_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByCtpsNumero('fooValue');   // WHERE ctps_numero = 'fooValue'
     * $query->filterByCtpsNumero('%fooValue%'); // WHERE ctps_numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctpsNumero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByCtpsNumero($ctpsNumero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctpsNumero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctpsNumero)) {
                $ctpsNumero = str_replace('*', '%', $ctpsNumero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::CTPS_NUMERO, $ctpsNumero, $comparison);
    }

    /**
     * Filter the query on the ctps_serie column
     *
     * Example usage:
     * <code>
     * $query->filterByCtpsSerie('fooValue');   // WHERE ctps_serie = 'fooValue'
     * $query->filterByCtpsSerie('%fooValue%'); // WHERE ctps_serie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctpsSerie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByCtpsSerie($ctpsSerie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctpsSerie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctpsSerie)) {
                $ctpsSerie = str_replace('*', '%', $ctpsSerie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::CTPS_SERIE, $ctpsSerie, $comparison);
    }

    /**
     * Filter the query on the ctps_dt_expedicao column
     *
     * Example usage:
     * <code>
     * $query->filterByCtpsDtExpedicao('2011-03-14'); // WHERE ctps_dt_expedicao = '2011-03-14'
     * $query->filterByCtpsDtExpedicao('now'); // WHERE ctps_dt_expedicao = '2011-03-14'
     * $query->filterByCtpsDtExpedicao(array('max' => 'yesterday')); // WHERE ctps_dt_expedicao < '2011-03-13'
     * </code>
     *
     * @param     mixed $ctpsDtExpedicao The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function filterByCtpsDtExpedicao($ctpsDtExpedicao = null, $comparison = null)
    {
        if (is_array($ctpsDtExpedicao)) {
            $useMinMax = false;
            if (isset($ctpsDtExpedicao['min'])) {
                $this->addUsingAlias(PfInformacoesPeer::CTPS_DT_EXPEDICAO, $ctpsDtExpedicao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ctpsDtExpedicao['max'])) {
                $this->addUsingAlias(PfInformacoesPeer::CTPS_DT_EXPEDICAO, $ctpsDtExpedicao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInformacoesPeer::CTPS_DT_EXPEDICAO, $ctpsDtExpedicao, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfInformacoes $pfInformacoes Object to remove from the list of results
     *
     * @return PfInformacoesQuery The current query, for fluid interface
     */
    public function prune($pfInformacoes = null)
    {
        if ($pfInformacoes) {
            $this->addUsingAlias(PfInformacoesPeer::ID_PF_INFORMACOES, $pfInformacoes->getIdPfInformacoes(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
