<?php


/**
 * Base static class for performing query and update operations on the 'pf_inscricao' table.
 *
 *
 *
 * @package propel.generator.siscad.om
 */
abstract class BasePfInscricaoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'siscad';

    /** the table name for this class */
    const TABLE_NAME = 'pf_inscricao';

    /** the related Propel class for this table */
    const OM_CLASS = 'PfInscricao';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PfInscricaoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 29;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 29;

    /** the column name for the id_pf_inscricao field */
    const ID_PF_INSCRICAO = 'pf_inscricao.id_pf_inscricao';

    /** the column name for the fk_id_pf_informacoes field */
    const FK_ID_PF_INFORMACOES = 'pf_inscricao.fk_id_pf_informacoes';

    /** the column name for the pf_uf field */
    const PF_UF = 'pf_inscricao.pf_uf';

    /** the column name for the pf_inscricao field */
    const PF_INSCRICAO = 'pf_inscricao.pf_inscricao';

    /** the column name for the pf_classe field */
    const PF_CLASSE = 'pf_inscricao.pf_classe';

    /** the column name for the nome field */
    const NOME = 'pf_inscricao.nome';

    /** the column name for the cpf field */
    const CPF = 'pf_inscricao.cpf';

    /** the column name for the carteira_crmv field */
    const CARTEIRA_CRMV = 'pf_inscricao.carteira_crmv';

    /** the column name for the dt_carteira_crmv field */
    const DT_CARTEIRA_CRMV = 'pf_inscricao.dt_carteira_crmv';

    /** the column name for the dt_inscricao field */
    const DT_INSCRICAO = 'pf_inscricao.dt_inscricao';

    /** the column name for the atuante field */
    const ATUANTE = 'pf_inscricao.atuante';

    /** the column name for the isento field */
    const ISENTO = 'pf_inscricao.isento';

    /** the column name for the dt_inc_cadin field */
    const DT_INC_CADIN = 'pf_inscricao.dt_inc_cadin';

    /** the column name for the dt_exc_cadin field */
    const DT_EXC_CADIN = 'pf_inscricao.dt_exc_cadin';

    /** the column name for the processo field */
    const PROCESSO = 'pf_inscricao.processo';

    /** the column name for the revista_cfmv field */
    const REVISTA_CFMV = 'pf_inscricao.revista_cfmv';

    /** the column name for the revista_cfmv_dt field */
    const REVISTA_CFMV_DT = 'pf_inscricao.revista_cfmv_dt';

    /** the column name for the carteira_validade field */
    const CARTEIRA_VALIDADE = 'pf_inscricao.carteira_validade';

    /** the column name for the provisoria field */
    const PROVISORIA = 'pf_inscricao.provisoria';

    /** the column name for the provisoria_num field */
    const PROVISORIA_NUM = 'pf_inscricao.provisoria_num';

    /** the column name for the provisoria_data field */
    const PROVISORIA_DATA = 'pf_inscricao.provisoria_data';

    /** the column name for the provisoria_validade field */
    const PROVISORIA_VALIDADE = 'pf_inscricao.provisoria_validade';

    /** the column name for the especialista_num field */
    const ESPECIALISTA_NUM = 'pf_inscricao.especialista_num';

    /** the column name for the especialista_data field */
    const ESPECIALISTA_DATA = 'pf_inscricao.especialista_data';

    /** the column name for the especialista_validade field */
    const ESPECIALISTA_VALIDADE = 'pf_inscricao.especialista_validade';

    /** the column name for the segundavia_num field */
    const SEGUNDAVIA_NUM = 'pf_inscricao.segundavia_num';

    /** the column name for the segundavia_data field */
    const SEGUNDAVIA_DATA = 'pf_inscricao.segundavia_data';

    /** the column name for the segundavia_validade field */
    const SEGUNDAVIA_VALIDADE = 'pf_inscricao.segundavia_validade';

    /** the column name for the senha field */
    const SENHA = 'pf_inscricao.senha';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of PfInscricao objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array PfInscricao[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PfInscricaoPeer::$fieldNames[PfInscricaoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdPfInscricao', 'FkIdPfInformacoes', 'PfUf', 'PfInscricao', 'PfClasse', 'Nome', 'Cpf', 'CarteiraCrmv', 'DtCarteiraCrmv', 'DtInscricao', 'Atuante', 'Isento', 'DtIncCadin', 'DtExcCadin', 'Processo', 'RevistaCfmv', 'RevistaCfmvDt', 'CarteiraValidade', 'Provisoria', 'ProvisoriaNum', 'ProvisoriaData', 'ProvisoriaValidade', 'EspecialistaNum', 'EspecialistaData', 'EspecialistaValidade', 'SegundaviaNum', 'SegundaviaData', 'SegundaviaValidade', 'Senha', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPfInscricao', 'fkIdPfInformacoes', 'pfUf', 'pfInscricao', 'pfClasse', 'nome', 'cpf', 'carteiraCrmv', 'dtCarteiraCrmv', 'dtInscricao', 'atuante', 'isento', 'dtIncCadin', 'dtExcCadin', 'processo', 'revistaCfmv', 'revistaCfmvDt', 'carteiraValidade', 'provisoria', 'provisoriaNum', 'provisoriaData', 'provisoriaValidade', 'especialistaNum', 'especialistaData', 'especialistaValidade', 'segundaviaNum', 'segundaviaData', 'segundaviaValidade', 'senha', ),
        BasePeer::TYPE_COLNAME => array (PfInscricaoPeer::ID_PF_INSCRICAO, PfInscricaoPeer::FK_ID_PF_INFORMACOES, PfInscricaoPeer::PF_UF, PfInscricaoPeer::PF_INSCRICAO, PfInscricaoPeer::PF_CLASSE, PfInscricaoPeer::NOME, PfInscricaoPeer::CPF, PfInscricaoPeer::CARTEIRA_CRMV, PfInscricaoPeer::DT_CARTEIRA_CRMV, PfInscricaoPeer::DT_INSCRICAO, PfInscricaoPeer::ATUANTE, PfInscricaoPeer::ISENTO, PfInscricaoPeer::DT_INC_CADIN, PfInscricaoPeer::DT_EXC_CADIN, PfInscricaoPeer::PROCESSO, PfInscricaoPeer::REVISTA_CFMV, PfInscricaoPeer::REVISTA_CFMV_DT, PfInscricaoPeer::CARTEIRA_VALIDADE, PfInscricaoPeer::PROVISORIA, PfInscricaoPeer::PROVISORIA_NUM, PfInscricaoPeer::PROVISORIA_DATA, PfInscricaoPeer::PROVISORIA_VALIDADE, PfInscricaoPeer::ESPECIALISTA_NUM, PfInscricaoPeer::ESPECIALISTA_DATA, PfInscricaoPeer::ESPECIALISTA_VALIDADE, PfInscricaoPeer::SEGUNDAVIA_NUM, PfInscricaoPeer::SEGUNDAVIA_DATA, PfInscricaoPeer::SEGUNDAVIA_VALIDADE, PfInscricaoPeer::SENHA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PF_INSCRICAO', 'FK_ID_PF_INFORMACOES', 'PF_UF', 'PF_INSCRICAO', 'PF_CLASSE', 'NOME', 'CPF', 'CARTEIRA_CRMV', 'DT_CARTEIRA_CRMV', 'DT_INSCRICAO', 'ATUANTE', 'ISENTO', 'DT_INC_CADIN', 'DT_EXC_CADIN', 'PROCESSO', 'REVISTA_CFMV', 'REVISTA_CFMV_DT', 'CARTEIRA_VALIDADE', 'PROVISORIA', 'PROVISORIA_NUM', 'PROVISORIA_DATA', 'PROVISORIA_VALIDADE', 'ESPECIALISTA_NUM', 'ESPECIALISTA_DATA', 'ESPECIALISTA_VALIDADE', 'SEGUNDAVIA_NUM', 'SEGUNDAVIA_DATA', 'SEGUNDAVIA_VALIDADE', 'SENHA', ),
        BasePeer::TYPE_FIELDNAME => array ('id_pf_inscricao', 'fk_id_pf_informacoes', 'pf_uf', 'pf_inscricao', 'pf_classe', 'nome', 'cpf', 'carteira_crmv', 'dt_carteira_crmv', 'dt_inscricao', 'atuante', 'isento', 'dt_inc_cadin', 'dt_exc_cadin', 'processo', 'revista_cfmv', 'revista_cfmv_dt', 'carteira_validade', 'provisoria', 'provisoria_num', 'provisoria_data', 'provisoria_validade', 'especialista_num', 'especialista_data', 'especialista_validade', 'segundavia_num', 'segundavia_data', 'segundavia_validade', 'senha', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PfInscricaoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdPfInscricao' => 0, 'FkIdPfInformacoes' => 1, 'PfUf' => 2, 'PfInscricao' => 3, 'PfClasse' => 4, 'Nome' => 5, 'Cpf' => 6, 'CarteiraCrmv' => 7, 'DtCarteiraCrmv' => 8, 'DtInscricao' => 9, 'Atuante' => 10, 'Isento' => 11, 'DtIncCadin' => 12, 'DtExcCadin' => 13, 'Processo' => 14, 'RevistaCfmv' => 15, 'RevistaCfmvDt' => 16, 'CarteiraValidade' => 17, 'Provisoria' => 18, 'ProvisoriaNum' => 19, 'ProvisoriaData' => 20, 'ProvisoriaValidade' => 21, 'EspecialistaNum' => 22, 'EspecialistaData' => 23, 'EspecialistaValidade' => 24, 'SegundaviaNum' => 25, 'SegundaviaData' => 26, 'SegundaviaValidade' => 27, 'Senha' => 28, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPfInscricao' => 0, 'fkIdPfInformacoes' => 1, 'pfUf' => 2, 'pfInscricao' => 3, 'pfClasse' => 4, 'nome' => 5, 'cpf' => 6, 'carteiraCrmv' => 7, 'dtCarteiraCrmv' => 8, 'dtInscricao' => 9, 'atuante' => 10, 'isento' => 11, 'dtIncCadin' => 12, 'dtExcCadin' => 13, 'processo' => 14, 'revistaCfmv' => 15, 'revistaCfmvDt' => 16, 'carteiraValidade' => 17, 'provisoria' => 18, 'provisoriaNum' => 19, 'provisoriaData' => 20, 'provisoriaValidade' => 21, 'especialistaNum' => 22, 'especialistaData' => 23, 'especialistaValidade' => 24, 'segundaviaNum' => 25, 'segundaviaData' => 26, 'segundaviaValidade' => 27, 'senha' => 28, ),
        BasePeer::TYPE_COLNAME => array (PfInscricaoPeer::ID_PF_INSCRICAO => 0, PfInscricaoPeer::FK_ID_PF_INFORMACOES => 1, PfInscricaoPeer::PF_UF => 2, PfInscricaoPeer::PF_INSCRICAO => 3, PfInscricaoPeer::PF_CLASSE => 4, PfInscricaoPeer::NOME => 5, PfInscricaoPeer::CPF => 6, PfInscricaoPeer::CARTEIRA_CRMV => 7, PfInscricaoPeer::DT_CARTEIRA_CRMV => 8, PfInscricaoPeer::DT_INSCRICAO => 9, PfInscricaoPeer::ATUANTE => 10, PfInscricaoPeer::ISENTO => 11, PfInscricaoPeer::DT_INC_CADIN => 12, PfInscricaoPeer::DT_EXC_CADIN => 13, PfInscricaoPeer::PROCESSO => 14, PfInscricaoPeer::REVISTA_CFMV => 15, PfInscricaoPeer::REVISTA_CFMV_DT => 16, PfInscricaoPeer::CARTEIRA_VALIDADE => 17, PfInscricaoPeer::PROVISORIA => 18, PfInscricaoPeer::PROVISORIA_NUM => 19, PfInscricaoPeer::PROVISORIA_DATA => 20, PfInscricaoPeer::PROVISORIA_VALIDADE => 21, PfInscricaoPeer::ESPECIALISTA_NUM => 22, PfInscricaoPeer::ESPECIALISTA_DATA => 23, PfInscricaoPeer::ESPECIALISTA_VALIDADE => 24, PfInscricaoPeer::SEGUNDAVIA_NUM => 25, PfInscricaoPeer::SEGUNDAVIA_DATA => 26, PfInscricaoPeer::SEGUNDAVIA_VALIDADE => 27, PfInscricaoPeer::SENHA => 28, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PF_INSCRICAO' => 0, 'FK_ID_PF_INFORMACOES' => 1, 'PF_UF' => 2, 'PF_INSCRICAO' => 3, 'PF_CLASSE' => 4, 'NOME' => 5, 'CPF' => 6, 'CARTEIRA_CRMV' => 7, 'DT_CARTEIRA_CRMV' => 8, 'DT_INSCRICAO' => 9, 'ATUANTE' => 10, 'ISENTO' => 11, 'DT_INC_CADIN' => 12, 'DT_EXC_CADIN' => 13, 'PROCESSO' => 14, 'REVISTA_CFMV' => 15, 'REVISTA_CFMV_DT' => 16, 'CARTEIRA_VALIDADE' => 17, 'PROVISORIA' => 18, 'PROVISORIA_NUM' => 19, 'PROVISORIA_DATA' => 20, 'PROVISORIA_VALIDADE' => 21, 'ESPECIALISTA_NUM' => 22, 'ESPECIALISTA_DATA' => 23, 'ESPECIALISTA_VALIDADE' => 24, 'SEGUNDAVIA_NUM' => 25, 'SEGUNDAVIA_DATA' => 26, 'SEGUNDAVIA_VALIDADE' => 27, 'SENHA' => 28, ),
        BasePeer::TYPE_FIELDNAME => array ('id_pf_inscricao' => 0, 'fk_id_pf_informacoes' => 1, 'pf_uf' => 2, 'pf_inscricao' => 3, 'pf_classe' => 4, 'nome' => 5, 'cpf' => 6, 'carteira_crmv' => 7, 'dt_carteira_crmv' => 8, 'dt_inscricao' => 9, 'atuante' => 10, 'isento' => 11, 'dt_inc_cadin' => 12, 'dt_exc_cadin' => 13, 'processo' => 14, 'revista_cfmv' => 15, 'revista_cfmv_dt' => 16, 'carteira_validade' => 17, 'provisoria' => 18, 'provisoria_num' => 19, 'provisoria_data' => 20, 'provisoria_validade' => 21, 'especialista_num' => 22, 'especialista_data' => 23, 'especialista_validade' => 24, 'segundavia_num' => 25, 'segundavia_data' => 26, 'segundavia_validade' => 27, 'senha' => 28, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = PfInscricaoPeer::getFieldNames($toType);
        $key = isset(PfInscricaoPeer::$fieldKeys[$fromType][$name]) ? PfInscricaoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PfInscricaoPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, PfInscricaoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PfInscricaoPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. PfInscricaoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PfInscricaoPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(PfInscricaoPeer::ID_PF_INSCRICAO);
            $criteria->addSelectColumn(PfInscricaoPeer::FK_ID_PF_INFORMACOES);
            $criteria->addSelectColumn(PfInscricaoPeer::PF_UF);
            $criteria->addSelectColumn(PfInscricaoPeer::PF_INSCRICAO);
            $criteria->addSelectColumn(PfInscricaoPeer::PF_CLASSE);
            $criteria->addSelectColumn(PfInscricaoPeer::NOME);
            $criteria->addSelectColumn(PfInscricaoPeer::CPF);
            $criteria->addSelectColumn(PfInscricaoPeer::CARTEIRA_CRMV);
            $criteria->addSelectColumn(PfInscricaoPeer::DT_CARTEIRA_CRMV);
            $criteria->addSelectColumn(PfInscricaoPeer::DT_INSCRICAO);
            $criteria->addSelectColumn(PfInscricaoPeer::ATUANTE);
            $criteria->addSelectColumn(PfInscricaoPeer::ISENTO);
            $criteria->addSelectColumn(PfInscricaoPeer::DT_INC_CADIN);
            $criteria->addSelectColumn(PfInscricaoPeer::DT_EXC_CADIN);
            $criteria->addSelectColumn(PfInscricaoPeer::PROCESSO);
            $criteria->addSelectColumn(PfInscricaoPeer::REVISTA_CFMV);
            $criteria->addSelectColumn(PfInscricaoPeer::REVISTA_CFMV_DT);
            $criteria->addSelectColumn(PfInscricaoPeer::CARTEIRA_VALIDADE);
            $criteria->addSelectColumn(PfInscricaoPeer::PROVISORIA);
            $criteria->addSelectColumn(PfInscricaoPeer::PROVISORIA_NUM);
            $criteria->addSelectColumn(PfInscricaoPeer::PROVISORIA_DATA);
            $criteria->addSelectColumn(PfInscricaoPeer::PROVISORIA_VALIDADE);
            $criteria->addSelectColumn(PfInscricaoPeer::ESPECIALISTA_NUM);
            $criteria->addSelectColumn(PfInscricaoPeer::ESPECIALISTA_DATA);
            $criteria->addSelectColumn(PfInscricaoPeer::ESPECIALISTA_VALIDADE);
            $criteria->addSelectColumn(PfInscricaoPeer::SEGUNDAVIA_NUM);
            $criteria->addSelectColumn(PfInscricaoPeer::SEGUNDAVIA_DATA);
            $criteria->addSelectColumn(PfInscricaoPeer::SEGUNDAVIA_VALIDADE);
            $criteria->addSelectColumn(PfInscricaoPeer::SENHA);
        } else {
            $criteria->addSelectColumn($alias . '.id_pf_inscricao');
            $criteria->addSelectColumn($alias . '.fk_id_pf_informacoes');
            $criteria->addSelectColumn($alias . '.pf_uf');
            $criteria->addSelectColumn($alias . '.pf_inscricao');
            $criteria->addSelectColumn($alias . '.pf_classe');
            $criteria->addSelectColumn($alias . '.nome');
            $criteria->addSelectColumn($alias . '.cpf');
            $criteria->addSelectColumn($alias . '.carteira_crmv');
            $criteria->addSelectColumn($alias . '.dt_carteira_crmv');
            $criteria->addSelectColumn($alias . '.dt_inscricao');
            $criteria->addSelectColumn($alias . '.atuante');
            $criteria->addSelectColumn($alias . '.isento');
            $criteria->addSelectColumn($alias . '.dt_inc_cadin');
            $criteria->addSelectColumn($alias . '.dt_exc_cadin');
            $criteria->addSelectColumn($alias . '.processo');
            $criteria->addSelectColumn($alias . '.revista_cfmv');
            $criteria->addSelectColumn($alias . '.revista_cfmv_dt');
            $criteria->addSelectColumn($alias . '.carteira_validade');
            $criteria->addSelectColumn($alias . '.provisoria');
            $criteria->addSelectColumn($alias . '.provisoria_num');
            $criteria->addSelectColumn($alias . '.provisoria_data');
            $criteria->addSelectColumn($alias . '.provisoria_validade');
            $criteria->addSelectColumn($alias . '.especialista_num');
            $criteria->addSelectColumn($alias . '.especialista_data');
            $criteria->addSelectColumn($alias . '.especialista_validade');
            $criteria->addSelectColumn($alias . '.segundavia_num');
            $criteria->addSelectColumn($alias . '.segundavia_data');
            $criteria->addSelectColumn($alias . '.segundavia_validade');
            $criteria->addSelectColumn($alias . '.senha');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PfInscricaoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PfInscricaoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PfInscricaoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PfInscricaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return PfInscricao
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PfInscricaoPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return PfInscricaoPeer::populateObjects(PfInscricaoPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfInscricaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PfInscricaoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PfInscricaoPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param PfInscricao $obj A PfInscricao object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdPfInscricao();
            } // if key === null
            PfInscricaoPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A PfInscricao object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof PfInscricao) {
                $key = (string) $value->getIdPfInscricao();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or PfInscricao object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PfInscricaoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return PfInscricao Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PfInscricaoPeer::$instances[$key])) {
                return PfInscricaoPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (PfInscricaoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PfInscricaoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to pf_inscricao
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = PfInscricaoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PfInscricaoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PfInscricaoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PfInscricaoPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (PfInscricao object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PfInscricaoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PfInscricaoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PfInscricaoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PfInscricaoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PfInscricaoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(PfInscricaoPeer::DATABASE_NAME)->getTable(PfInscricaoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePfInscricaoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePfInscricaoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PfInscricaoTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return PfInscricaoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a PfInscricao or Criteria object.
     *
     * @param      mixed $values Criteria or PfInscricao object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfInscricaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PfInscricao object
        }

        if ($criteria->containsKey(PfInscricaoPeer::ID_PF_INSCRICAO) && $criteria->keyContainsValue(PfInscricaoPeer::ID_PF_INSCRICAO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PfInscricaoPeer::ID_PF_INSCRICAO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PfInscricaoPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a PfInscricao or Criteria object.
     *
     * @param      mixed $values Criteria or PfInscricao object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfInscricaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PfInscricaoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PfInscricaoPeer::ID_PF_INSCRICAO);
            $value = $criteria->remove(PfInscricaoPeer::ID_PF_INSCRICAO);
            if ($value) {
                $selectCriteria->add(PfInscricaoPeer::ID_PF_INSCRICAO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PfInscricaoPeer::TABLE_NAME);
            }

        } else { // $values is PfInscricao object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PfInscricaoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the pf_inscricao table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfInscricaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PfInscricaoPeer::TABLE_NAME, $con, PfInscricaoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PfInscricaoPeer::clearInstancePool();
            PfInscricaoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a PfInscricao or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PfInscricao object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(PfInscricaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PfInscricaoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof PfInscricao) { // it's a model object
            // invalidate the cache for this single object
            PfInscricaoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PfInscricaoPeer::DATABASE_NAME);
            $criteria->add(PfInscricaoPeer::ID_PF_INSCRICAO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PfInscricaoPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PfInscricaoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PfInscricaoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given PfInscricao object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param PfInscricao $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PfInscricaoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PfInscricaoPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::NOME))
            $columns[PfInscricaoPeer::NOME] = $obj->getNome();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::CPF))
            $columns[PfInscricaoPeer::CPF] = $obj->getCpf();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::CARTEIRA_CRMV))
            $columns[PfInscricaoPeer::CARTEIRA_CRMV] = $obj->getCarteiraCrmv();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::DT_CARTEIRA_CRMV))
            $columns[PfInscricaoPeer::DT_CARTEIRA_CRMV] = $obj->getDtCarteiraCrmv();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::DT_INSCRICAO))
            $columns[PfInscricaoPeer::DT_INSCRICAO] = $obj->getDtInscricao();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::ATUANTE))
            $columns[PfInscricaoPeer::ATUANTE] = $obj->getAtuante();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::ISENTO))
            $columns[PfInscricaoPeer::ISENTO] = $obj->getIsento();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::DT_INC_CADIN))
            $columns[PfInscricaoPeer::DT_INC_CADIN] = $obj->getDtIncCadin();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::DT_EXC_CADIN))
            $columns[PfInscricaoPeer::DT_EXC_CADIN] = $obj->getDtExcCadin();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::PROCESSO))
            $columns[PfInscricaoPeer::PROCESSO] = $obj->getProcesso();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::REVISTA_CFMV))
            $columns[PfInscricaoPeer::REVISTA_CFMV] = $obj->getRevistaCfmv();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::REVISTA_CFMV_DT))
            $columns[PfInscricaoPeer::REVISTA_CFMV_DT] = $obj->getRevistaCfmvDt();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::CARTEIRA_VALIDADE))
            $columns[PfInscricaoPeer::CARTEIRA_VALIDADE] = $obj->getCarteiraValidade();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::PROVISORIA))
            $columns[PfInscricaoPeer::PROVISORIA] = $obj->getProvisoria();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::PROVISORIA_NUM))
            $columns[PfInscricaoPeer::PROVISORIA_NUM] = $obj->getProvisoriaNum();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::PROVISORIA_DATA))
            $columns[PfInscricaoPeer::PROVISORIA_DATA] = $obj->getProvisoriaData();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::PROVISORIA_VALIDADE))
            $columns[PfInscricaoPeer::PROVISORIA_VALIDADE] = $obj->getProvisoriaValidade();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::ESPECIALISTA_NUM))
            $columns[PfInscricaoPeer::ESPECIALISTA_NUM] = $obj->getEspecialistaNum();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::ESPECIALISTA_DATA))
            $columns[PfInscricaoPeer::ESPECIALISTA_DATA] = $obj->getEspecialistaData();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::ESPECIALISTA_VALIDADE))
            $columns[PfInscricaoPeer::ESPECIALISTA_VALIDADE] = $obj->getEspecialistaValidade();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::SEGUNDAVIA_NUM))
            $columns[PfInscricaoPeer::SEGUNDAVIA_NUM] = $obj->getSegundaviaNum();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::SEGUNDAVIA_DATA))
            $columns[PfInscricaoPeer::SEGUNDAVIA_DATA] = $obj->getSegundaviaData();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::SEGUNDAVIA_VALIDADE))
            $columns[PfInscricaoPeer::SEGUNDAVIA_VALIDADE] = $obj->getSegundaviaValidade();

        if ($obj->isNew() || $obj->isColumnModified(PfInscricaoPeer::SENHA))
            $columns[PfInscricaoPeer::SENHA] = $obj->getSenha();

        }

        return BasePeer::doValidate(PfInscricaoPeer::DATABASE_NAME, PfInscricaoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return PfInscricao
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PfInscricaoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PfInscricaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PfInscricaoPeer::DATABASE_NAME);
        $criteria->add(PfInscricaoPeer::ID_PF_INSCRICAO, $pk);

        $v = PfInscricaoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return PfInscricao[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfInscricaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PfInscricaoPeer::DATABASE_NAME);
            $criteria->add(PfInscricaoPeer::ID_PF_INSCRICAO, $pks, Criteria::IN);
            $objs = PfInscricaoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePfInscricaoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePfInscricaoPeer::buildTableMap();

