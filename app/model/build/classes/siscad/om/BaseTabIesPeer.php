<?php


/**
 * Base static class for performing query and update operations on the 'tab_ies' table.
 *
 *
 *
 * @package propel.generator.siscad.om
 */
abstract class BaseTabIesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'siscad';

    /** the table name for this class */
    const TABLE_NAME = 'tab_ies';

    /** the related Propel class for this table */
    const OM_CLASS = 'TabIes';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TabIesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the id_tab_ies field */
    const ID_TAB_IES = 'tab_ies.id_tab_ies';

    /** the column name for the fk_id_tab_ies_vinculacao field */
    const FK_ID_TAB_IES_VINCULACAO = 'tab_ies.fk_id_tab_ies_vinculacao';

    /** the column name for the fk_id_tab_uf field */
    const FK_ID_TAB_UF = 'tab_ies.fk_id_tab_uf';

    /** the column name for the fk_id_tab_ies_situacao field */
    const FK_ID_TAB_IES_SITUACAO = 'tab_ies.fk_id_tab_ies_situacao';

    /** the column name for the nome field */
    const NOME = 'tab_ies.nome';

    /** the column name for the sigla field */
    const SIGLA = 'tab_ies.sigla';

    /** the column name for the endereco field */
    const ENDERECO = 'tab_ies.endereco';

    /** the column name for the bairro field */
    const BAIRRO = 'tab_ies.bairro';

    /** the column name for the cidade field */
    const CIDADE = 'tab_ies.cidade';

    /** the column name for the cep field */
    const CEP = 'tab_ies.cep';

    /** the column name for the site field */
    const SITE = 'tab_ies.site';

    /** the column name for the email field */
    const EMAIL = 'tab_ies.email';

    /** the column name for the condicao field */
    const CONDICAO = 'tab_ies.condicao';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of TabIes objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array TabIes[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TabIesPeer::$fieldNames[TabIesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdTabIes', 'FkIdTabIesVinculacao', 'FkIdTabUf', 'FkIdTabIesSituacao', 'Nome', 'Sigla', 'Endereco', 'Bairro', 'Cidade', 'Cep', 'Site', 'Email', 'Condicao', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTabIes', 'fkIdTabIesVinculacao', 'fkIdTabUf', 'fkIdTabIesSituacao', 'nome', 'sigla', 'endereco', 'bairro', 'cidade', 'cep', 'site', 'email', 'condicao', ),
        BasePeer::TYPE_COLNAME => array (TabIesPeer::ID_TAB_IES, TabIesPeer::FK_ID_TAB_IES_VINCULACAO, TabIesPeer::FK_ID_TAB_UF, TabIesPeer::FK_ID_TAB_IES_SITUACAO, TabIesPeer::NOME, TabIesPeer::SIGLA, TabIesPeer::ENDERECO, TabIesPeer::BAIRRO, TabIesPeer::CIDADE, TabIesPeer::CEP, TabIesPeer::SITE, TabIesPeer::EMAIL, TabIesPeer::CONDICAO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TAB_IES', 'FK_ID_TAB_IES_VINCULACAO', 'FK_ID_TAB_UF', 'FK_ID_TAB_IES_SITUACAO', 'NOME', 'SIGLA', 'ENDERECO', 'BAIRRO', 'CIDADE', 'CEP', 'SITE', 'EMAIL', 'CONDICAO', ),
        BasePeer::TYPE_FIELDNAME => array ('id_tab_ies', 'fk_id_tab_ies_vinculacao', 'fk_id_tab_uf', 'fk_id_tab_ies_situacao', 'nome', 'sigla', 'endereco', 'bairro', 'cidade', 'cep', 'site', 'email', 'condicao', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TabIesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdTabIes' => 0, 'FkIdTabIesVinculacao' => 1, 'FkIdTabUf' => 2, 'FkIdTabIesSituacao' => 3, 'Nome' => 4, 'Sigla' => 5, 'Endereco' => 6, 'Bairro' => 7, 'Cidade' => 8, 'Cep' => 9, 'Site' => 10, 'Email' => 11, 'Condicao' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTabIes' => 0, 'fkIdTabIesVinculacao' => 1, 'fkIdTabUf' => 2, 'fkIdTabIesSituacao' => 3, 'nome' => 4, 'sigla' => 5, 'endereco' => 6, 'bairro' => 7, 'cidade' => 8, 'cep' => 9, 'site' => 10, 'email' => 11, 'condicao' => 12, ),
        BasePeer::TYPE_COLNAME => array (TabIesPeer::ID_TAB_IES => 0, TabIesPeer::FK_ID_TAB_IES_VINCULACAO => 1, TabIesPeer::FK_ID_TAB_UF => 2, TabIesPeer::FK_ID_TAB_IES_SITUACAO => 3, TabIesPeer::NOME => 4, TabIesPeer::SIGLA => 5, TabIesPeer::ENDERECO => 6, TabIesPeer::BAIRRO => 7, TabIesPeer::CIDADE => 8, TabIesPeer::CEP => 9, TabIesPeer::SITE => 10, TabIesPeer::EMAIL => 11, TabIesPeer::CONDICAO => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TAB_IES' => 0, 'FK_ID_TAB_IES_VINCULACAO' => 1, 'FK_ID_TAB_UF' => 2, 'FK_ID_TAB_IES_SITUACAO' => 3, 'NOME' => 4, 'SIGLA' => 5, 'ENDERECO' => 6, 'BAIRRO' => 7, 'CIDADE' => 8, 'CEP' => 9, 'SITE' => 10, 'EMAIL' => 11, 'CONDICAO' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('id_tab_ies' => 0, 'fk_id_tab_ies_vinculacao' => 1, 'fk_id_tab_uf' => 2, 'fk_id_tab_ies_situacao' => 3, 'nome' => 4, 'sigla' => 5, 'endereco' => 6, 'bairro' => 7, 'cidade' => 8, 'cep' => 9, 'site' => 10, 'email' => 11, 'condicao' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $toNames = TabIesPeer::getFieldNames($toType);
        $key = isset(TabIesPeer::$fieldKeys[$fromType][$name]) ? TabIesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TabIesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TabIesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TabIesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. TabIesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TabIesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TabIesPeer::ID_TAB_IES);
            $criteria->addSelectColumn(TabIesPeer::FK_ID_TAB_IES_VINCULACAO);
            $criteria->addSelectColumn(TabIesPeer::FK_ID_TAB_UF);
            $criteria->addSelectColumn(TabIesPeer::FK_ID_TAB_IES_SITUACAO);
            $criteria->addSelectColumn(TabIesPeer::NOME);
            $criteria->addSelectColumn(TabIesPeer::SIGLA);
            $criteria->addSelectColumn(TabIesPeer::ENDERECO);
            $criteria->addSelectColumn(TabIesPeer::BAIRRO);
            $criteria->addSelectColumn(TabIesPeer::CIDADE);
            $criteria->addSelectColumn(TabIesPeer::CEP);
            $criteria->addSelectColumn(TabIesPeer::SITE);
            $criteria->addSelectColumn(TabIesPeer::EMAIL);
            $criteria->addSelectColumn(TabIesPeer::CONDICAO);
        } else {
            $criteria->addSelectColumn($alias . '.id_tab_ies');
            $criteria->addSelectColumn($alias . '.fk_id_tab_ies_vinculacao');
            $criteria->addSelectColumn($alias . '.fk_id_tab_uf');
            $criteria->addSelectColumn($alias . '.fk_id_tab_ies_situacao');
            $criteria->addSelectColumn($alias . '.nome');
            $criteria->addSelectColumn($alias . '.sigla');
            $criteria->addSelectColumn($alias . '.endereco');
            $criteria->addSelectColumn($alias . '.bairro');
            $criteria->addSelectColumn($alias . '.cidade');
            $criteria->addSelectColumn($alias . '.cep');
            $criteria->addSelectColumn($alias . '.site');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.condicao');
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
        $criteria->setPrimaryTableName(TabIesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TabIesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TabIesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TabIesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return TabIes
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TabIesPeer::doSelect($critcopy, $con);
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
        return TabIesPeer::populateObjects(TabIesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TabIesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TabIesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TabIesPeer::DATABASE_NAME);

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
     * @param TabIes $obj A TabIes object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdTabIes();
            } // if key === null
            TabIesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A TabIes object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof TabIes) {
                $key = (string) $value->getIdTabIes();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or TabIes object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TabIesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return TabIes Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TabIesPeer::$instances[$key])) {
                return TabIesPeer::$instances[$key];
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
        foreach (TabIesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TabIesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to tab_ies
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
        $cls = TabIesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TabIesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TabIesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TabIesPeer::addInstanceToPool($obj, $key);
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
     * @return array (TabIes object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TabIesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TabIesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TabIesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TabIesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TabIesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(TabIesPeer::DATABASE_NAME)->getTable(TabIesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTabIesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTabIesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TabIesTableMap());
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
        return TabIesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a TabIes or Criteria object.
     *
     * @param      mixed $values Criteria or TabIes object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TabIesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from TabIes object
        }

        if ($criteria->containsKey(TabIesPeer::ID_TAB_IES) && $criteria->keyContainsValue(TabIesPeer::ID_TAB_IES) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TabIesPeer::ID_TAB_IES.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TabIesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a TabIes or Criteria object.
     *
     * @param      mixed $values Criteria or TabIes object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TabIesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TabIesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TabIesPeer::ID_TAB_IES);
            $value = $criteria->remove(TabIesPeer::ID_TAB_IES);
            if ($value) {
                $selectCriteria->add(TabIesPeer::ID_TAB_IES, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TabIesPeer::TABLE_NAME);
            }

        } else { // $values is TabIes object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TabIesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the tab_ies table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TabIesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TabIesPeer::TABLE_NAME, $con, TabIesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TabIesPeer::clearInstancePool();
            TabIesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a TabIes or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or TabIes object or primary key or array of primary keys
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
            $con = Propel::getConnection(TabIesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TabIesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof TabIes) { // it's a model object
            // invalidate the cache for this single object
            TabIesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TabIesPeer::DATABASE_NAME);
            $criteria->add(TabIesPeer::ID_TAB_IES, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TabIesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TabIesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TabIesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given TabIes object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param TabIes $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TabIesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TabIesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TabIesPeer::DATABASE_NAME, TabIesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return TabIes
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TabIesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TabIesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TabIesPeer::DATABASE_NAME);
        $criteria->add(TabIesPeer::ID_TAB_IES, $pk);

        $v = TabIesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return TabIes[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TabIesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TabIesPeer::DATABASE_NAME);
            $criteria->add(TabIesPeer::ID_TAB_IES, $pks, Criteria::IN);
            $objs = TabIesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTabIesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTabIesPeer::buildTableMap();

