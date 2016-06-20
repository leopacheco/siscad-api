<?php

namespace Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use Model\PfInformacoes;
use Model\PfInformacoesPeer;
use Model\map\PfInformacoesTableMap;

/**
 * Base static class for performing query and update operations on the 'pf_informacoes' table.
 *
 *
 *
 * @package propel.generator.siscad.om
 */
abstract class BasePfInformacoesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'siscad';

    /** the table name for this class */
    const TABLE_NAME = 'pf_informacoes';

    /** the related Propel class for this table */
    const OM_CLASS = 'Model\\PfInformacoes';

    /** the related TableMap class for this table */
    const TM_CLASS = 'Model\\map\\PfInformacoesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the id_pf_informacoes field */
    const ID_PF_INFORMACOES = 'pf_informacoes.id_pf_informacoes';

    /** the column name for the fk_id_tab_nacionalidade field */
    const FK_ID_TAB_NACIONALIDADE = 'pf_informacoes.fk_id_tab_nacionalidade';

    /** the column name for the fk_id_tab_estado_civil field */
    const FK_ID_TAB_ESTADO_CIVIL = 'pf_informacoes.fk_id_tab_estado_civil';

    /** the column name for the fk_id_tab_tipo_sanguineo field */
    const FK_ID_TAB_TIPO_SANGUINEO = 'pf_informacoes.fk_id_tab_tipo_sanguineo';

    /** the column name for the fk_id_tab_faixa_salarial field */
    const FK_ID_TAB_FAIXA_SALARIAL = 'pf_informacoes.fk_id_tab_faixa_salarial';

    /** the column name for the mae field */
    const MAE = 'pf_informacoes.mae';

    /** the column name for the pai field */
    const PAI = 'pf_informacoes.pai';

    /** the column name for the dt_nascimento field */
    const DT_NASCIMENTO = 'pf_informacoes.dt_nascimento';

    /** the column name for the naturalidade field */
    const NATURALIDADE = 'pf_informacoes.naturalidade';

    /** the column name for the uf_naturalidade field */
    const UF_NATURALIDADE = 'pf_informacoes.uf_naturalidade';

    /** the column name for the sexo field */
    const SEXO = 'pf_informacoes.sexo';

    /** the column name for the rg_nro field */
    const RG_NRO = 'pf_informacoes.rg_nro';

    /** the column name for the rg_orgao_expedidor field */
    const RG_ORGAO_EXPEDIDOR = 'pf_informacoes.rg_orgao_expedidor';

    /** the column name for the rg_dt_expedicao field */
    const RG_DT_EXPEDICAO = 'pf_informacoes.rg_dt_expedicao';

    /** the column name for the certificado_militar field */
    const CERTIFICADO_MILITAR = 'pf_informacoes.certificado_militar';

    /** the column name for the titulo_eleitor field */
    const TITULO_ELEITOR = 'pf_informacoes.titulo_eleitor';

    /** the column name for the ctps_numero field */
    const CTPS_NUMERO = 'pf_informacoes.ctps_numero';

    /** the column name for the ctps_serie field */
    const CTPS_SERIE = 'pf_informacoes.ctps_serie';

    /** the column name for the ctps_dt_expedicao field */
    const CTPS_DT_EXPEDICAO = 'pf_informacoes.ctps_dt_expedicao';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of PfInformacoes objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array PfInformacoes[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PfInformacoesPeer::$fieldNames[PfInformacoesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdPfInformacoes', 'FkIdTabNacionalidade', 'FkIdTabEstadoCivil', 'FkIdTabTipoSanguineo', 'FkIdTabFaixaSalarial', 'Mae', 'Pai', 'DtNascimento', 'Naturalidade', 'UfNaturalidade', 'Sexo', 'RgNro', 'RgOrgaoExpedidor', 'RgDtExpedicao', 'CertificadoMilitar', 'TituloEleitor', 'CtpsNumero', 'CtpsSerie', 'CtpsDtExpedicao', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPfInformacoes', 'fkIdTabNacionalidade', 'fkIdTabEstadoCivil', 'fkIdTabTipoSanguineo', 'fkIdTabFaixaSalarial', 'mae', 'pai', 'dtNascimento', 'naturalidade', 'ufNaturalidade', 'sexo', 'rgNro', 'rgOrgaoExpedidor', 'rgDtExpedicao', 'certificadoMilitar', 'tituloEleitor', 'ctpsNumero', 'ctpsSerie', 'ctpsDtExpedicao', ),
        BasePeer::TYPE_COLNAME => array (PfInformacoesPeer::ID_PF_INFORMACOES, PfInformacoesPeer::FK_ID_TAB_NACIONALIDADE, PfInformacoesPeer::FK_ID_TAB_ESTADO_CIVIL, PfInformacoesPeer::FK_ID_TAB_TIPO_SANGUINEO, PfInformacoesPeer::FK_ID_TAB_FAIXA_SALARIAL, PfInformacoesPeer::MAE, PfInformacoesPeer::PAI, PfInformacoesPeer::DT_NASCIMENTO, PfInformacoesPeer::NATURALIDADE, PfInformacoesPeer::UF_NATURALIDADE, PfInformacoesPeer::SEXO, PfInformacoesPeer::RG_NRO, PfInformacoesPeer::RG_ORGAO_EXPEDIDOR, PfInformacoesPeer::RG_DT_EXPEDICAO, PfInformacoesPeer::CERTIFICADO_MILITAR, PfInformacoesPeer::TITULO_ELEITOR, PfInformacoesPeer::CTPS_NUMERO, PfInformacoesPeer::CTPS_SERIE, PfInformacoesPeer::CTPS_DT_EXPEDICAO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PF_INFORMACOES', 'FK_ID_TAB_NACIONALIDADE', 'FK_ID_TAB_ESTADO_CIVIL', 'FK_ID_TAB_TIPO_SANGUINEO', 'FK_ID_TAB_FAIXA_SALARIAL', 'MAE', 'PAI', 'DT_NASCIMENTO', 'NATURALIDADE', 'UF_NATURALIDADE', 'SEXO', 'RG_NRO', 'RG_ORGAO_EXPEDIDOR', 'RG_DT_EXPEDICAO', 'CERTIFICADO_MILITAR', 'TITULO_ELEITOR', 'CTPS_NUMERO', 'CTPS_SERIE', 'CTPS_DT_EXPEDICAO', ),
        BasePeer::TYPE_FIELDNAME => array ('id_pf_informacoes', 'fk_id_tab_nacionalidade', 'fk_id_tab_estado_civil', 'fk_id_tab_tipo_sanguineo', 'fk_id_tab_faixa_salarial', 'mae', 'pai', 'dt_nascimento', 'naturalidade', 'uf_naturalidade', 'sexo', 'rg_nro', 'rg_orgao_expedidor', 'rg_dt_expedicao', 'certificado_militar', 'titulo_eleitor', 'ctps_numero', 'ctps_serie', 'ctps_dt_expedicao', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PfInformacoesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdPfInformacoes' => 0, 'FkIdTabNacionalidade' => 1, 'FkIdTabEstadoCivil' => 2, 'FkIdTabTipoSanguineo' => 3, 'FkIdTabFaixaSalarial' => 4, 'Mae' => 5, 'Pai' => 6, 'DtNascimento' => 7, 'Naturalidade' => 8, 'UfNaturalidade' => 9, 'Sexo' => 10, 'RgNro' => 11, 'RgOrgaoExpedidor' => 12, 'RgDtExpedicao' => 13, 'CertificadoMilitar' => 14, 'TituloEleitor' => 15, 'CtpsNumero' => 16, 'CtpsSerie' => 17, 'CtpsDtExpedicao' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPfInformacoes' => 0, 'fkIdTabNacionalidade' => 1, 'fkIdTabEstadoCivil' => 2, 'fkIdTabTipoSanguineo' => 3, 'fkIdTabFaixaSalarial' => 4, 'mae' => 5, 'pai' => 6, 'dtNascimento' => 7, 'naturalidade' => 8, 'ufNaturalidade' => 9, 'sexo' => 10, 'rgNro' => 11, 'rgOrgaoExpedidor' => 12, 'rgDtExpedicao' => 13, 'certificadoMilitar' => 14, 'tituloEleitor' => 15, 'ctpsNumero' => 16, 'ctpsSerie' => 17, 'ctpsDtExpedicao' => 18, ),
        BasePeer::TYPE_COLNAME => array (PfInformacoesPeer::ID_PF_INFORMACOES => 0, PfInformacoesPeer::FK_ID_TAB_NACIONALIDADE => 1, PfInformacoesPeer::FK_ID_TAB_ESTADO_CIVIL => 2, PfInformacoesPeer::FK_ID_TAB_TIPO_SANGUINEO => 3, PfInformacoesPeer::FK_ID_TAB_FAIXA_SALARIAL => 4, PfInformacoesPeer::MAE => 5, PfInformacoesPeer::PAI => 6, PfInformacoesPeer::DT_NASCIMENTO => 7, PfInformacoesPeer::NATURALIDADE => 8, PfInformacoesPeer::UF_NATURALIDADE => 9, PfInformacoesPeer::SEXO => 10, PfInformacoesPeer::RG_NRO => 11, PfInformacoesPeer::RG_ORGAO_EXPEDIDOR => 12, PfInformacoesPeer::RG_DT_EXPEDICAO => 13, PfInformacoesPeer::CERTIFICADO_MILITAR => 14, PfInformacoesPeer::TITULO_ELEITOR => 15, PfInformacoesPeer::CTPS_NUMERO => 16, PfInformacoesPeer::CTPS_SERIE => 17, PfInformacoesPeer::CTPS_DT_EXPEDICAO => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PF_INFORMACOES' => 0, 'FK_ID_TAB_NACIONALIDADE' => 1, 'FK_ID_TAB_ESTADO_CIVIL' => 2, 'FK_ID_TAB_TIPO_SANGUINEO' => 3, 'FK_ID_TAB_FAIXA_SALARIAL' => 4, 'MAE' => 5, 'PAI' => 6, 'DT_NASCIMENTO' => 7, 'NATURALIDADE' => 8, 'UF_NATURALIDADE' => 9, 'SEXO' => 10, 'RG_NRO' => 11, 'RG_ORGAO_EXPEDIDOR' => 12, 'RG_DT_EXPEDICAO' => 13, 'CERTIFICADO_MILITAR' => 14, 'TITULO_ELEITOR' => 15, 'CTPS_NUMERO' => 16, 'CTPS_SERIE' => 17, 'CTPS_DT_EXPEDICAO' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('id_pf_informacoes' => 0, 'fk_id_tab_nacionalidade' => 1, 'fk_id_tab_estado_civil' => 2, 'fk_id_tab_tipo_sanguineo' => 3, 'fk_id_tab_faixa_salarial' => 4, 'mae' => 5, 'pai' => 6, 'dt_nascimento' => 7, 'naturalidade' => 8, 'uf_naturalidade' => 9, 'sexo' => 10, 'rg_nro' => 11, 'rg_orgao_expedidor' => 12, 'rg_dt_expedicao' => 13, 'certificado_militar' => 14, 'titulo_eleitor' => 15, 'ctps_numero' => 16, 'ctps_serie' => 17, 'ctps_dt_expedicao' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $toNames = PfInformacoesPeer::getFieldNames($toType);
        $key = isset(PfInformacoesPeer::$fieldKeys[$fromType][$name]) ? PfInformacoesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PfInformacoesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PfInformacoesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PfInformacoesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PfInformacoesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PfInformacoesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PfInformacoesPeer::ID_PF_INFORMACOES);
            $criteria->addSelectColumn(PfInformacoesPeer::FK_ID_TAB_NACIONALIDADE);
            $criteria->addSelectColumn(PfInformacoesPeer::FK_ID_TAB_ESTADO_CIVIL);
            $criteria->addSelectColumn(PfInformacoesPeer::FK_ID_TAB_TIPO_SANGUINEO);
            $criteria->addSelectColumn(PfInformacoesPeer::FK_ID_TAB_FAIXA_SALARIAL);
            $criteria->addSelectColumn(PfInformacoesPeer::MAE);
            $criteria->addSelectColumn(PfInformacoesPeer::PAI);
            $criteria->addSelectColumn(PfInformacoesPeer::DT_NASCIMENTO);
            $criteria->addSelectColumn(PfInformacoesPeer::NATURALIDADE);
            $criteria->addSelectColumn(PfInformacoesPeer::UF_NATURALIDADE);
            $criteria->addSelectColumn(PfInformacoesPeer::SEXO);
            $criteria->addSelectColumn(PfInformacoesPeer::RG_NRO);
            $criteria->addSelectColumn(PfInformacoesPeer::RG_ORGAO_EXPEDIDOR);
            $criteria->addSelectColumn(PfInformacoesPeer::RG_DT_EXPEDICAO);
            $criteria->addSelectColumn(PfInformacoesPeer::CERTIFICADO_MILITAR);
            $criteria->addSelectColumn(PfInformacoesPeer::TITULO_ELEITOR);
            $criteria->addSelectColumn(PfInformacoesPeer::CTPS_NUMERO);
            $criteria->addSelectColumn(PfInformacoesPeer::CTPS_SERIE);
            $criteria->addSelectColumn(PfInformacoesPeer::CTPS_DT_EXPEDICAO);
        } else {
            $criteria->addSelectColumn($alias . '.id_pf_informacoes');
            $criteria->addSelectColumn($alias . '.fk_id_tab_nacionalidade');
            $criteria->addSelectColumn($alias . '.fk_id_tab_estado_civil');
            $criteria->addSelectColumn($alias . '.fk_id_tab_tipo_sanguineo');
            $criteria->addSelectColumn($alias . '.fk_id_tab_faixa_salarial');
            $criteria->addSelectColumn($alias . '.mae');
            $criteria->addSelectColumn($alias . '.pai');
            $criteria->addSelectColumn($alias . '.dt_nascimento');
            $criteria->addSelectColumn($alias . '.naturalidade');
            $criteria->addSelectColumn($alias . '.uf_naturalidade');
            $criteria->addSelectColumn($alias . '.sexo');
            $criteria->addSelectColumn($alias . '.rg_nro');
            $criteria->addSelectColumn($alias . '.rg_orgao_expedidor');
            $criteria->addSelectColumn($alias . '.rg_dt_expedicao');
            $criteria->addSelectColumn($alias . '.certificado_militar');
            $criteria->addSelectColumn($alias . '.titulo_eleitor');
            $criteria->addSelectColumn($alias . '.ctps_numero');
            $criteria->addSelectColumn($alias . '.ctps_serie');
            $criteria->addSelectColumn($alias . '.ctps_dt_expedicao');
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
        $criteria->setPrimaryTableName(PfInformacoesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PfInformacoesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PfInformacoesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PfInformacoesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return PfInformacoes
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PfInformacoesPeer::doSelect($critcopy, $con);
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
        return PfInformacoesPeer::populateObjects(PfInformacoesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PfInformacoesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PfInformacoesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PfInformacoesPeer::DATABASE_NAME);

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
     * @param PfInformacoes $obj A PfInformacoes object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdPfInformacoes();
            } // if key === null
            PfInformacoesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A PfInformacoes object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof PfInformacoes) {
                $key = (string) $value->getIdPfInformacoes();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or PfInformacoes object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PfInformacoesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return PfInformacoes Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PfInformacoesPeer::$instances[$key])) {
                return PfInformacoesPeer::$instances[$key];
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
        foreach (PfInformacoesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PfInformacoesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to pf_informacoes
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
        $cls = PfInformacoesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PfInformacoesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PfInformacoesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PfInformacoesPeer::addInstanceToPool($obj, $key);
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
     * @return array (PfInformacoes object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PfInformacoesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PfInformacoesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PfInformacoesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PfInformacoesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PfInformacoesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PfInformacoesPeer::DATABASE_NAME)->getTable(PfInformacoesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePfInformacoesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePfInformacoesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \Model\map\PfInformacoesTableMap());
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
        return PfInformacoesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a PfInformacoes or Criteria object.
     *
     * @param      mixed $values Criteria or PfInformacoes object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfInformacoesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PfInformacoes object
        }

        if ($criteria->containsKey(PfInformacoesPeer::ID_PF_INFORMACOES) && $criteria->keyContainsValue(PfInformacoesPeer::ID_PF_INFORMACOES) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PfInformacoesPeer::ID_PF_INFORMACOES.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PfInformacoesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a PfInformacoes or Criteria object.
     *
     * @param      mixed $values Criteria or PfInformacoes object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfInformacoesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PfInformacoesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PfInformacoesPeer::ID_PF_INFORMACOES);
            $value = $criteria->remove(PfInformacoesPeer::ID_PF_INFORMACOES);
            if ($value) {
                $selectCriteria->add(PfInformacoesPeer::ID_PF_INFORMACOES, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PfInformacoesPeer::TABLE_NAME);
            }

        } else { // $values is PfInformacoes object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PfInformacoesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the pf_informacoes table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfInformacoesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PfInformacoesPeer::TABLE_NAME, $con, PfInformacoesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PfInformacoesPeer::clearInstancePool();
            PfInformacoesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a PfInformacoes or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PfInformacoes object or primary key or array of primary keys
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
            $con = Propel::getConnection(PfInformacoesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PfInformacoesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof PfInformacoes) { // it's a model object
            // invalidate the cache for this single object
            PfInformacoesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PfInformacoesPeer::DATABASE_NAME);
            $criteria->add(PfInformacoesPeer::ID_PF_INFORMACOES, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PfInformacoesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PfInformacoesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PfInformacoesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given PfInformacoes object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param PfInformacoes $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PfInformacoesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PfInformacoesPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::MAE))
            $columns[PfInformacoesPeer::MAE] = $obj->getMae();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::PAI))
            $columns[PfInformacoesPeer::PAI] = $obj->getPai();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::DT_NASCIMENTO))
            $columns[PfInformacoesPeer::DT_NASCIMENTO] = $obj->getDtNascimento();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::NATURALIDADE))
            $columns[PfInformacoesPeer::NATURALIDADE] = $obj->getNaturalidade();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::UF_NATURALIDADE))
            $columns[PfInformacoesPeer::UF_NATURALIDADE] = $obj->getUfNaturalidade();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::SEXO))
            $columns[PfInformacoesPeer::SEXO] = $obj->getSexo();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::RG_NRO))
            $columns[PfInformacoesPeer::RG_NRO] = $obj->getRgNro();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::RG_ORGAO_EXPEDIDOR))
            $columns[PfInformacoesPeer::RG_ORGAO_EXPEDIDOR] = $obj->getRgOrgaoExpedidor();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::RG_DT_EXPEDICAO))
            $columns[PfInformacoesPeer::RG_DT_EXPEDICAO] = $obj->getRgDtExpedicao();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::CERTIFICADO_MILITAR))
            $columns[PfInformacoesPeer::CERTIFICADO_MILITAR] = $obj->getCertificadoMilitar();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::TITULO_ELEITOR))
            $columns[PfInformacoesPeer::TITULO_ELEITOR] = $obj->getTituloEleitor();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::CTPS_NUMERO))
            $columns[PfInformacoesPeer::CTPS_NUMERO] = $obj->getCtpsNumero();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::CTPS_SERIE))
            $columns[PfInformacoesPeer::CTPS_SERIE] = $obj->getCtpsSerie();

        if ($obj->isNew() || $obj->isColumnModified(PfInformacoesPeer::CTPS_DT_EXPEDICAO))
            $columns[PfInformacoesPeer::CTPS_DT_EXPEDICAO] = $obj->getCtpsDtExpedicao();

        }

        return BasePeer::doValidate(PfInformacoesPeer::DATABASE_NAME, PfInformacoesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return PfInformacoes
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PfInformacoesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PfInformacoesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PfInformacoesPeer::DATABASE_NAME);
        $criteria->add(PfInformacoesPeer::ID_PF_INFORMACOES, $pk);

        $v = PfInformacoesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return PfInformacoes[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfInformacoesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PfInformacoesPeer::DATABASE_NAME);
            $criteria->add(PfInformacoesPeer::ID_PF_INFORMACOES, $pks, Criteria::IN);
            $objs = PfInformacoesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePfInformacoesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePfInformacoesPeer::buildTableMap();

