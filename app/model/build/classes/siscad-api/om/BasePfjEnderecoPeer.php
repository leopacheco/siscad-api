<?php


/**
 * Base static class for performing query and update operations on the 'pfj_endereco' table.
 *
 *
 *
 * @package propel.generator.siscad-api.om
 */
abstract class BasePfjEnderecoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'siscad-api';

    /** the table name for this class */
    const TABLE_NAME = 'pfj_endereco';

    /** the related Propel class for this table */
    const OM_CLASS = 'PfjEndereco';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PfjEnderecoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the id_pfj_endereco field */
    const ID_PFJ_ENDERECO = 'pfj_endereco.id_pfj_endereco';

    /** the column name for the fk_id_pj_registro field */
    const FK_ID_PJ_REGISTRO = 'pfj_endereco.fk_id_pj_registro';

    /** the column name for the fk_id_pf_inscricao field */
    const FK_ID_PF_INSCRICAO = 'pfj_endereco.fk_id_pf_inscricao';

    /** the column name for the fk_id_tab_uf field */
    const FK_ID_TAB_UF = 'pfj_endereco.fk_id_tab_uf';

    /** the column name for the fk_id_tab_cep_cidade field */
    const FK_ID_TAB_CEP_CIDADE = 'pfj_endereco.fk_id_tab_cep_cidade';

    /** the column name for the endereco field */
    const ENDERECO = 'pfj_endereco.endereco';

    /** the column name for the bairro field */
    const BAIRRO = 'pfj_endereco.bairro';

    /** the column name for the cidade field */
    const CIDADE = 'pfj_endereco.cidade';

    /** the column name for the cep field */
    const CEP = 'pfj_endereco.cep';

    /** the column name for the uf field */
    const UF = 'pfj_endereco.uf';

    /** the column name for the fk_id_tab_correio field */
    const FK_ID_TAB_CORREIO = 'pfj_endereco.fk_id_tab_correio';

    /** the column name for the dt_atualizacao field */
    const DT_ATUALIZACAO = 'pfj_endereco.dt_atualizacao';

    /** the column name for the dt_atualizacao_web field */
    const DT_ATUALIZACAO_WEB = 'pfj_endereco.dt_atualizacao_web';

    /** the column name for the email field */
    const EMAIL = 'pfj_endereco.email';

    /** the column name for the ddd_tel field */
    const DDD_TEL = 'pfj_endereco.ddd_tel';

    /** the column name for the telefone field */
    const TELEFONE = 'pfj_endereco.telefone';

    /** the column name for the ramal field */
    const RAMAL = 'pfj_endereco.ramal';

    /** the column name for the ddd_cel field */
    const DDD_CEL = 'pfj_endereco.ddd_cel';

    /** the column name for the celular field */
    const CELULAR = 'pfj_endereco.celular';

    /** the column name for the ddd_fax field */
    const DDD_FAX = 'pfj_endereco.ddd_fax';

    /** the column name for the fax field */
    const FAX = 'pfj_endereco.fax';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of PfjEndereco objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array PfjEndereco[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PfjEnderecoPeer::$fieldNames[PfjEnderecoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdPfjEndereco', 'FkIdPjRegistro', 'FkIdPfInscricao', 'FkIdTabUf', 'FkIdTabCepCidade', 'Endereco', 'Bairro', 'Cidade', 'Cep', 'Uf', 'FkIdTabCorreio', 'DtAtualizacao', 'DtAtualizacaoWeb', 'Email', 'DddTel', 'Telefone', 'Ramal', 'DddCel', 'Celular', 'DddFax', 'Fax', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPfjEndereco', 'fkIdPjRegistro', 'fkIdPfInscricao', 'fkIdTabUf', 'fkIdTabCepCidade', 'endereco', 'bairro', 'cidade', 'cep', 'uf', 'fkIdTabCorreio', 'dtAtualizacao', 'dtAtualizacaoWeb', 'email', 'dddTel', 'telefone', 'ramal', 'dddCel', 'celular', 'dddFax', 'fax', ),
        BasePeer::TYPE_COLNAME => array (PfjEnderecoPeer::ID_PFJ_ENDERECO, PfjEnderecoPeer::FK_ID_PJ_REGISTRO, PfjEnderecoPeer::FK_ID_PF_INSCRICAO, PfjEnderecoPeer::FK_ID_TAB_UF, PfjEnderecoPeer::FK_ID_TAB_CEP_CIDADE, PfjEnderecoPeer::ENDERECO, PfjEnderecoPeer::BAIRRO, PfjEnderecoPeer::CIDADE, PfjEnderecoPeer::CEP, PfjEnderecoPeer::UF, PfjEnderecoPeer::FK_ID_TAB_CORREIO, PfjEnderecoPeer::DT_ATUALIZACAO, PfjEnderecoPeer::DT_ATUALIZACAO_WEB, PfjEnderecoPeer::EMAIL, PfjEnderecoPeer::DDD_TEL, PfjEnderecoPeer::TELEFONE, PfjEnderecoPeer::RAMAL, PfjEnderecoPeer::DDD_CEL, PfjEnderecoPeer::CELULAR, PfjEnderecoPeer::DDD_FAX, PfjEnderecoPeer::FAX, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PFJ_ENDERECO', 'FK_ID_PJ_REGISTRO', 'FK_ID_PF_INSCRICAO', 'FK_ID_TAB_UF', 'FK_ID_TAB_CEP_CIDADE', 'ENDERECO', 'BAIRRO', 'CIDADE', 'CEP', 'UF', 'FK_ID_TAB_CORREIO', 'DT_ATUALIZACAO', 'DT_ATUALIZACAO_WEB', 'EMAIL', 'DDD_TEL', 'TELEFONE', 'RAMAL', 'DDD_CEL', 'CELULAR', 'DDD_FAX', 'FAX', ),
        BasePeer::TYPE_FIELDNAME => array ('id_pfj_endereco', 'fk_id_pj_registro', 'fk_id_pf_inscricao', 'fk_id_tab_uf', 'fk_id_tab_cep_cidade', 'endereco', 'bairro', 'cidade', 'cep', 'uf', 'fk_id_tab_correio', 'dt_atualizacao', 'dt_atualizacao_web', 'email', 'ddd_tel', 'telefone', 'ramal', 'ddd_cel', 'celular', 'ddd_fax', 'fax', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PfjEnderecoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdPfjEndereco' => 0, 'FkIdPjRegistro' => 1, 'FkIdPfInscricao' => 2, 'FkIdTabUf' => 3, 'FkIdTabCepCidade' => 4, 'Endereco' => 5, 'Bairro' => 6, 'Cidade' => 7, 'Cep' => 8, 'Uf' => 9, 'FkIdTabCorreio' => 10, 'DtAtualizacao' => 11, 'DtAtualizacaoWeb' => 12, 'Email' => 13, 'DddTel' => 14, 'Telefone' => 15, 'Ramal' => 16, 'DddCel' => 17, 'Celular' => 18, 'DddFax' => 19, 'Fax' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPfjEndereco' => 0, 'fkIdPjRegistro' => 1, 'fkIdPfInscricao' => 2, 'fkIdTabUf' => 3, 'fkIdTabCepCidade' => 4, 'endereco' => 5, 'bairro' => 6, 'cidade' => 7, 'cep' => 8, 'uf' => 9, 'fkIdTabCorreio' => 10, 'dtAtualizacao' => 11, 'dtAtualizacaoWeb' => 12, 'email' => 13, 'dddTel' => 14, 'telefone' => 15, 'ramal' => 16, 'dddCel' => 17, 'celular' => 18, 'dddFax' => 19, 'fax' => 20, ),
        BasePeer::TYPE_COLNAME => array (PfjEnderecoPeer::ID_PFJ_ENDERECO => 0, PfjEnderecoPeer::FK_ID_PJ_REGISTRO => 1, PfjEnderecoPeer::FK_ID_PF_INSCRICAO => 2, PfjEnderecoPeer::FK_ID_TAB_UF => 3, PfjEnderecoPeer::FK_ID_TAB_CEP_CIDADE => 4, PfjEnderecoPeer::ENDERECO => 5, PfjEnderecoPeer::BAIRRO => 6, PfjEnderecoPeer::CIDADE => 7, PfjEnderecoPeer::CEP => 8, PfjEnderecoPeer::UF => 9, PfjEnderecoPeer::FK_ID_TAB_CORREIO => 10, PfjEnderecoPeer::DT_ATUALIZACAO => 11, PfjEnderecoPeer::DT_ATUALIZACAO_WEB => 12, PfjEnderecoPeer::EMAIL => 13, PfjEnderecoPeer::DDD_TEL => 14, PfjEnderecoPeer::TELEFONE => 15, PfjEnderecoPeer::RAMAL => 16, PfjEnderecoPeer::DDD_CEL => 17, PfjEnderecoPeer::CELULAR => 18, PfjEnderecoPeer::DDD_FAX => 19, PfjEnderecoPeer::FAX => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PFJ_ENDERECO' => 0, 'FK_ID_PJ_REGISTRO' => 1, 'FK_ID_PF_INSCRICAO' => 2, 'FK_ID_TAB_UF' => 3, 'FK_ID_TAB_CEP_CIDADE' => 4, 'ENDERECO' => 5, 'BAIRRO' => 6, 'CIDADE' => 7, 'CEP' => 8, 'UF' => 9, 'FK_ID_TAB_CORREIO' => 10, 'DT_ATUALIZACAO' => 11, 'DT_ATUALIZACAO_WEB' => 12, 'EMAIL' => 13, 'DDD_TEL' => 14, 'TELEFONE' => 15, 'RAMAL' => 16, 'DDD_CEL' => 17, 'CELULAR' => 18, 'DDD_FAX' => 19, 'FAX' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('id_pfj_endereco' => 0, 'fk_id_pj_registro' => 1, 'fk_id_pf_inscricao' => 2, 'fk_id_tab_uf' => 3, 'fk_id_tab_cep_cidade' => 4, 'endereco' => 5, 'bairro' => 6, 'cidade' => 7, 'cep' => 8, 'uf' => 9, 'fk_id_tab_correio' => 10, 'dt_atualizacao' => 11, 'dt_atualizacao_web' => 12, 'email' => 13, 'ddd_tel' => 14, 'telefone' => 15, 'ramal' => 16, 'ddd_cel' => 17, 'celular' => 18, 'ddd_fax' => 19, 'fax' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
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
        $toNames = PfjEnderecoPeer::getFieldNames($toType);
        $key = isset(PfjEnderecoPeer::$fieldKeys[$fromType][$name]) ? PfjEnderecoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PfjEnderecoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PfjEnderecoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PfjEnderecoPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PfjEnderecoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PfjEnderecoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PfjEnderecoPeer::ID_PFJ_ENDERECO);
            $criteria->addSelectColumn(PfjEnderecoPeer::FK_ID_PJ_REGISTRO);
            $criteria->addSelectColumn(PfjEnderecoPeer::FK_ID_PF_INSCRICAO);
            $criteria->addSelectColumn(PfjEnderecoPeer::FK_ID_TAB_UF);
            $criteria->addSelectColumn(PfjEnderecoPeer::FK_ID_TAB_CEP_CIDADE);
            $criteria->addSelectColumn(PfjEnderecoPeer::ENDERECO);
            $criteria->addSelectColumn(PfjEnderecoPeer::BAIRRO);
            $criteria->addSelectColumn(PfjEnderecoPeer::CIDADE);
            $criteria->addSelectColumn(PfjEnderecoPeer::CEP);
            $criteria->addSelectColumn(PfjEnderecoPeer::UF);
            $criteria->addSelectColumn(PfjEnderecoPeer::FK_ID_TAB_CORREIO);
            $criteria->addSelectColumn(PfjEnderecoPeer::DT_ATUALIZACAO);
            $criteria->addSelectColumn(PfjEnderecoPeer::DT_ATUALIZACAO_WEB);
            $criteria->addSelectColumn(PfjEnderecoPeer::EMAIL);
            $criteria->addSelectColumn(PfjEnderecoPeer::DDD_TEL);
            $criteria->addSelectColumn(PfjEnderecoPeer::TELEFONE);
            $criteria->addSelectColumn(PfjEnderecoPeer::RAMAL);
            $criteria->addSelectColumn(PfjEnderecoPeer::DDD_CEL);
            $criteria->addSelectColumn(PfjEnderecoPeer::CELULAR);
            $criteria->addSelectColumn(PfjEnderecoPeer::DDD_FAX);
            $criteria->addSelectColumn(PfjEnderecoPeer::FAX);
        } else {
            $criteria->addSelectColumn($alias . '.id_pfj_endereco');
            $criteria->addSelectColumn($alias . '.fk_id_pj_registro');
            $criteria->addSelectColumn($alias . '.fk_id_pf_inscricao');
            $criteria->addSelectColumn($alias . '.fk_id_tab_uf');
            $criteria->addSelectColumn($alias . '.fk_id_tab_cep_cidade');
            $criteria->addSelectColumn($alias . '.endereco');
            $criteria->addSelectColumn($alias . '.bairro');
            $criteria->addSelectColumn($alias . '.cidade');
            $criteria->addSelectColumn($alias . '.cep');
            $criteria->addSelectColumn($alias . '.uf');
            $criteria->addSelectColumn($alias . '.fk_id_tab_correio');
            $criteria->addSelectColumn($alias . '.dt_atualizacao');
            $criteria->addSelectColumn($alias . '.dt_atualizacao_web');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.ddd_tel');
            $criteria->addSelectColumn($alias . '.telefone');
            $criteria->addSelectColumn($alias . '.ramal');
            $criteria->addSelectColumn($alias . '.ddd_cel');
            $criteria->addSelectColumn($alias . '.celular');
            $criteria->addSelectColumn($alias . '.ddd_fax');
            $criteria->addSelectColumn($alias . '.fax');
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
        $criteria->setPrimaryTableName(PfjEnderecoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PfjEnderecoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PfjEnderecoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PfjEnderecoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return PfjEndereco
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PfjEnderecoPeer::doSelect($critcopy, $con);
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
        return PfjEnderecoPeer::populateObjects(PfjEnderecoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PfjEnderecoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PfjEnderecoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PfjEnderecoPeer::DATABASE_NAME);

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
     * @param PfjEndereco $obj A PfjEndereco object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdPfjEndereco();
            } // if key === null
            PfjEnderecoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A PfjEndereco object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof PfjEndereco) {
                $key = (string) $value->getIdPfjEndereco();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or PfjEndereco object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PfjEnderecoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return PfjEndereco Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PfjEnderecoPeer::$instances[$key])) {
                return PfjEnderecoPeer::$instances[$key];
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
        foreach (PfjEnderecoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PfjEnderecoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to pfj_endereco
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
        $cls = PfjEnderecoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PfjEnderecoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PfjEnderecoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PfjEnderecoPeer::addInstanceToPool($obj, $key);
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
     * @return array (PfjEndereco object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PfjEnderecoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PfjEnderecoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PfjEnderecoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PfjEnderecoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PfjEnderecoPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PfjEnderecoPeer::DATABASE_NAME)->getTable(PfjEnderecoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePfjEnderecoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePfjEnderecoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PfjEnderecoTableMap());
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
        return PfjEnderecoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a PfjEndereco or Criteria object.
     *
     * @param      mixed $values Criteria or PfjEndereco object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfjEnderecoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PfjEndereco object
        }

        if ($criteria->containsKey(PfjEnderecoPeer::ID_PFJ_ENDERECO) && $criteria->keyContainsValue(PfjEnderecoPeer::ID_PFJ_ENDERECO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PfjEnderecoPeer::ID_PFJ_ENDERECO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PfjEnderecoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a PfjEndereco or Criteria object.
     *
     * @param      mixed $values Criteria or PfjEndereco object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfjEnderecoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PfjEnderecoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PfjEnderecoPeer::ID_PFJ_ENDERECO);
            $value = $criteria->remove(PfjEnderecoPeer::ID_PFJ_ENDERECO);
            if ($value) {
                $selectCriteria->add(PfjEnderecoPeer::ID_PFJ_ENDERECO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PfjEnderecoPeer::TABLE_NAME);
            }

        } else { // $values is PfjEndereco object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PfjEnderecoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the pfj_endereco table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfjEnderecoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PfjEnderecoPeer::TABLE_NAME, $con, PfjEnderecoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PfjEnderecoPeer::clearInstancePool();
            PfjEnderecoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a PfjEndereco or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PfjEndereco object or primary key or array of primary keys
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
            $con = Propel::getConnection(PfjEnderecoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PfjEnderecoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof PfjEndereco) { // it's a model object
            // invalidate the cache for this single object
            PfjEnderecoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PfjEnderecoPeer::DATABASE_NAME);
            $criteria->add(PfjEnderecoPeer::ID_PFJ_ENDERECO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PfjEnderecoPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PfjEnderecoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PfjEnderecoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given PfjEndereco object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param PfjEndereco $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PfjEnderecoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PfjEnderecoPeer::TABLE_NAME);

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

        }

        return BasePeer::doValidate(PfjEnderecoPeer::DATABASE_NAME, PfjEnderecoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return PfjEndereco
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PfjEnderecoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PfjEnderecoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PfjEnderecoPeer::DATABASE_NAME);
        $criteria->add(PfjEnderecoPeer::ID_PFJ_ENDERECO, $pk);

        $v = PfjEnderecoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return PfjEndereco[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfjEnderecoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PfjEnderecoPeer::DATABASE_NAME);
            $criteria->add(PfjEnderecoPeer::ID_PFJ_ENDERECO, $pks, Criteria::IN);
            $objs = PfjEnderecoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePfjEnderecoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePfjEnderecoPeer::buildTableMap();

