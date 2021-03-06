<?php

namespace Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use Model\PfProfissao;
use Model\PfProfissaoPeer;
use Model\map\PfProfissaoTableMap;

/**
 * Base static class for performing query and update operations on the 'pf_profissao' table.
 *
 *
 *
 * @package propel.generator.siscad.om
 */
abstract class BasePfProfissaoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'siscad';

    /** the table name for this class */
    const TABLE_NAME = 'pf_profissao';

    /** the related Propel class for this table */
    const OM_CLASS = 'Model\\PfProfissao';

    /** the related TableMap class for this table */
    const TM_CLASS = 'Model\\map\\PfProfissaoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the id_pf_profissao field */
    const ID_PF_PROFISSAO = 'pf_profissao.id_pf_profissao';

    /** the column name for the fk_id_pf_informacoes field */
    const FK_ID_PF_INFORMACOES = 'pf_profissao.fk_id_pf_informacoes';

    /** the column name for the empresa field */
    const EMPRESA = 'pf_profissao.empresa';

    /** the column name for the cidade field */
    const CIDADE = 'pf_profissao.cidade';

    /** the column name for the dt_admissao field */
    const DT_ADMISSAO = 'pf_profissao.dt_admissao';

    /** the column name for the dt_demissao field */
    const DT_DEMISSAO = 'pf_profissao.dt_demissao';

    /** the column name for the carga_horaria field */
    const CARGA_HORARIA = 'pf_profissao.carga_horaria';

    /** the column name for the fk_id_tab_ramo1 field */
    const FK_ID_TAB_RAMO1 = 'pf_profissao.fk_id_tab_ramo1';

    /** the column name for the fk_id_tab_ramo2 field */
    const FK_ID_TAB_RAMO2 = 'pf_profissao.fk_id_tab_ramo2';

    /** the column name for the fk_id_tab_ramo3 field */
    const FK_ID_TAB_RAMO3 = 'pf_profissao.fk_id_tab_ramo3';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of PfProfissao objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array PfProfissao[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PfProfissaoPeer::$fieldNames[PfProfissaoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdPfProfissao', 'FkIdPfInformacoes', 'Empresa', 'Cidade', 'DtAdmissao', 'DtDemissao', 'CargaHoraria', 'FkIdTabRamo1', 'FkIdTabRamo2', 'FkIdTabRamo3', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPfProfissao', 'fkIdPfInformacoes', 'empresa', 'cidade', 'dtAdmissao', 'dtDemissao', 'cargaHoraria', 'fkIdTabRamo1', 'fkIdTabRamo2', 'fkIdTabRamo3', ),
        BasePeer::TYPE_COLNAME => array (PfProfissaoPeer::ID_PF_PROFISSAO, PfProfissaoPeer::FK_ID_PF_INFORMACOES, PfProfissaoPeer::EMPRESA, PfProfissaoPeer::CIDADE, PfProfissaoPeer::DT_ADMISSAO, PfProfissaoPeer::DT_DEMISSAO, PfProfissaoPeer::CARGA_HORARIA, PfProfissaoPeer::FK_ID_TAB_RAMO1, PfProfissaoPeer::FK_ID_TAB_RAMO2, PfProfissaoPeer::FK_ID_TAB_RAMO3, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PF_PROFISSAO', 'FK_ID_PF_INFORMACOES', 'EMPRESA', 'CIDADE', 'DT_ADMISSAO', 'DT_DEMISSAO', 'CARGA_HORARIA', 'FK_ID_TAB_RAMO1', 'FK_ID_TAB_RAMO2', 'FK_ID_TAB_RAMO3', ),
        BasePeer::TYPE_FIELDNAME => array ('id_pf_profissao', 'fk_id_pf_informacoes', 'empresa', 'cidade', 'dt_admissao', 'dt_demissao', 'carga_horaria', 'fk_id_tab_ramo1', 'fk_id_tab_ramo2', 'fk_id_tab_ramo3', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PfProfissaoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdPfProfissao' => 0, 'FkIdPfInformacoes' => 1, 'Empresa' => 2, 'Cidade' => 3, 'DtAdmissao' => 4, 'DtDemissao' => 5, 'CargaHoraria' => 6, 'FkIdTabRamo1' => 7, 'FkIdTabRamo2' => 8, 'FkIdTabRamo3' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPfProfissao' => 0, 'fkIdPfInformacoes' => 1, 'empresa' => 2, 'cidade' => 3, 'dtAdmissao' => 4, 'dtDemissao' => 5, 'cargaHoraria' => 6, 'fkIdTabRamo1' => 7, 'fkIdTabRamo2' => 8, 'fkIdTabRamo3' => 9, ),
        BasePeer::TYPE_COLNAME => array (PfProfissaoPeer::ID_PF_PROFISSAO => 0, PfProfissaoPeer::FK_ID_PF_INFORMACOES => 1, PfProfissaoPeer::EMPRESA => 2, PfProfissaoPeer::CIDADE => 3, PfProfissaoPeer::DT_ADMISSAO => 4, PfProfissaoPeer::DT_DEMISSAO => 5, PfProfissaoPeer::CARGA_HORARIA => 6, PfProfissaoPeer::FK_ID_TAB_RAMO1 => 7, PfProfissaoPeer::FK_ID_TAB_RAMO2 => 8, PfProfissaoPeer::FK_ID_TAB_RAMO3 => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PF_PROFISSAO' => 0, 'FK_ID_PF_INFORMACOES' => 1, 'EMPRESA' => 2, 'CIDADE' => 3, 'DT_ADMISSAO' => 4, 'DT_DEMISSAO' => 5, 'CARGA_HORARIA' => 6, 'FK_ID_TAB_RAMO1' => 7, 'FK_ID_TAB_RAMO2' => 8, 'FK_ID_TAB_RAMO3' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('id_pf_profissao' => 0, 'fk_id_pf_informacoes' => 1, 'empresa' => 2, 'cidade' => 3, 'dt_admissao' => 4, 'dt_demissao' => 5, 'carga_horaria' => 6, 'fk_id_tab_ramo1' => 7, 'fk_id_tab_ramo2' => 8, 'fk_id_tab_ramo3' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $toNames = PfProfissaoPeer::getFieldNames($toType);
        $key = isset(PfProfissaoPeer::$fieldKeys[$fromType][$name]) ? PfProfissaoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PfProfissaoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PfProfissaoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PfProfissaoPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PfProfissaoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PfProfissaoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PfProfissaoPeer::ID_PF_PROFISSAO);
            $criteria->addSelectColumn(PfProfissaoPeer::FK_ID_PF_INFORMACOES);
            $criteria->addSelectColumn(PfProfissaoPeer::EMPRESA);
            $criteria->addSelectColumn(PfProfissaoPeer::CIDADE);
            $criteria->addSelectColumn(PfProfissaoPeer::DT_ADMISSAO);
            $criteria->addSelectColumn(PfProfissaoPeer::DT_DEMISSAO);
            $criteria->addSelectColumn(PfProfissaoPeer::CARGA_HORARIA);
            $criteria->addSelectColumn(PfProfissaoPeer::FK_ID_TAB_RAMO1);
            $criteria->addSelectColumn(PfProfissaoPeer::FK_ID_TAB_RAMO2);
            $criteria->addSelectColumn(PfProfissaoPeer::FK_ID_TAB_RAMO3);
        } else {
            $criteria->addSelectColumn($alias . '.id_pf_profissao');
            $criteria->addSelectColumn($alias . '.fk_id_pf_informacoes');
            $criteria->addSelectColumn($alias . '.empresa');
            $criteria->addSelectColumn($alias . '.cidade');
            $criteria->addSelectColumn($alias . '.dt_admissao');
            $criteria->addSelectColumn($alias . '.dt_demissao');
            $criteria->addSelectColumn($alias . '.carga_horaria');
            $criteria->addSelectColumn($alias . '.fk_id_tab_ramo1');
            $criteria->addSelectColumn($alias . '.fk_id_tab_ramo2');
            $criteria->addSelectColumn($alias . '.fk_id_tab_ramo3');
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
        $criteria->setPrimaryTableName(PfProfissaoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PfProfissaoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PfProfissaoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PfProfissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return PfProfissao
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PfProfissaoPeer::doSelect($critcopy, $con);
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
        return PfProfissaoPeer::populateObjects(PfProfissaoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PfProfissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PfProfissaoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PfProfissaoPeer::DATABASE_NAME);

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
     * @param PfProfissao $obj A PfProfissao object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdPfProfissao();
            } // if key === null
            PfProfissaoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A PfProfissao object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof PfProfissao) {
                $key = (string) $value->getIdPfProfissao();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or PfProfissao object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PfProfissaoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return PfProfissao Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PfProfissaoPeer::$instances[$key])) {
                return PfProfissaoPeer::$instances[$key];
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
        foreach (PfProfissaoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PfProfissaoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to pf_profissao
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
        $cls = PfProfissaoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PfProfissaoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PfProfissaoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PfProfissaoPeer::addInstanceToPool($obj, $key);
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
     * @return array (PfProfissao object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PfProfissaoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PfProfissaoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PfProfissaoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PfProfissaoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PfProfissaoPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PfProfissaoPeer::DATABASE_NAME)->getTable(PfProfissaoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePfProfissaoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePfProfissaoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \Model\map\PfProfissaoTableMap());
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
        return PfProfissaoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a PfProfissao or Criteria object.
     *
     * @param      mixed $values Criteria or PfProfissao object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfProfissaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PfProfissao object
        }

        if ($criteria->containsKey(PfProfissaoPeer::ID_PF_PROFISSAO) && $criteria->keyContainsValue(PfProfissaoPeer::ID_PF_PROFISSAO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PfProfissaoPeer::ID_PF_PROFISSAO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PfProfissaoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a PfProfissao or Criteria object.
     *
     * @param      mixed $values Criteria or PfProfissao object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfProfissaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PfProfissaoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PfProfissaoPeer::ID_PF_PROFISSAO);
            $value = $criteria->remove(PfProfissaoPeer::ID_PF_PROFISSAO);
            if ($value) {
                $selectCriteria->add(PfProfissaoPeer::ID_PF_PROFISSAO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PfProfissaoPeer::TABLE_NAME);
            }

        } else { // $values is PfProfissao object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PfProfissaoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the pf_profissao table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfProfissaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PfProfissaoPeer::TABLE_NAME, $con, PfProfissaoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PfProfissaoPeer::clearInstancePool();
            PfProfissaoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a PfProfissao or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PfProfissao object or primary key or array of primary keys
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
            $con = Propel::getConnection(PfProfissaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PfProfissaoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof PfProfissao) { // it's a model object
            // invalidate the cache for this single object
            PfProfissaoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PfProfissaoPeer::DATABASE_NAME);
            $criteria->add(PfProfissaoPeer::ID_PF_PROFISSAO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PfProfissaoPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PfProfissaoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PfProfissaoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given PfProfissao object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param PfProfissao $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PfProfissaoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PfProfissaoPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(PfProfissaoPeer::EMPRESA))
            $columns[PfProfissaoPeer::EMPRESA] = $obj->getEmpresa();

        if ($obj->isNew() || $obj->isColumnModified(PfProfissaoPeer::CIDADE))
            $columns[PfProfissaoPeer::CIDADE] = $obj->getCidade();

        if ($obj->isNew() || $obj->isColumnModified(PfProfissaoPeer::DT_ADMISSAO))
            $columns[PfProfissaoPeer::DT_ADMISSAO] = $obj->getDtAdmissao();

        if ($obj->isNew() || $obj->isColumnModified(PfProfissaoPeer::DT_DEMISSAO))
            $columns[PfProfissaoPeer::DT_DEMISSAO] = $obj->getDtDemissao();

        if ($obj->isNew() || $obj->isColumnModified(PfProfissaoPeer::CARGA_HORARIA))
            $columns[PfProfissaoPeer::CARGA_HORARIA] = $obj->getCargaHoraria();

        }

        return BasePeer::doValidate(PfProfissaoPeer::DATABASE_NAME, PfProfissaoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return PfProfissao
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PfProfissaoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PfProfissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PfProfissaoPeer::DATABASE_NAME);
        $criteria->add(PfProfissaoPeer::ID_PF_PROFISSAO, $pk);

        $v = PfProfissaoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return PfProfissao[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PfProfissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PfProfissaoPeer::DATABASE_NAME);
            $criteria->add(PfProfissaoPeer::ID_PF_PROFISSAO, $pks, Criteria::IN);
            $objs = PfProfissaoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePfProfissaoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePfProfissaoPeer::buildTableMap();

