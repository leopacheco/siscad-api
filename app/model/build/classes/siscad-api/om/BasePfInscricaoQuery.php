<?php


/**
 * Base class that represents a query for the 'pf_inscricao' table.
 *
 *
 *
 * @method PfInscricaoQuery orderByIdPfInscricao($order = Criteria::ASC) Order by the id_pf_inscricao column
 * @method PfInscricaoQuery orderByFkIdPfInformacoes($order = Criteria::ASC) Order by the fk_id_pf_informacoes column
 * @method PfInscricaoQuery orderByPfUf($order = Criteria::ASC) Order by the pf_uf column
 * @method PfInscricaoQuery orderByPfInscricao($order = Criteria::ASC) Order by the pf_inscricao column
 * @method PfInscricaoQuery orderByPfClasse($order = Criteria::ASC) Order by the pf_classe column
 * @method PfInscricaoQuery orderByNome($order = Criteria::ASC) Order by the nome column
 * @method PfInscricaoQuery orderByCpf($order = Criteria::ASC) Order by the cpf column
 * @method PfInscricaoQuery orderByCarteiraCrmv($order = Criteria::ASC) Order by the carteira_crmv column
 * @method PfInscricaoQuery orderByDtCarteiraCrmv($order = Criteria::ASC) Order by the dt_carteira_crmv column
 * @method PfInscricaoQuery orderByDtInscricao($order = Criteria::ASC) Order by the dt_inscricao column
 * @method PfInscricaoQuery orderByAtuante($order = Criteria::ASC) Order by the atuante column
 * @method PfInscricaoQuery orderByIsento($order = Criteria::ASC) Order by the isento column
 * @method PfInscricaoQuery orderByDtIncCadin($order = Criteria::ASC) Order by the dt_inc_cadin column
 * @method PfInscricaoQuery orderByDtExcCadin($order = Criteria::ASC) Order by the dt_exc_cadin column
 * @method PfInscricaoQuery orderByProcesso($order = Criteria::ASC) Order by the processo column
 * @method PfInscricaoQuery orderByRevistaCfmv($order = Criteria::ASC) Order by the revista_cfmv column
 * @method PfInscricaoQuery orderByRevistaCfmvDt($order = Criteria::ASC) Order by the revista_cfmv_dt column
 * @method PfInscricaoQuery orderByCarteiraValidade($order = Criteria::ASC) Order by the carteira_validade column
 * @method PfInscricaoQuery orderByProvisoria($order = Criteria::ASC) Order by the provisoria column
 * @method PfInscricaoQuery orderByProvisoriaNum($order = Criteria::ASC) Order by the provisoria_num column
 * @method PfInscricaoQuery orderByProvisoriaData($order = Criteria::ASC) Order by the provisoria_data column
 * @method PfInscricaoQuery orderByProvisoriaValidade($order = Criteria::ASC) Order by the provisoria_validade column
 * @method PfInscricaoQuery orderByEspecialistaNum($order = Criteria::ASC) Order by the especialista_num column
 * @method PfInscricaoQuery orderByEspecialistaData($order = Criteria::ASC) Order by the especialista_data column
 * @method PfInscricaoQuery orderByEspecialistaValidade($order = Criteria::ASC) Order by the especialista_validade column
 * @method PfInscricaoQuery orderBySegundaviaNum($order = Criteria::ASC) Order by the segundavia_num column
 * @method PfInscricaoQuery orderBySegundaviaData($order = Criteria::ASC) Order by the segundavia_data column
 * @method PfInscricaoQuery orderBySegundaviaValidade($order = Criteria::ASC) Order by the segundavia_validade column
 * @method PfInscricaoQuery orderBySenha($order = Criteria::ASC) Order by the senha column
 *
 * @method PfInscricaoQuery groupByIdPfInscricao() Group by the id_pf_inscricao column
 * @method PfInscricaoQuery groupByFkIdPfInformacoes() Group by the fk_id_pf_informacoes column
 * @method PfInscricaoQuery groupByPfUf() Group by the pf_uf column
 * @method PfInscricaoQuery groupByPfInscricao() Group by the pf_inscricao column
 * @method PfInscricaoQuery groupByPfClasse() Group by the pf_classe column
 * @method PfInscricaoQuery groupByNome() Group by the nome column
 * @method PfInscricaoQuery groupByCpf() Group by the cpf column
 * @method PfInscricaoQuery groupByCarteiraCrmv() Group by the carteira_crmv column
 * @method PfInscricaoQuery groupByDtCarteiraCrmv() Group by the dt_carteira_crmv column
 * @method PfInscricaoQuery groupByDtInscricao() Group by the dt_inscricao column
 * @method PfInscricaoQuery groupByAtuante() Group by the atuante column
 * @method PfInscricaoQuery groupByIsento() Group by the isento column
 * @method PfInscricaoQuery groupByDtIncCadin() Group by the dt_inc_cadin column
 * @method PfInscricaoQuery groupByDtExcCadin() Group by the dt_exc_cadin column
 * @method PfInscricaoQuery groupByProcesso() Group by the processo column
 * @method PfInscricaoQuery groupByRevistaCfmv() Group by the revista_cfmv column
 * @method PfInscricaoQuery groupByRevistaCfmvDt() Group by the revista_cfmv_dt column
 * @method PfInscricaoQuery groupByCarteiraValidade() Group by the carteira_validade column
 * @method PfInscricaoQuery groupByProvisoria() Group by the provisoria column
 * @method PfInscricaoQuery groupByProvisoriaNum() Group by the provisoria_num column
 * @method PfInscricaoQuery groupByProvisoriaData() Group by the provisoria_data column
 * @method PfInscricaoQuery groupByProvisoriaValidade() Group by the provisoria_validade column
 * @method PfInscricaoQuery groupByEspecialistaNum() Group by the especialista_num column
 * @method PfInscricaoQuery groupByEspecialistaData() Group by the especialista_data column
 * @method PfInscricaoQuery groupByEspecialistaValidade() Group by the especialista_validade column
 * @method PfInscricaoQuery groupBySegundaviaNum() Group by the segundavia_num column
 * @method PfInscricaoQuery groupBySegundaviaData() Group by the segundavia_data column
 * @method PfInscricaoQuery groupBySegundaviaValidade() Group by the segundavia_validade column
 * @method PfInscricaoQuery groupBySenha() Group by the senha column
 *
 * @method PfInscricaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfInscricaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfInscricaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfInscricao findOne(PropelPDO $con = null) Return the first PfInscricao matching the query
 * @method PfInscricao findOneOrCreate(PropelPDO $con = null) Return the first PfInscricao matching the query, or a new PfInscricao object populated from the query conditions when no match is found
 *
 * @method PfInscricao findOneByFkIdPfInformacoes(int $fk_id_pf_informacoes) Return the first PfInscricao filtered by the fk_id_pf_informacoes column
 * @method PfInscricao findOneByPfUf(string $pf_uf) Return the first PfInscricao filtered by the pf_uf column
 * @method PfInscricao findOneByPfInscricao(string $pf_inscricao) Return the first PfInscricao filtered by the pf_inscricao column
 * @method PfInscricao findOneByPfClasse(string $pf_classe) Return the first PfInscricao filtered by the pf_classe column
 * @method PfInscricao findOneByNome(string $nome) Return the first PfInscricao filtered by the nome column
 * @method PfInscricao findOneByCpf(string $cpf) Return the first PfInscricao filtered by the cpf column
 * @method PfInscricao findOneByCarteiraCrmv(string $carteira_crmv) Return the first PfInscricao filtered by the carteira_crmv column
 * @method PfInscricao findOneByDtCarteiraCrmv(string $dt_carteira_crmv) Return the first PfInscricao filtered by the dt_carteira_crmv column
 * @method PfInscricao findOneByDtInscricao(string $dt_inscricao) Return the first PfInscricao filtered by the dt_inscricao column
 * @method PfInscricao findOneByAtuante(boolean $atuante) Return the first PfInscricao filtered by the atuante column
 * @method PfInscricao findOneByIsento(boolean $isento) Return the first PfInscricao filtered by the isento column
 * @method PfInscricao findOneByDtIncCadin(string $dt_inc_cadin) Return the first PfInscricao filtered by the dt_inc_cadin column
 * @method PfInscricao findOneByDtExcCadin(string $dt_exc_cadin) Return the first PfInscricao filtered by the dt_exc_cadin column
 * @method PfInscricao findOneByProcesso(boolean $processo) Return the first PfInscricao filtered by the processo column
 * @method PfInscricao findOneByRevistaCfmv(boolean $revista_cfmv) Return the first PfInscricao filtered by the revista_cfmv column
 * @method PfInscricao findOneByRevistaCfmvDt(string $revista_cfmv_dt) Return the first PfInscricao filtered by the revista_cfmv_dt column
 * @method PfInscricao findOneByCarteiraValidade(string $carteira_validade) Return the first PfInscricao filtered by the carteira_validade column
 * @method PfInscricao findOneByProvisoria(int $provisoria) Return the first PfInscricao filtered by the provisoria column
 * @method PfInscricao findOneByProvisoriaNum(string $provisoria_num) Return the first PfInscricao filtered by the provisoria_num column
 * @method PfInscricao findOneByProvisoriaData(string $provisoria_data) Return the first PfInscricao filtered by the provisoria_data column
 * @method PfInscricao findOneByProvisoriaValidade(string $provisoria_validade) Return the first PfInscricao filtered by the provisoria_validade column
 * @method PfInscricao findOneByEspecialistaNum(string $especialista_num) Return the first PfInscricao filtered by the especialista_num column
 * @method PfInscricao findOneByEspecialistaData(string $especialista_data) Return the first PfInscricao filtered by the especialista_data column
 * @method PfInscricao findOneByEspecialistaValidade(string $especialista_validade) Return the first PfInscricao filtered by the especialista_validade column
 * @method PfInscricao findOneBySegundaviaNum(string $segundavia_num) Return the first PfInscricao filtered by the segundavia_num column
 * @method PfInscricao findOneBySegundaviaData(string $segundavia_data) Return the first PfInscricao filtered by the segundavia_data column
 * @method PfInscricao findOneBySegundaviaValidade(string $segundavia_validade) Return the first PfInscricao filtered by the segundavia_validade column
 * @method PfInscricao findOneBySenha(string $senha) Return the first PfInscricao filtered by the senha column
 *
 * @method array findByIdPfInscricao(int $id_pf_inscricao) Return PfInscricao objects filtered by the id_pf_inscricao column
 * @method array findByFkIdPfInformacoes(int $fk_id_pf_informacoes) Return PfInscricao objects filtered by the fk_id_pf_informacoes column
 * @method array findByPfUf(string $pf_uf) Return PfInscricao objects filtered by the pf_uf column
 * @method array findByPfInscricao(string $pf_inscricao) Return PfInscricao objects filtered by the pf_inscricao column
 * @method array findByPfClasse(string $pf_classe) Return PfInscricao objects filtered by the pf_classe column
 * @method array findByNome(string $nome) Return PfInscricao objects filtered by the nome column
 * @method array findByCpf(string $cpf) Return PfInscricao objects filtered by the cpf column
 * @method array findByCarteiraCrmv(string $carteira_crmv) Return PfInscricao objects filtered by the carteira_crmv column
 * @method array findByDtCarteiraCrmv(string $dt_carteira_crmv) Return PfInscricao objects filtered by the dt_carteira_crmv column
 * @method array findByDtInscricao(string $dt_inscricao) Return PfInscricao objects filtered by the dt_inscricao column
 * @method array findByAtuante(boolean $atuante) Return PfInscricao objects filtered by the atuante column
 * @method array findByIsento(boolean $isento) Return PfInscricao objects filtered by the isento column
 * @method array findByDtIncCadin(string $dt_inc_cadin) Return PfInscricao objects filtered by the dt_inc_cadin column
 * @method array findByDtExcCadin(string $dt_exc_cadin) Return PfInscricao objects filtered by the dt_exc_cadin column
 * @method array findByProcesso(boolean $processo) Return PfInscricao objects filtered by the processo column
 * @method array findByRevistaCfmv(boolean $revista_cfmv) Return PfInscricao objects filtered by the revista_cfmv column
 * @method array findByRevistaCfmvDt(string $revista_cfmv_dt) Return PfInscricao objects filtered by the revista_cfmv_dt column
 * @method array findByCarteiraValidade(string $carteira_validade) Return PfInscricao objects filtered by the carteira_validade column
 * @method array findByProvisoria(int $provisoria) Return PfInscricao objects filtered by the provisoria column
 * @method array findByProvisoriaNum(string $provisoria_num) Return PfInscricao objects filtered by the provisoria_num column
 * @method array findByProvisoriaData(string $provisoria_data) Return PfInscricao objects filtered by the provisoria_data column
 * @method array findByProvisoriaValidade(string $provisoria_validade) Return PfInscricao objects filtered by the provisoria_validade column
 * @method array findByEspecialistaNum(string $especialista_num) Return PfInscricao objects filtered by the especialista_num column
 * @method array findByEspecialistaData(string $especialista_data) Return PfInscricao objects filtered by the especialista_data column
 * @method array findByEspecialistaValidade(string $especialista_validade) Return PfInscricao objects filtered by the especialista_validade column
 * @method array findBySegundaviaNum(string $segundavia_num) Return PfInscricao objects filtered by the segundavia_num column
 * @method array findBySegundaviaData(string $segundavia_data) Return PfInscricao objects filtered by the segundavia_data column
 * @method array findBySegundaviaValidade(string $segundavia_validade) Return PfInscricao objects filtered by the segundavia_validade column
 * @method array findBySenha(string $senha) Return PfInscricao objects filtered by the senha column
 *
 * @package    propel.generator.siscad-api.om
 */
abstract class BasePfInscricaoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfInscricaoQuery object.
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
            $modelName = 'PfInscricao';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfInscricaoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfInscricaoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfInscricaoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfInscricaoQuery) {
            return $criteria;
        }
        $query = new PfInscricaoQuery(null, null, $modelAlias);

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
     * @return   PfInscricao|PfInscricao[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfInscricaoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfInscricaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PfInscricao A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdPfInscricao($key, $con = null)
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
     * @return                 PfInscricao A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_pf_inscricao`, `fk_id_pf_informacoes`, `pf_uf`, `pf_inscricao`, `pf_classe`, `nome`, `cpf`, `carteira_crmv`, `dt_carteira_crmv`, `dt_inscricao`, `atuante`, `isento`, `dt_inc_cadin`, `dt_exc_cadin`, `processo`, `revista_cfmv`, `revista_cfmv_dt`, `carteira_validade`, `provisoria`, `provisoria_num`, `provisoria_data`, `provisoria_validade`, `especialista_num`, `especialista_data`, `especialista_validade`, `segundavia_num`, `segundavia_data`, `segundavia_validade`, `senha` FROM `pf_inscricao` WHERE `id_pf_inscricao` = :p0';
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
            $obj = new PfInscricao();
            $obj->hydrate($row);
            PfInscricaoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PfInscricao|PfInscricao[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PfInscricao[]|mixed the list of results, formatted by the current formatter
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
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfInscricaoPeer::ID_PF_INSCRICAO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfInscricaoPeer::ID_PF_INSCRICAO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_pf_inscricao column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPfInscricao(1234); // WHERE id_pf_inscricao = 1234
     * $query->filterByIdPfInscricao(array(12, 34)); // WHERE id_pf_inscricao IN (12, 34)
     * $query->filterByIdPfInscricao(array('min' => 12)); // WHERE id_pf_inscricao >= 12
     * $query->filterByIdPfInscricao(array('max' => 12)); // WHERE id_pf_inscricao <= 12
     * </code>
     *
     * @param     mixed $idPfInscricao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByIdPfInscricao($idPfInscricao = null, $comparison = null)
    {
        if (is_array($idPfInscricao)) {
            $useMinMax = false;
            if (isset($idPfInscricao['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::ID_PF_INSCRICAO, $idPfInscricao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPfInscricao['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::ID_PF_INSCRICAO, $idPfInscricao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::ID_PF_INSCRICAO, $idPfInscricao, $comparison);
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
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByFkIdPfInformacoes($fkIdPfInformacoes = null, $comparison = null)
    {
        if (is_array($fkIdPfInformacoes)) {
            $useMinMax = false;
            if (isset($fkIdPfInformacoes['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::FK_ID_PF_INFORMACOES, $fkIdPfInformacoes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkIdPfInformacoes['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::FK_ID_PF_INFORMACOES, $fkIdPfInformacoes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::FK_ID_PF_INFORMACOES, $fkIdPfInformacoes, $comparison);
    }

    /**
     * Filter the query on the pf_uf column
     *
     * Example usage:
     * <code>
     * $query->filterByPfUf('fooValue');   // WHERE pf_uf = 'fooValue'
     * $query->filterByPfUf('%fooValue%'); // WHERE pf_uf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pfUf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByPfUf($pfUf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pfUf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pfUf)) {
                $pfUf = str_replace('*', '%', $pfUf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::PF_UF, $pfUf, $comparison);
    }

    /**
     * Filter the query on the pf_inscricao column
     *
     * Example usage:
     * <code>
     * $query->filterByPfInscricao('fooValue');   // WHERE pf_inscricao = 'fooValue'
     * $query->filterByPfInscricao('%fooValue%'); // WHERE pf_inscricao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pfInscricao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByPfInscricao($pfInscricao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pfInscricao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pfInscricao)) {
                $pfInscricao = str_replace('*', '%', $pfInscricao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::PF_INSCRICAO, $pfInscricao, $comparison);
    }

    /**
     * Filter the query on the pf_classe column
     *
     * Example usage:
     * <code>
     * $query->filterByPfClasse('fooValue');   // WHERE pf_classe = 'fooValue'
     * $query->filterByPfClasse('%fooValue%'); // WHERE pf_classe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pfClasse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByPfClasse($pfClasse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pfClasse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pfClasse)) {
                $pfClasse = str_replace('*', '%', $pfClasse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::PF_CLASSE, $pfClasse, $comparison);
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
     * @return PfInscricaoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PfInscricaoPeer::NOME, $nome, $comparison);
    }

    /**
     * Filter the query on the cpf column
     *
     * Example usage:
     * <code>
     * $query->filterByCpf('fooValue');   // WHERE cpf = 'fooValue'
     * $query->filterByCpf('%fooValue%'); // WHERE cpf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cpf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByCpf($cpf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cpf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cpf)) {
                $cpf = str_replace('*', '%', $cpf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::CPF, $cpf, $comparison);
    }

    /**
     * Filter the query on the carteira_crmv column
     *
     * Example usage:
     * <code>
     * $query->filterByCarteiraCrmv('fooValue');   // WHERE carteira_crmv = 'fooValue'
     * $query->filterByCarteiraCrmv('%fooValue%'); // WHERE carteira_crmv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $carteiraCrmv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByCarteiraCrmv($carteiraCrmv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($carteiraCrmv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $carteiraCrmv)) {
                $carteiraCrmv = str_replace('*', '%', $carteiraCrmv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::CARTEIRA_CRMV, $carteiraCrmv, $comparison);
    }

    /**
     * Filter the query on the dt_carteira_crmv column
     *
     * Example usage:
     * <code>
     * $query->filterByDtCarteiraCrmv('2011-03-14'); // WHERE dt_carteira_crmv = '2011-03-14'
     * $query->filterByDtCarteiraCrmv('now'); // WHERE dt_carteira_crmv = '2011-03-14'
     * $query->filterByDtCarteiraCrmv(array('max' => 'yesterday')); // WHERE dt_carteira_crmv < '2011-03-13'
     * </code>
     *
     * @param     mixed $dtCarteiraCrmv The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByDtCarteiraCrmv($dtCarteiraCrmv = null, $comparison = null)
    {
        if (is_array($dtCarteiraCrmv)) {
            $useMinMax = false;
            if (isset($dtCarteiraCrmv['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::DT_CARTEIRA_CRMV, $dtCarteiraCrmv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtCarteiraCrmv['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::DT_CARTEIRA_CRMV, $dtCarteiraCrmv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::DT_CARTEIRA_CRMV, $dtCarteiraCrmv, $comparison);
    }

    /**
     * Filter the query on the dt_inscricao column
     *
     * Example usage:
     * <code>
     * $query->filterByDtInscricao('2011-03-14'); // WHERE dt_inscricao = '2011-03-14'
     * $query->filterByDtInscricao('now'); // WHERE dt_inscricao = '2011-03-14'
     * $query->filterByDtInscricao(array('max' => 'yesterday')); // WHERE dt_inscricao < '2011-03-13'
     * </code>
     *
     * @param     mixed $dtInscricao The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByDtInscricao($dtInscricao = null, $comparison = null)
    {
        if (is_array($dtInscricao)) {
            $useMinMax = false;
            if (isset($dtInscricao['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::DT_INSCRICAO, $dtInscricao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtInscricao['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::DT_INSCRICAO, $dtInscricao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::DT_INSCRICAO, $dtInscricao, $comparison);
    }

    /**
     * Filter the query on the atuante column
     *
     * Example usage:
     * <code>
     * $query->filterByAtuante(true); // WHERE atuante = true
     * $query->filterByAtuante('yes'); // WHERE atuante = true
     * </code>
     *
     * @param     boolean|string $atuante The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByAtuante($atuante = null, $comparison = null)
    {
        if (is_string($atuante)) {
            $atuante = in_array(strtolower($atuante), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PfInscricaoPeer::ATUANTE, $atuante, $comparison);
    }

    /**
     * Filter the query on the isento column
     *
     * Example usage:
     * <code>
     * $query->filterByIsento(true); // WHERE isento = true
     * $query->filterByIsento('yes'); // WHERE isento = true
     * </code>
     *
     * @param     boolean|string $isento The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByIsento($isento = null, $comparison = null)
    {
        if (is_string($isento)) {
            $isento = in_array(strtolower($isento), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PfInscricaoPeer::ISENTO, $isento, $comparison);
    }

    /**
     * Filter the query on the dt_inc_cadin column
     *
     * Example usage:
     * <code>
     * $query->filterByDtIncCadin('2011-03-14'); // WHERE dt_inc_cadin = '2011-03-14'
     * $query->filterByDtIncCadin('now'); // WHERE dt_inc_cadin = '2011-03-14'
     * $query->filterByDtIncCadin(array('max' => 'yesterday')); // WHERE dt_inc_cadin < '2011-03-13'
     * </code>
     *
     * @param     mixed $dtIncCadin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByDtIncCadin($dtIncCadin = null, $comparison = null)
    {
        if (is_array($dtIncCadin)) {
            $useMinMax = false;
            if (isset($dtIncCadin['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::DT_INC_CADIN, $dtIncCadin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtIncCadin['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::DT_INC_CADIN, $dtIncCadin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::DT_INC_CADIN, $dtIncCadin, $comparison);
    }

    /**
     * Filter the query on the dt_exc_cadin column
     *
     * Example usage:
     * <code>
     * $query->filterByDtExcCadin('2011-03-14'); // WHERE dt_exc_cadin = '2011-03-14'
     * $query->filterByDtExcCadin('now'); // WHERE dt_exc_cadin = '2011-03-14'
     * $query->filterByDtExcCadin(array('max' => 'yesterday')); // WHERE dt_exc_cadin < '2011-03-13'
     * </code>
     *
     * @param     mixed $dtExcCadin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByDtExcCadin($dtExcCadin = null, $comparison = null)
    {
        if (is_array($dtExcCadin)) {
            $useMinMax = false;
            if (isset($dtExcCadin['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::DT_EXC_CADIN, $dtExcCadin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dtExcCadin['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::DT_EXC_CADIN, $dtExcCadin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::DT_EXC_CADIN, $dtExcCadin, $comparison);
    }

    /**
     * Filter the query on the processo column
     *
     * Example usage:
     * <code>
     * $query->filterByProcesso(true); // WHERE processo = true
     * $query->filterByProcesso('yes'); // WHERE processo = true
     * </code>
     *
     * @param     boolean|string $processo The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByProcesso($processo = null, $comparison = null)
    {
        if (is_string($processo)) {
            $processo = in_array(strtolower($processo), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PfInscricaoPeer::PROCESSO, $processo, $comparison);
    }

    /**
     * Filter the query on the revista_cfmv column
     *
     * Example usage:
     * <code>
     * $query->filterByRevistaCfmv(true); // WHERE revista_cfmv = true
     * $query->filterByRevistaCfmv('yes'); // WHERE revista_cfmv = true
     * </code>
     *
     * @param     boolean|string $revistaCfmv The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByRevistaCfmv($revistaCfmv = null, $comparison = null)
    {
        if (is_string($revistaCfmv)) {
            $revistaCfmv = in_array(strtolower($revistaCfmv), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PfInscricaoPeer::REVISTA_CFMV, $revistaCfmv, $comparison);
    }

    /**
     * Filter the query on the revista_cfmv_dt column
     *
     * Example usage:
     * <code>
     * $query->filterByRevistaCfmvDt('2011-03-14'); // WHERE revista_cfmv_dt = '2011-03-14'
     * $query->filterByRevistaCfmvDt('now'); // WHERE revista_cfmv_dt = '2011-03-14'
     * $query->filterByRevistaCfmvDt(array('max' => 'yesterday')); // WHERE revista_cfmv_dt < '2011-03-13'
     * </code>
     *
     * @param     mixed $revistaCfmvDt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByRevistaCfmvDt($revistaCfmvDt = null, $comparison = null)
    {
        if (is_array($revistaCfmvDt)) {
            $useMinMax = false;
            if (isset($revistaCfmvDt['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::REVISTA_CFMV_DT, $revistaCfmvDt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($revistaCfmvDt['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::REVISTA_CFMV_DT, $revistaCfmvDt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::REVISTA_CFMV_DT, $revistaCfmvDt, $comparison);
    }

    /**
     * Filter the query on the carteira_validade column
     *
     * Example usage:
     * <code>
     * $query->filterByCarteiraValidade('2011-03-14'); // WHERE carteira_validade = '2011-03-14'
     * $query->filterByCarteiraValidade('now'); // WHERE carteira_validade = '2011-03-14'
     * $query->filterByCarteiraValidade(array('max' => 'yesterday')); // WHERE carteira_validade < '2011-03-13'
     * </code>
     *
     * @param     mixed $carteiraValidade The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByCarteiraValidade($carteiraValidade = null, $comparison = null)
    {
        if (is_array($carteiraValidade)) {
            $useMinMax = false;
            if (isset($carteiraValidade['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::CARTEIRA_VALIDADE, $carteiraValidade['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($carteiraValidade['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::CARTEIRA_VALIDADE, $carteiraValidade['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::CARTEIRA_VALIDADE, $carteiraValidade, $comparison);
    }

    /**
     * Filter the query on the provisoria column
     *
     * Example usage:
     * <code>
     * $query->filterByProvisoria(1234); // WHERE provisoria = 1234
     * $query->filterByProvisoria(array(12, 34)); // WHERE provisoria IN (12, 34)
     * $query->filterByProvisoria(array('min' => 12)); // WHERE provisoria >= 12
     * $query->filterByProvisoria(array('max' => 12)); // WHERE provisoria <= 12
     * </code>
     *
     * @param     mixed $provisoria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByProvisoria($provisoria = null, $comparison = null)
    {
        if (is_array($provisoria)) {
            $useMinMax = false;
            if (isset($provisoria['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::PROVISORIA, $provisoria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($provisoria['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::PROVISORIA, $provisoria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::PROVISORIA, $provisoria, $comparison);
    }

    /**
     * Filter the query on the provisoria_num column
     *
     * Example usage:
     * <code>
     * $query->filterByProvisoriaNum('fooValue');   // WHERE provisoria_num = 'fooValue'
     * $query->filterByProvisoriaNum('%fooValue%'); // WHERE provisoria_num LIKE '%fooValue%'
     * </code>
     *
     * @param     string $provisoriaNum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByProvisoriaNum($provisoriaNum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($provisoriaNum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $provisoriaNum)) {
                $provisoriaNum = str_replace('*', '%', $provisoriaNum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::PROVISORIA_NUM, $provisoriaNum, $comparison);
    }

    /**
     * Filter the query on the provisoria_data column
     *
     * Example usage:
     * <code>
     * $query->filterByProvisoriaData('2011-03-14'); // WHERE provisoria_data = '2011-03-14'
     * $query->filterByProvisoriaData('now'); // WHERE provisoria_data = '2011-03-14'
     * $query->filterByProvisoriaData(array('max' => 'yesterday')); // WHERE provisoria_data < '2011-03-13'
     * </code>
     *
     * @param     mixed $provisoriaData The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByProvisoriaData($provisoriaData = null, $comparison = null)
    {
        if (is_array($provisoriaData)) {
            $useMinMax = false;
            if (isset($provisoriaData['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::PROVISORIA_DATA, $provisoriaData['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($provisoriaData['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::PROVISORIA_DATA, $provisoriaData['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::PROVISORIA_DATA, $provisoriaData, $comparison);
    }

    /**
     * Filter the query on the provisoria_validade column
     *
     * Example usage:
     * <code>
     * $query->filterByProvisoriaValidade('2011-03-14'); // WHERE provisoria_validade = '2011-03-14'
     * $query->filterByProvisoriaValidade('now'); // WHERE provisoria_validade = '2011-03-14'
     * $query->filterByProvisoriaValidade(array('max' => 'yesterday')); // WHERE provisoria_validade < '2011-03-13'
     * </code>
     *
     * @param     mixed $provisoriaValidade The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByProvisoriaValidade($provisoriaValidade = null, $comparison = null)
    {
        if (is_array($provisoriaValidade)) {
            $useMinMax = false;
            if (isset($provisoriaValidade['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::PROVISORIA_VALIDADE, $provisoriaValidade['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($provisoriaValidade['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::PROVISORIA_VALIDADE, $provisoriaValidade['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::PROVISORIA_VALIDADE, $provisoriaValidade, $comparison);
    }

    /**
     * Filter the query on the especialista_num column
     *
     * Example usage:
     * <code>
     * $query->filterByEspecialistaNum('fooValue');   // WHERE especialista_num = 'fooValue'
     * $query->filterByEspecialistaNum('%fooValue%'); // WHERE especialista_num LIKE '%fooValue%'
     * </code>
     *
     * @param     string $especialistaNum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByEspecialistaNum($especialistaNum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($especialistaNum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $especialistaNum)) {
                $especialistaNum = str_replace('*', '%', $especialistaNum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::ESPECIALISTA_NUM, $especialistaNum, $comparison);
    }

    /**
     * Filter the query on the especialista_data column
     *
     * Example usage:
     * <code>
     * $query->filterByEspecialistaData('2011-03-14'); // WHERE especialista_data = '2011-03-14'
     * $query->filterByEspecialistaData('now'); // WHERE especialista_data = '2011-03-14'
     * $query->filterByEspecialistaData(array('max' => 'yesterday')); // WHERE especialista_data < '2011-03-13'
     * </code>
     *
     * @param     mixed $especialistaData The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByEspecialistaData($especialistaData = null, $comparison = null)
    {
        if (is_array($especialistaData)) {
            $useMinMax = false;
            if (isset($especialistaData['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::ESPECIALISTA_DATA, $especialistaData['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($especialistaData['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::ESPECIALISTA_DATA, $especialistaData['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::ESPECIALISTA_DATA, $especialistaData, $comparison);
    }

    /**
     * Filter the query on the especialista_validade column
     *
     * Example usage:
     * <code>
     * $query->filterByEspecialistaValidade('2011-03-14'); // WHERE especialista_validade = '2011-03-14'
     * $query->filterByEspecialistaValidade('now'); // WHERE especialista_validade = '2011-03-14'
     * $query->filterByEspecialistaValidade(array('max' => 'yesterday')); // WHERE especialista_validade < '2011-03-13'
     * </code>
     *
     * @param     mixed $especialistaValidade The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterByEspecialistaValidade($especialistaValidade = null, $comparison = null)
    {
        if (is_array($especialistaValidade)) {
            $useMinMax = false;
            if (isset($especialistaValidade['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::ESPECIALISTA_VALIDADE, $especialistaValidade['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($especialistaValidade['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::ESPECIALISTA_VALIDADE, $especialistaValidade['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::ESPECIALISTA_VALIDADE, $especialistaValidade, $comparison);
    }

    /**
     * Filter the query on the segundavia_num column
     *
     * Example usage:
     * <code>
     * $query->filterBySegundaviaNum('fooValue');   // WHERE segundavia_num = 'fooValue'
     * $query->filterBySegundaviaNum('%fooValue%'); // WHERE segundavia_num LIKE '%fooValue%'
     * </code>
     *
     * @param     string $segundaviaNum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterBySegundaviaNum($segundaviaNum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($segundaviaNum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $segundaviaNum)) {
                $segundaviaNum = str_replace('*', '%', $segundaviaNum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::SEGUNDAVIA_NUM, $segundaviaNum, $comparison);
    }

    /**
     * Filter the query on the segundavia_data column
     *
     * Example usage:
     * <code>
     * $query->filterBySegundaviaData('2011-03-14'); // WHERE segundavia_data = '2011-03-14'
     * $query->filterBySegundaviaData('now'); // WHERE segundavia_data = '2011-03-14'
     * $query->filterBySegundaviaData(array('max' => 'yesterday')); // WHERE segundavia_data < '2011-03-13'
     * </code>
     *
     * @param     mixed $segundaviaData The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterBySegundaviaData($segundaviaData = null, $comparison = null)
    {
        if (is_array($segundaviaData)) {
            $useMinMax = false;
            if (isset($segundaviaData['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::SEGUNDAVIA_DATA, $segundaviaData['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($segundaviaData['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::SEGUNDAVIA_DATA, $segundaviaData['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::SEGUNDAVIA_DATA, $segundaviaData, $comparison);
    }

    /**
     * Filter the query on the segundavia_validade column
     *
     * Example usage:
     * <code>
     * $query->filterBySegundaviaValidade('2011-03-14'); // WHERE segundavia_validade = '2011-03-14'
     * $query->filterBySegundaviaValidade('now'); // WHERE segundavia_validade = '2011-03-14'
     * $query->filterBySegundaviaValidade(array('max' => 'yesterday')); // WHERE segundavia_validade < '2011-03-13'
     * </code>
     *
     * @param     mixed $segundaviaValidade The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterBySegundaviaValidade($segundaviaValidade = null, $comparison = null)
    {
        if (is_array($segundaviaValidade)) {
            $useMinMax = false;
            if (isset($segundaviaValidade['min'])) {
                $this->addUsingAlias(PfInscricaoPeer::SEGUNDAVIA_VALIDADE, $segundaviaValidade['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($segundaviaValidade['max'])) {
                $this->addUsingAlias(PfInscricaoPeer::SEGUNDAVIA_VALIDADE, $segundaviaValidade['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::SEGUNDAVIA_VALIDADE, $segundaviaValidade, $comparison);
    }

    /**
     * Filter the query on the senha column
     *
     * Example usage:
     * <code>
     * $query->filterBySenha('fooValue');   // WHERE senha = 'fooValue'
     * $query->filterBySenha('%fooValue%'); // WHERE senha LIKE '%fooValue%'
     * </code>
     *
     * @param     string $senha The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function filterBySenha($senha = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($senha)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $senha)) {
                $senha = str_replace('*', '%', $senha);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfInscricaoPeer::SENHA, $senha, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfInscricao $pfInscricao Object to remove from the list of results
     *
     * @return PfInscricaoQuery The current query, for fluid interface
     */
    public function prune($pfInscricao = null)
    {
        if ($pfInscricao) {
            $this->addUsingAlias(PfInscricaoPeer::ID_PF_INSCRICAO, $pfInscricao->getIdPfInscricao(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
