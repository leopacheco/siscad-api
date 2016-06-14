<?php


/**
 * Base static class for performing query and update operations on the 'pf_graduacao' table.
 *
 *
 *
 * @package propel.generator.siscad-api.om
 */
abstract class BasePfGraduacaoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'siscad-api';

    /** the table name for this class */
    const TABLE_NAME = 'pf_graduacao';

    /** the related Propel class for this table */
    const OM_CLASS = 'PfGraduacao';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PfGraduacaoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 7;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 7;

    /** the column name for the id_pf_graduacao field */
    const ID_PF_GRADUACAO = 'pf_graduacao.id_pf_graduacao';

    /** the column name for the fk_id_tab_uf field */
    const FK_ID_TAB_UF = 'pf_graduacao.fk_id_tab_uf';

    /** the column name for the fk_id_pf_informacoes field */
    const FK_ID_PF_INFORMACOES = 'pf_graduacao.fk_id_pf_informacoes';

    /** the column name for the fk_id_tab_area field */
    const FK_ID_TAB_AREA = 'pf_graduacao.fk_id_tab_area';

    /** the column name for the fk_id_tab_nivel field */
    const FK_ID_TAB_NIVEL = 'pf_graduacao.fk_id_tab_nivel';

    /** the column name for the fk_id_tab_ies field */
    const FK_ID_TAB_IES = 'pf_graduacao.fk_id_tab_ies';

    /** the column name for the dt_conclusao field */
    const DT_CONCLUSAO = 'pf_graduacao.dt_conclusao';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of PfGraduacao objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array PfGraduacao[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PfGraduacaoPeer::$fieldNames[PfGraduacaoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdPfGraduacao', 'FkIdTabUf', 'FkIdPfInformacoes', 'FkIdTabArea', 'FkIdTabNivel', 'FkIdTabIes', 'DtConclusao', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPfGraduacao', 'fkIdTabUf', 'fkIdPfInformacoes', 'fkIdTabArea', 'fkIdTabNivel', 'fkIdTabIes', 'dtConclusao', ),
        BasePeer::TYPE_COLNAME => array (PfGraduacaoPeer::ID_PF_GRADUACAO, PfGraduacaoPeer::FK_ID_TAB_UF, PfGraduacaoPeer::FK_ID_PF_INFORMACOES, PfGraduacaoPeer::FK_ID_TAB_AREA, PfGraduacaoPeer::FK_ID_TAB_NIVEL, PfGraduacaoPeer::FK_ID_TAB_IES, PfGraduacaoPeer::DT_CONCLUSAO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PF_GRADUACAO', 'FK_ID_TAB_UF', 'FK_ID_PF_INFORMACOES', 'FK_ID_TAB_AREA', 'FK_ID_TAB_NIVEL', 'FK_ID_TAB_IES', 'DT_CONCLUSAO', ),
        BasePeer::TYPE_FIELDNAME => array ('id_pf_graduacao', 'fk_id_tab_uf', 'fk_id_pf_informacoes', 'fk_id_tab_area', 'fk_id_tab_nivel', 'fk_id_tab_ies', 'dt_conclusao', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PfGraduacaoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdPfGraduacao' => 0, 'FkIdTabUf' => 1, 'FkIdPfInformacoes' => 2, 'FkIdTabArea' => 3, 'FkIdTabNivel' => 4, 'FkIdTabIes' => 5, 'DtConclusao' => 6, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPfGraduacao' => 0, 'fkIdTabUf' => 1, 'fkIdPfInformacoes' => 2, 'fkIdTabArea' => 3, 'fkIdTabNivel' => 4, 'fkIdTabIes' => 5, 'dtConclusao' => 6, ),
        BasePeer::TYPE_COLNAME => array (PfGraduacaoPeer::ID_PF_GRADUACAO => 0, PfGraduacaoPeer::FK_ID_TAB_UF => 1, PfGraduacaoPeer::FK_ID_PF_INFORMACOES => 2, PfGraduacaoPeer::FK_ID_TAB_AREA => 3, PfGraduacaoPeer::FK_ID_TAB_NIVEL => 4, PfGraduacaoPeer::FK_ID_TAB_IES => 5, PfGraduacaoPeer::DT_CONCLUSAO => 6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PF_GRADUACAO' => 0, 'FK_ID_TAB_UF' => 1, 'FK_ID_PF_INFORMACOES' => 2, 'FK_ID_TAB_AREA' => 3, 'FK_ID_TAB_NIVEL' => 4, 'FK_ID_TAB_IES' => 5, 'DT_CONCLUSAO' => 6, ),
        BasePeer::TYPE_FIELDNAME => array ('id_pf_graduacao' => 0, 'fk_id_tab_uf' => 1, 'fk_id_pf_informacoes' => 2, 'fk_id_tab_area' => 3, 'fk_id_tab_nivel' => 4, 'fk_id_tab_ies' => 5, 'dt_conclusao' => 6, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
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
        $toNames = PfGraduacaoPeer::getFieldNames($toType);
        $key = isset(PfGraduacaoPeer::$fieldKeys[$fromType][$name]) ? PfGraduacaoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PfGraduacaoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PfGraduacaoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PfGraduacaoPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PfGraduacaoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PfGraduacaoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PfGraduacaoPeer::ID_PF_GRADUACAO);
            $criteria->addSelectColumn(PfGraduacaoPeer::FK_ID_TAB_UF);
            $criteria->addSelectColumn(PfGraduacaoPeer::FK_ID_PF_INFORMACOES);
            $criteria->addSelectColumn(PfGraduacaoPeer::FK_ID_TAB_AREA);
            $criteria->addSelectColumn(PfGraduacaoPeer::FK_ID_TAB_NIVEL);
            $criteria->addSelectColumn(PfGraduacaoPeer::FK_ID_TAB_IES);
            $criteria->addSelectColumn(PfGraduacaoPeer::DT_CONCLUSAO);
        } else {
            $criteria->addSelectColumn($alias . '.id_pf_graduacao');
            $criteria->addSelectColumn($alias . '.fk_id_tab_uf');
            $criteria->addSelectColumn($alias . '.fk_id_pf_informacoes');
            $criteria->addSelectColumn($alias . '.fk_id_tab_area');
            $criteria->addSelectColumn($alias . '.fk_id_tab_nivel');
            $criteria->addSelectColumn($alias . '.fk_id_tab_ies');
            $criteria->addSelectColumn($alias . '.dt_conclusao');
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
        $criteria->setPrimaryTableName(PfGraduacaoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PfGraduacaoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PfGraduacaoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PfGraduacaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return PfGraduacao
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PfGraduacaoPeer::doSelect($critcopy, $con);
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
        return PfGraduacaoPeer::populateObjects(PfGraduacaoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PfGraduacaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PfGraduacaoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PfGraduacaoPeer::DATABASE_NAME);

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
     * @param PfGraduacao $obj A PfGraduacao object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdPfGraduacao();
            } // if key === null
            PfGraduacaoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A PfGraduacao object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof PfGraduacao) {
                $key = (string) $value->getIdPfGraduacao();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or PfGraduacao object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PfGraduacaoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return PfGraduacao Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PfGraduacaoPeer::$instances[$key])) {
                return PfGraduacaoPeer::$instances[$key];
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
        foreach (PfGraduacaoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PfGraduacaoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to pf_graduacao
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
        $cls = PfGraduacaoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PfGraduacaoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PfGraduacaoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PfGraduacaoPeer::addInstanceToPool($obj, $key);
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
     * @return array (PfGraduacao object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PfGraduacaoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PfGraduacaoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PfGraduacaoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PfGraduacaoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PfGraduacaoPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PfGraduacaoPeer::DATABASE_NAME)->getTable(PfGraduacaoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePfGraduacaoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePfGraduacaoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PfGraduacaoTableMap());
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
        return PfGraduacaoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a PfGraduacao or Criteria object.
     *
     * @param      mixed $values Criteria or PfGraduacao object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfGraduacaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PfGraduacao object
        }

        if ($criteria->containsKey(PfGraduacaoPeer::ID_PF_GRADUACAO) && $criteria->keyContainsValue(PfGraduacaoPeer::ID_PF_GRADUACAO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PfGraduacaoPeer::ID_PF_GRADUACAO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PfGraduacaoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a PfGraduacao or Criteria object.
     *
     * @param      mixed $values Criteria or PfGraduacao object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfGraduacaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PfGraduacaoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PfGraduacaoPeer::ID_PF_GRADUACAO);
            $value = $criteria->remove(PfGraduacaoPeer::ID_PF_GRADUACAO);
            if ($value) {
                $selectCriteria->add(PfGraduacaoPeer::ID_PF_GRADUACAO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PfGraduacaoPeer::TABLE_NAME);
            }

        } else { // $values is PfGraduacao object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PfGraduacaoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the pf_graduacao table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfGraduacaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PfGraduacaoPeer::TABLE_NAME, $con, PfGraduacaoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PfGraduacaoPeer::clearInstancePool();
            PfGraduacaoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a PfGraduacao or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PfGraduacao object or primary key or array of primary keys
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
            $con = Propel::getConnection(PfGraduacaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PfGraduacaoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof PfGraduacao) { // it's a model object
            // invalidate the cache for this single object
            PfGraduacaoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PfGraduacaoPeer::DATABASE_NAME);
            $criteria->add(PfGraduacaoPeer::ID_PF_GRADUACAO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PfGraduacaoPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PfGraduacaoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PfGraduacaoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given PfGraduacao object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param PfGraduacao $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PfGraduacaoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PfGraduacaoPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PfGraduacaoPeer::DATABASE_NAME, PfGraduacaoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return PfGraduacao
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PfGraduacaoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PfGraduacaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PfGraduacaoPeer::DATABASE_NAME);
        $criteria->add(PfGraduacaoPeer::ID_PF_GRADUACAO, $pk);

        $v = PfGraduacaoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return PfGraduacao[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfGraduacaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PfGraduacaoPeer::DATABASE_NAME);
            $criteria->add(PfGraduacaoPeer::ID_PF_GRADUACAO, $pks, Criteria::IN);
            $objs = PfGraduacaoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePfGraduacaoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePfGraduacaoPeer::buildTableMap();

