<?php


/**
 * Base class that represents a row from the 'pf_graduacao' table.
 *
 *
 *
 * @package    propel.generator.siscad.om
 */
abstract class BasePfGraduacao extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PfGraduacaoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PfGraduacaoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_pf_graduacao field.
     * @var        int
     */
    protected $id_pf_graduacao;

    /**
     * The value for the fk_id_tab_uf field.
     * @var        int
     */
    protected $fk_id_tab_uf;

    /**
     * The value for the fk_id_pf_informacoes field.
     * @var        int
     */
    protected $fk_id_pf_informacoes;

    /**
     * The value for the fk_id_tab_area field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $fk_id_tab_area;

    /**
     * The value for the fk_id_tab_nivel field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $fk_id_tab_nivel;

    /**
     * The value for the fk_id_tab_ies field.
     * @var        int
     */
    protected $fk_id_tab_ies;

    /**
     * The value for the dt_conclusao field.
     * @var        string
     */
    protected $dt_conclusao;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->fk_id_tab_area = 0;
        $this->fk_id_tab_nivel = 0;
    }

    /**
     * Initializes internal state of BasePfGraduacao object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_pf_graduacao] column value.
     *
     * @return int
     */
    public function getIdPfGraduacao()
    {

        return $this->id_pf_graduacao;
    }

    /**
     * Get the [fk_id_tab_uf] column value.
     *
     * @return int
     */
    public function getFkIdTabUf()
    {

        return $this->fk_id_tab_uf;
    }

    /**
     * Get the [fk_id_pf_informacoes] column value.
     *
     * @return int
     */
    public function getFkIdPfInformacoes()
    {

        return $this->fk_id_pf_informacoes;
    }

    /**
     * Get the [fk_id_tab_area] column value.
     *
     * @return int
     */
    public function getFkIdTabArea()
    {

        return $this->fk_id_tab_area;
    }

    /**
     * Get the [fk_id_tab_nivel] column value.
     *
     * @return int
     */
    public function getFkIdTabNivel()
    {

        return $this->fk_id_tab_nivel;
    }

    /**
     * Get the [fk_id_tab_ies] column value.
     *
     * @return int
     */
    public function getFkIdTabIes()
    {

        return $this->fk_id_tab_ies;
    }

    /**
     * Get the [optionally formatted] temporal [dt_conclusao] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDtConclusao($format = '%x')
    {
        if ($this->dt_conclusao === null) {
            return null;
        }

        if ($this->dt_conclusao === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dt_conclusao);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_conclusao, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [id_pf_graduacao] column.
     *
     * @param  int $v new value
     * @return PfGraduacao The current object (for fluent API support)
     */
    public function setIdPfGraduacao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_pf_graduacao !== $v) {
            $this->id_pf_graduacao = $v;
            $this->modifiedColumns[] = PfGraduacaoPeer::ID_PF_GRADUACAO;
        }


        return $this;
    } // setIdPfGraduacao()

    /**
     * Set the value of [fk_id_tab_uf] column.
     *
     * @param  int $v new value
     * @return PfGraduacao The current object (for fluent API support)
     */
    public function setFkIdTabUf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_uf !== $v) {
            $this->fk_id_tab_uf = $v;
            $this->modifiedColumns[] = PfGraduacaoPeer::FK_ID_TAB_UF;
        }


        return $this;
    } // setFkIdTabUf()

    /**
     * Set the value of [fk_id_pf_informacoes] column.
     *
     * @param  int $v new value
     * @return PfGraduacao The current object (for fluent API support)
     */
    public function setFkIdPfInformacoes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_pf_informacoes !== $v) {
            $this->fk_id_pf_informacoes = $v;
            $this->modifiedColumns[] = PfGraduacaoPeer::FK_ID_PF_INFORMACOES;
        }


        return $this;
    } // setFkIdPfInformacoes()

    /**
     * Set the value of [fk_id_tab_area] column.
     *
     * @param  int $v new value
     * @return PfGraduacao The current object (for fluent API support)
     */
    public function setFkIdTabArea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_area !== $v) {
            $this->fk_id_tab_area = $v;
            $this->modifiedColumns[] = PfGraduacaoPeer::FK_ID_TAB_AREA;
        }


        return $this;
    } // setFkIdTabArea()

    /**
     * Set the value of [fk_id_tab_nivel] column.
     *
     * @param  int $v new value
     * @return PfGraduacao The current object (for fluent API support)
     */
    public function setFkIdTabNivel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_nivel !== $v) {
            $this->fk_id_tab_nivel = $v;
            $this->modifiedColumns[] = PfGraduacaoPeer::FK_ID_TAB_NIVEL;
        }


        return $this;
    } // setFkIdTabNivel()

    /**
     * Set the value of [fk_id_tab_ies] column.
     *
     * @param  int $v new value
     * @return PfGraduacao The current object (for fluent API support)
     */
    public function setFkIdTabIes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_ies !== $v) {
            $this->fk_id_tab_ies = $v;
            $this->modifiedColumns[] = PfGraduacaoPeer::FK_ID_TAB_IES;
        }


        return $this;
    } // setFkIdTabIes()

    /**
     * Sets the value of [dt_conclusao] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfGraduacao The current object (for fluent API support)
     */
    public function setDtConclusao($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dt_conclusao !== null || $dt !== null) {
            $currentDateAsString = ($this->dt_conclusao !== null && $tmpDt = new DateTime($this->dt_conclusao)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dt_conclusao = $newDateAsString;
                $this->modifiedColumns[] = PfGraduacaoPeer::DT_CONCLUSAO;
            }
        } // if either are not null


        return $this;
    } // setDtConclusao()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->fk_id_tab_area !== 0) {
                return false;
            }

            if ($this->fk_id_tab_nivel !== 0) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_pf_graduacao = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fk_id_tab_uf = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->fk_id_pf_informacoes = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->fk_id_tab_area = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->fk_id_tab_nivel = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->fk_id_tab_ies = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->dt_conclusao = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = PfGraduacaoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PfGraduacao object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PfGraduacaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PfGraduacaoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PfGraduacaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PfGraduacaoQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PfGraduacaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                PfGraduacaoPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = PfGraduacaoPeer::ID_PF_GRADUACAO;
        if (null !== $this->id_pf_graduacao) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PfGraduacaoPeer::ID_PF_GRADUACAO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PfGraduacaoPeer::ID_PF_GRADUACAO)) {
            $modifiedColumns[':p' . $index++]  = '`id_pf_graduacao`';
        }
        if ($this->isColumnModified(PfGraduacaoPeer::FK_ID_TAB_UF)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_uf`';
        }
        if ($this->isColumnModified(PfGraduacaoPeer::FK_ID_PF_INFORMACOES)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_pf_informacoes`';
        }
        if ($this->isColumnModified(PfGraduacaoPeer::FK_ID_TAB_AREA)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_area`';
        }
        if ($this->isColumnModified(PfGraduacaoPeer::FK_ID_TAB_NIVEL)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_nivel`';
        }
        if ($this->isColumnModified(PfGraduacaoPeer::FK_ID_TAB_IES)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_ies`';
        }
        if ($this->isColumnModified(PfGraduacaoPeer::DT_CONCLUSAO)) {
            $modifiedColumns[':p' . $index++]  = '`dt_conclusao`';
        }

        $sql = sprintf(
            'INSERT INTO `pf_graduacao` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_pf_graduacao`':
                        $stmt->bindValue($identifier, $this->id_pf_graduacao, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_uf`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_uf, PDO::PARAM_INT);
                        break;
                    case '`fk_id_pf_informacoes`':
                        $stmt->bindValue($identifier, $this->fk_id_pf_informacoes, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_area`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_area, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_nivel`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_nivel, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_ies`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_ies, PDO::PARAM_INT);
                        break;
                    case '`dt_conclusao`':
                        $stmt->bindValue($identifier, $this->dt_conclusao, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdPfGraduacao($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = PfGraduacaoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PfGraduacaoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdPfGraduacao();
                break;
            case 1:
                return $this->getFkIdTabUf();
                break;
            case 2:
                return $this->getFkIdPfInformacoes();
                break;
            case 3:
                return $this->getFkIdTabArea();
                break;
            case 4:
                return $this->getFkIdTabNivel();
                break;
            case 5:
                return $this->getFkIdTabIes();
                break;
            case 6:
                return $this->getDtConclusao();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['PfGraduacao'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PfGraduacao'][$this->getPrimaryKey()] = true;
        $keys = PfGraduacaoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPfGraduacao(),
            $keys[1] => $this->getFkIdTabUf(),
            $keys[2] => $this->getFkIdPfInformacoes(),
            $keys[3] => $this->getFkIdTabArea(),
            $keys[4] => $this->getFkIdTabNivel(),
            $keys[5] => $this->getFkIdTabIes(),
            $keys[6] => $this->getDtConclusao(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PfGraduacaoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdPfGraduacao($value);
                break;
            case 1:
                $this->setFkIdTabUf($value);
                break;
            case 2:
                $this->setFkIdPfInformacoes($value);
                break;
            case 3:
                $this->setFkIdTabArea($value);
                break;
            case 4:
                $this->setFkIdTabNivel($value);
                break;
            case 5:
                $this->setFkIdTabIes($value);
                break;
            case 6:
                $this->setDtConclusao($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = PfGraduacaoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdPfGraduacao($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFkIdTabUf($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFkIdPfInformacoes($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFkIdTabArea($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFkIdTabNivel($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFkIdTabIes($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDtConclusao($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PfGraduacaoPeer::DATABASE_NAME);

        if ($this->isColumnModified(PfGraduacaoPeer::ID_PF_GRADUACAO)) $criteria->add(PfGraduacaoPeer::ID_PF_GRADUACAO, $this->id_pf_graduacao);
        if ($this->isColumnModified(PfGraduacaoPeer::FK_ID_TAB_UF)) $criteria->add(PfGraduacaoPeer::FK_ID_TAB_UF, $this->fk_id_tab_uf);
        if ($this->isColumnModified(PfGraduacaoPeer::FK_ID_PF_INFORMACOES)) $criteria->add(PfGraduacaoPeer::FK_ID_PF_INFORMACOES, $this->fk_id_pf_informacoes);
        if ($this->isColumnModified(PfGraduacaoPeer::FK_ID_TAB_AREA)) $criteria->add(PfGraduacaoPeer::FK_ID_TAB_AREA, $this->fk_id_tab_area);
        if ($this->isColumnModified(PfGraduacaoPeer::FK_ID_TAB_NIVEL)) $criteria->add(PfGraduacaoPeer::FK_ID_TAB_NIVEL, $this->fk_id_tab_nivel);
        if ($this->isColumnModified(PfGraduacaoPeer::FK_ID_TAB_IES)) $criteria->add(PfGraduacaoPeer::FK_ID_TAB_IES, $this->fk_id_tab_ies);
        if ($this->isColumnModified(PfGraduacaoPeer::DT_CONCLUSAO)) $criteria->add(PfGraduacaoPeer::DT_CONCLUSAO, $this->dt_conclusao);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(PfGraduacaoPeer::DATABASE_NAME);
        $criteria->add(PfGraduacaoPeer::ID_PF_GRADUACAO, $this->id_pf_graduacao);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdPfGraduacao();
    }

    /**
     * Generic method to set the primary key (id_pf_graduacao column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPfGraduacao($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdPfGraduacao();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of PfGraduacao (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkIdTabUf($this->getFkIdTabUf());
        $copyObj->setFkIdPfInformacoes($this->getFkIdPfInformacoes());
        $copyObj->setFkIdTabArea($this->getFkIdTabArea());
        $copyObj->setFkIdTabNivel($this->getFkIdTabNivel());
        $copyObj->setFkIdTabIes($this->getFkIdTabIes());
        $copyObj->setDtConclusao($this->getDtConclusao());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPfGraduacao(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return PfGraduacao Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return PfGraduacaoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PfGraduacaoPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_pf_graduacao = null;
        $this->fk_id_tab_uf = null;
        $this->fk_id_pf_informacoes = null;
        $this->fk_id_tab_area = null;
        $this->fk_id_tab_nivel = null;
        $this->fk_id_tab_ies = null;
        $this->dt_conclusao = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PfGraduacaoPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
