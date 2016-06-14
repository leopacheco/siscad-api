<?php


/**
 * Base static class for performing query and update operations on the 'tab_uf' table.
 *
 *
 *
 * @package propel.generator.siscad-api.om
 */
abstract class BaseTabUfPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'siscad-api';

    /** the table name for this class */
    const TABLE_NAME = 'tab_uf';

    /** the related Propel class for this table */
    const OM_CLASS = 'TabUf';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TabUfTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the id_tab_uf field */
    const ID_TAB_UF = 'tab_uf.id_tab_uf';

    /** the column name for the sigla field */
    const SIGLA = 'tab_uf.sigla';

    /** the column name for the tratamento field */
    const TRATAMENTO = 'tab_uf.tratamento';

    /** the column name for the estado field */
    const ESTADO = 'tab_uf.estado';

    /** the column name for the capital field */
    const CAPITAL = 'tab_uf.capital';

    /** the column name for the rua field */
    const RUA = 'tab_uf.rua';

    /** the column name for the bairro field */
    const BAIRRO = 'tab_uf.bairro';

    /** the column name for the cep field */
    const CEP = 'tab_uf.cep';

    /** the column name for the ddd field */
    const DDD = 'tab_uf.ddd';

    /** the column name for the telefone field */
    const TELEFONE = 'tab_uf.telefone';

    /** the column name for the fax field */
    const FAX = 'tab_uf.fax';

    /** the column name for the email field */
    const EMAIL = 'tab_uf.email';

    /** the column name for the sequencia_tf field */
    const SEQUENCIA_TF = 'tab_uf.sequencia_tf';

    /** the column name for the sequencia_ai field */
    const SEQUENCIA_AI = 'tab_uf.sequencia_ai';

    /** the column name for the ano field */
    const ANO = 'tab_uf.ano';

    /** the column name for the regiao field */
    const REGIAO = 'tab_uf.regiao';

    /** the column name for the res1102 field */
    const RES1102 = 'tab_uf.res1102';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of TabUf objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array TabUf[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TabUfPeer::$fieldNames[TabUfPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdTabUf', 'Sigla', 'Tratamento', 'Estado', 'Capital', 'Rua', 'Bairro', 'Cep', 'Ddd', 'Telefone', 'Fax', 'Email', 'SequenciaTf', 'SequenciaAi', 'Ano', 'Regiao', 'Res1102', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTabUf', 'sigla', 'tratamento', 'estado', 'capital', 'rua', 'bairro', 'cep', 'ddd', 'telefone', 'fax', 'email', 'sequenciaTf', 'sequenciaAi', 'ano', 'regiao', 'res1102', ),
        BasePeer::TYPE_COLNAME => array (TabUfPeer::ID_TAB_UF, TabUfPeer::SIGLA, TabUfPeer::TRATAMENTO, TabUfPeer::ESTADO, TabUfPeer::CAPITAL, TabUfPeer::RUA, TabUfPeer::BAIRRO, TabUfPeer::CEP, TabUfPeer::DDD, TabUfPeer::TELEFONE, TabUfPeer::FAX, TabUfPeer::EMAIL, TabUfPeer::SEQUENCIA_TF, TabUfPeer::SEQUENCIA_AI, TabUfPeer::ANO, TabUfPeer::REGIAO, TabUfPeer::RES1102, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TAB_UF', 'SIGLA', 'TRATAMENTO', 'ESTADO', 'CAPITAL', 'RUA', 'BAIRRO', 'CEP', 'DDD', 'TELEFONE', 'FAX', 'EMAIL', 'SEQUENCIA_TF', 'SEQUENCIA_AI', 'ANO', 'REGIAO', 'RES1102', ),
        BasePeer::TYPE_FIELDNAME => array ('id_tab_uf', 'sigla', 'tratamento', 'estado', 'capital', 'rua', 'bairro', 'cep', 'ddd', 'telefone', 'fax', 'email', 'sequencia_tf', 'sequencia_ai', 'ano', 'regiao', 'res1102', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TabUfPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdTabUf' => 0, 'Sigla' => 1, 'Tratamento' => 2, 'Estado' => 3, 'Capital' => 4, 'Rua' => 5, 'Bairro' => 6, 'Cep' => 7, 'Ddd' => 8, 'Telefone' => 9, 'Fax' => 10, 'Email' => 11, 'SequenciaTf' => 12, 'SequenciaAi' => 13, 'Ano' => 14, 'Regiao' => 15, 'Res1102' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTabUf' => 0, 'sigla' => 1, 'tratamento' => 2, 'estado' => 3, 'capital' => 4, 'rua' => 5, 'bairro' => 6, 'cep' => 7, 'ddd' => 8, 'telefone' => 9, 'fax' => 10, 'email' => 11, 'sequenciaTf' => 12, 'sequenciaAi' => 13, 'ano' => 14, 'regiao' => 15, 'res1102' => 16, ),
        BasePeer::TYPE_COLNAME => array (TabUfPeer::ID_TAB_UF => 0, TabUfPeer::SIGLA => 1, TabUfPeer::TRATAMENTO => 2, TabUfPeer::ESTADO => 3, TabUfPeer::CAPITAL => 4, TabUfPeer::RUA => 5, TabUfPeer::BAIRRO => 6, TabUfPeer::CEP => 7, TabUfPeer::DDD => 8, TabUfPeer::TELEFONE => 9, TabUfPeer::FAX => 10, TabUfPeer::EMAIL => 11, TabUfPeer::SEQUENCIA_TF => 12, TabUfPeer::SEQUENCIA_AI => 13, TabUfPeer::ANO => 14, TabUfPeer::REGIAO => 15, TabUfPeer::RES1102 => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TAB_UF' => 0, 'SIGLA' => 1, 'TRATAMENTO' => 2, 'ESTADO' => 3, 'CAPITAL' => 4, 'RUA' => 5, 'BAIRRO' => 6, 'CEP' => 7, 'DDD' => 8, 'TELEFONE' => 9, 'FAX' => 10, 'EMAIL' => 11, 'SEQUENCIA_TF' => 12, 'SEQUENCIA_AI' => 13, 'ANO' => 14, 'REGIAO' => 15, 'RES1102' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('id_tab_uf' => 0, 'sigla' => 1, 'tratamento' => 2, 'estado' => 3, 'capital' => 4, 'rua' => 5, 'bairro' => 6, 'cep' => 7, 'ddd' => 8, 'telefone' => 9, 'fax' => 10, 'email' => 11, 'sequencia_tf' => 12, 'sequencia_ai' => 13, 'ano' => 14, 'regiao' => 15, 'res1102' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $toNames = TabUfPeer::getFieldNames($toType);
        $key = isset(TabUfPeer::$fieldKeys[$fromType][$name]) ? TabUfPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TabUfPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TabUfPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TabUfPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. TabUfPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TabUfPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TabUfPeer::ID_TAB_UF);
            $criteria->addSelectColumn(TabUfPeer::SIGLA);
            $criteria->addSelectColumn(TabUfPeer::TRATAMENTO);
            $criteria->addSelectColumn(TabUfPeer::ESTADO);
            $criteria->addSelectColumn(TabUfPeer::CAPITAL);
            $criteria->addSelectColumn(TabUfPeer::RUA);
            $criteria->addSelectColumn(TabUfPeer::BAIRRO);
            $criteria->addSelectColumn(TabUfPeer::CEP);
            $criteria->addSelectColumn(TabUfPeer::DDD);
            $criteria->addSelectColumn(TabUfPeer::TELEFONE);
            $criteria->addSelectColumn(TabUfPeer::FAX);
            $criteria->addSelectColumn(TabUfPeer::EMAIL);
            $criteria->addSelectColumn(TabUfPeer::SEQUENCIA_TF);
            $criteria->addSelectColumn(TabUfPeer::SEQUENCIA_AI);
            $criteria->addSelectColumn(TabUfPeer::ANO);
            $criteria->addSelectColumn(TabUfPeer::REGIAO);
            $criteria->addSelectColumn(TabUfPeer::RES1102);
        } else {
            $criteria->addSelectColumn($alias . '.id_tab_uf');
            $criteria->addSelectColumn($alias . '.sigla');
            $criteria->addSelectColumn($alias . '.tratamento');
            $criteria->addSelectColumn($alias . '.estado');
            $criteria->addSelectColumn($alias . '.capital');
            $criteria->addSelectColumn($alias . '.rua');
            $criteria->addSelectColumn($alias . '.bairro');
            $criteria->addSelectColumn($alias . '.cep');
            $criteria->addSelectColumn($alias . '.ddd');
            $criteria->addSelectColumn($alias . '.telefone');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.sequencia_tf');
            $criteria->addSelectColumn($alias . '.sequencia_ai');
            $criteria->addSelectColumn($alias . '.ano');
            $criteria->addSelectColumn($alias . '.regiao');
            $criteria->addSelectColumn($alias . '.res1102');
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
        $criteria->setPrimaryTableName(TabUfPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TabUfPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TabUfPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TabUfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return TabUf
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TabUfPeer::doSelect($critcopy, $con);
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
        return TabUfPeer::populateObjects(TabUfPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TabUfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TabUfPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TabUfPeer::DATABASE_NAME);

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
     * @param TabUf $obj A TabUf object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdTabUf();
            } // if key === null
            TabUfPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A TabUf object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof TabUf) {
                $key = (string) $value->getIdTabUf();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or TabUf object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TabUfPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return TabUf Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TabUfPeer::$instances[$key])) {
                return TabUfPeer::$instances[$key];
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
        foreach (TabUfPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TabUfPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to tab_uf
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
        $cls = TabUfPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TabUfPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TabUfPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TabUfPeer::addInstanceToPool($obj, $key);
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
     * @return array (TabUf object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TabUfPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TabUfPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TabUfPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TabUfPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TabUfPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(TabUfPeer::DATABASE_NAME)->getTable(TabUfPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTabUfPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTabUfPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TabUfTableMap());
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
        return TabUfPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a TabUf or Criteria object.
     *
     * @param      mixed $values Criteria or TabUf object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TabUfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from TabUf object
        }

        if ($criteria->containsKey(TabUfPeer::ID_TAB_UF) && $criteria->keyContainsValue(TabUfPeer::ID_TAB_UF) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TabUfPeer::ID_TAB_UF.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TabUfPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a TabUf or Criteria object.
     *
     * @param      mixed $values Criteria or TabUf object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TabUfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TabUfPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TabUfPeer::ID_TAB_UF);
            $value = $criteria->remove(TabUfPeer::ID_TAB_UF);
            if ($value) {
                $selectCriteria->add(TabUfPeer::ID_TAB_UF, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TabUfPeer::TABLE_NAME);
            }

        } else { // $values is TabUf object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TabUfPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the tab_uf table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TabUfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TabUfPeer::TABLE_NAME, $con, TabUfPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TabUfPeer::clearInstancePool();
            TabUfPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a TabUf or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or TabUf object or primary key or array of primary keys
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
            $con = Propel::getConnection(TabUfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TabUfPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof TabUf) { // it's a model object
            // invalidate the cache for this single object
            TabUfPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TabUfPeer::DATABASE_NAME);
            $criteria->add(TabUfPeer::ID_TAB_UF, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TabUfPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TabUfPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TabUfPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given TabUf object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param TabUf $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TabUfPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TabUfPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TabUfPeer::DATABASE_NAME, TabUfPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return TabUf
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TabUfPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TabUfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TabUfPeer::DATABASE_NAME);
        $criteria->add(TabUfPeer::ID_TAB_UF, $pk);

        $v = TabUfPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return TabUf[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TabUfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TabUfPeer::DATABASE_NAME);
            $criteria->add(TabUfPeer::ID_TAB_UF, $pks, Criteria::IN);
            $objs = TabUfPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTabUfPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTabUfPeer::buildTableMap();

