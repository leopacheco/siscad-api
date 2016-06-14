<?php


/**
 * Base class that represents a row from the 'pf_profissao' table.
 *
 *
 *
 * @package    propel.generator.siscad-api.om
 */
abstract class BasePfProfissao extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PfProfissaoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PfProfissaoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_pf_profissao field.
     * @var        int
     */
    protected $id_pf_profissao;

    /**
     * The value for the fk_id_pf_informacoes field.
     * @var        int
     */
    protected $fk_id_pf_informacoes;

    /**
     * The value for the empresa field.
     * @var        string
     */
    protected $empresa;

    /**
     * The value for the cidade field.
     * @var        string
     */
    protected $cidade;

    /**
     * The value for the dt_admissao field.
     * @var        string
     */
    protected $dt_admissao;

    /**
     * The value for the dt_demissao field.
     * @var        string
     */
    protected $dt_demissao;

    /**
     * The value for the carga_horaria field.
     * @var        int
     */
    protected $carga_horaria;

    /**
     * The value for the fk_id_tab_ramo1 field.
     * Note: this column has a database default value of: 3
     * @var        int
     */
    protected $fk_id_tab_ramo1;

    /**
     * The value for the fk_id_tab_ramo2 field.
     * Note: this column has a database default value of: 16
     * @var        int
     */
    protected $fk_id_tab_ramo2;

    /**
     * The value for the fk_id_tab_ramo3 field.
     * Note: this column has a database default value of: 219
     * @var        int
     */
    protected $fk_id_tab_ramo3;

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
        $this->fk_id_tab_ramo1 = 3;
        $this->fk_id_tab_ramo2 = 16;
        $this->fk_id_tab_ramo3 = 219;
    }

    /**
     * Initializes internal state of BasePfProfissao object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_pf_profissao] column value.
     *
     * @return int
     */
    public function getIdPfProfissao()
    {

        return $this->id_pf_profissao;
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
     * Get the [empresa] column value.
     *
     * @return string
     */
    public function getEmpresa()
    {

        return $this->empresa;
    }

    /**
     * Get the [cidade] column value.
     *
     * @return string
     */
    public function getCidade()
    {

        return $this->cidade;
    }

    /**
     * Get the [optionally formatted] temporal [dt_admissao] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDtAdmissao($format = '%x')
    {
        if ($this->dt_admissao === null) {
            return null;
        }

        if ($this->dt_admissao === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dt_admissao);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_admissao, true), $x);
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
     * Get the [optionally formatted] temporal [dt_demissao] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDtDemissao($format = '%x')
    {
        if ($this->dt_demissao === null) {
            return null;
        }

        if ($this->dt_demissao === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dt_demissao);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_demissao, true), $x);
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
     * Get the [carga_horaria] column value.
     *
     * @return int
     */
    public function getCargaHoraria()
    {

        return $this->carga_horaria;
    }

    /**
     * Get the [fk_id_tab_ramo1] column value.
     *
     * @return int
     */
    public function getFkIdTabRamo1()
    {

        return $this->fk_id_tab_ramo1;
    }

    /**
     * Get the [fk_id_tab_ramo2] column value.
     *
     * @return int
     */
    public function getFkIdTabRamo2()
    {

        return $this->fk_id_tab_ramo2;
    }

    /**
     * Get the [fk_id_tab_ramo3] column value.
     *
     * @return int
     */
    public function getFkIdTabRamo3()
    {

        return $this->fk_id_tab_ramo3;
    }

    /**
     * Set the value of [id_pf_profissao] column.
     *
     * @param  int $v new value
     * @return PfProfissao The current object (for fluent API support)
     */
    public function setIdPfProfissao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_pf_profissao !== $v) {
            $this->id_pf_profissao = $v;
            $this->modifiedColumns[] = PfProfissaoPeer::ID_PF_PROFISSAO;
        }


        return $this;
    } // setIdPfProfissao()

    /**
     * Set the value of [fk_id_pf_informacoes] column.
     *
     * @param  int $v new value
     * @return PfProfissao The current object (for fluent API support)
     */
    public function setFkIdPfInformacoes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_pf_informacoes !== $v) {
            $this->fk_id_pf_informacoes = $v;
            $this->modifiedColumns[] = PfProfissaoPeer::FK_ID_PF_INFORMACOES;
        }


        return $this;
    } // setFkIdPfInformacoes()

    /**
     * Set the value of [empresa] column.
     *
     * @param  string $v new value
     * @return PfProfissao The current object (for fluent API support)
     */
    public function setEmpresa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empresa !== $v) {
            $this->empresa = $v;
            $this->modifiedColumns[] = PfProfissaoPeer::EMPRESA;
        }


        return $this;
    } // setEmpresa()

    /**
     * Set the value of [cidade] column.
     *
     * @param  string $v new value
     * @return PfProfissao The current object (for fluent API support)
     */
    public function setCidade($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cidade !== $v) {
            $this->cidade = $v;
            $this->modifiedColumns[] = PfProfissaoPeer::CIDADE;
        }


        return $this;
    } // setCidade()

    /**
     * Sets the value of [dt_admissao] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfProfissao The current object (for fluent API support)
     */
    public function setDtAdmissao($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dt_admissao !== null || $dt !== null) {
            $currentDateAsString = ($this->dt_admissao !== null && $tmpDt = new DateTime($this->dt_admissao)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dt_admissao = $newDateAsString;
                $this->modifiedColumns[] = PfProfissaoPeer::DT_ADMISSAO;
            }
        } // if either are not null


        return $this;
    } // setDtAdmissao()

    /**
     * Sets the value of [dt_demissao] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfProfissao The current object (for fluent API support)
     */
    public function setDtDemissao($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dt_demissao !== null || $dt !== null) {
            $currentDateAsString = ($this->dt_demissao !== null && $tmpDt = new DateTime($this->dt_demissao)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dt_demissao = $newDateAsString;
                $this->modifiedColumns[] = PfProfissaoPeer::DT_DEMISSAO;
            }
        } // if either are not null


        return $this;
    } // setDtDemissao()

    /**
     * Set the value of [carga_horaria] column.
     *
     * @param  int $v new value
     * @return PfProfissao The current object (for fluent API support)
     */
    public function setCargaHoraria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->carga_horaria !== $v) {
            $this->carga_horaria = $v;
            $this->modifiedColumns[] = PfProfissaoPeer::CARGA_HORARIA;
        }


        return $this;
    } // setCargaHoraria()

    /**
     * Set the value of [fk_id_tab_ramo1] column.
     *
     * @param  int $v new value
     * @return PfProfissao The current object (for fluent API support)
     */
    public function setFkIdTabRamo1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_ramo1 !== $v) {
            $this->fk_id_tab_ramo1 = $v;
            $this->modifiedColumns[] = PfProfissaoPeer::FK_ID_TAB_RAMO1;
        }


        return $this;
    } // setFkIdTabRamo1()

    /**
     * Set the value of [fk_id_tab_ramo2] column.
     *
     * @param  int $v new value
     * @return PfProfissao The current object (for fluent API support)
     */
    public function setFkIdTabRamo2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_ramo2 !== $v) {
            $this->fk_id_tab_ramo2 = $v;
            $this->modifiedColumns[] = PfProfissaoPeer::FK_ID_TAB_RAMO2;
        }


        return $this;
    } // setFkIdTabRamo2()

    /**
     * Set the value of [fk_id_tab_ramo3] column.
     *
     * @param  int $v new value
     * @return PfProfissao The current object (for fluent API support)
     */
    public function setFkIdTabRamo3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_ramo3 !== $v) {
            $this->fk_id_tab_ramo3 = $v;
            $this->modifiedColumns[] = PfProfissaoPeer::FK_ID_TAB_RAMO3;
        }


        return $this;
    } // setFkIdTabRamo3()

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
            if ($this->fk_id_tab_ramo1 !== 3) {
                return false;
            }

            if ($this->fk_id_tab_ramo2 !== 16) {
                return false;
            }

            if ($this->fk_id_tab_ramo3 !== 219) {
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

            $this->id_pf_profissao = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fk_id_pf_informacoes = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->empresa = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->cidade = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->dt_admissao = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->dt_demissao = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->carga_horaria = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->fk_id_tab_ramo1 = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->fk_id_tab_ramo2 = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->fk_id_tab_ramo3 = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = PfProfissaoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PfProfissao object", $e);
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
            $con = Propel::getConnection(PfProfissaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PfProfissaoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PfProfissaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PfProfissaoQuery::create()
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
            $con = Propel::getConnection(PfProfissaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PfProfissaoPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PfProfissaoPeer::ID_PF_PROFISSAO;
        if (null !== $this->id_pf_profissao) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PfProfissaoPeer::ID_PF_PROFISSAO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PfProfissaoPeer::ID_PF_PROFISSAO)) {
            $modifiedColumns[':p' . $index++]  = '`id_pf_profissao`';
        }
        if ($this->isColumnModified(PfProfissaoPeer::FK_ID_PF_INFORMACOES)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_pf_informacoes`';
        }
        if ($this->isColumnModified(PfProfissaoPeer::EMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`empresa`';
        }
        if ($this->isColumnModified(PfProfissaoPeer::CIDADE)) {
            $modifiedColumns[':p' . $index++]  = '`cidade`';
        }
        if ($this->isColumnModified(PfProfissaoPeer::DT_ADMISSAO)) {
            $modifiedColumns[':p' . $index++]  = '`dt_admissao`';
        }
        if ($this->isColumnModified(PfProfissaoPeer::DT_DEMISSAO)) {
            $modifiedColumns[':p' . $index++]  = '`dt_demissao`';
        }
        if ($this->isColumnModified(PfProfissaoPeer::CARGA_HORARIA)) {
            $modifiedColumns[':p' . $index++]  = '`carga_horaria`';
        }
        if ($this->isColumnModified(PfProfissaoPeer::FK_ID_TAB_RAMO1)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_ramo1`';
        }
        if ($this->isColumnModified(PfProfissaoPeer::FK_ID_TAB_RAMO2)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_ramo2`';
        }
        if ($this->isColumnModified(PfProfissaoPeer::FK_ID_TAB_RAMO3)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_ramo3`';
        }

        $sql = sprintf(
            'INSERT INTO `pf_profissao` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_pf_profissao`':
                        $stmt->bindValue($identifier, $this->id_pf_profissao, PDO::PARAM_INT);
                        break;
                    case '`fk_id_pf_informacoes`':
                        $stmt->bindValue($identifier, $this->fk_id_pf_informacoes, PDO::PARAM_INT);
                        break;
                    case '`empresa`':
                        $stmt->bindValue($identifier, $this->empresa, PDO::PARAM_STR);
                        break;
                    case '`cidade`':
                        $stmt->bindValue($identifier, $this->cidade, PDO::PARAM_STR);
                        break;
                    case '`dt_admissao`':
                        $stmt->bindValue($identifier, $this->dt_admissao, PDO::PARAM_STR);
                        break;
                    case '`dt_demissao`':
                        $stmt->bindValue($identifier, $this->dt_demissao, PDO::PARAM_STR);
                        break;
                    case '`carga_horaria`':
                        $stmt->bindValue($identifier, $this->carga_horaria, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_ramo1`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_ramo1, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_ramo2`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_ramo2, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_ramo3`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_ramo3, PDO::PARAM_INT);
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
        $this->setIdPfProfissao($pk);

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


            if (($retval = PfProfissaoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PfProfissaoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdPfProfissao();
                break;
            case 1:
                return $this->getFkIdPfInformacoes();
                break;
            case 2:
                return $this->getEmpresa();
                break;
            case 3:
                return $this->getCidade();
                break;
            case 4:
                return $this->getDtAdmissao();
                break;
            case 5:
                return $this->getDtDemissao();
                break;
            case 6:
                return $this->getCargaHoraria();
                break;
            case 7:
                return $this->getFkIdTabRamo1();
                break;
            case 8:
                return $this->getFkIdTabRamo2();
                break;
            case 9:
                return $this->getFkIdTabRamo3();
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
        if (isset($alreadyDumpedObjects['PfProfissao'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PfProfissao'][$this->getPrimaryKey()] = true;
        $keys = PfProfissaoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPfProfissao(),
            $keys[1] => $this->getFkIdPfInformacoes(),
            $keys[2] => $this->getEmpresa(),
            $keys[3] => $this->getCidade(),
            $keys[4] => $this->getDtAdmissao(),
            $keys[5] => $this->getDtDemissao(),
            $keys[6] => $this->getCargaHoraria(),
            $keys[7] => $this->getFkIdTabRamo1(),
            $keys[8] => $this->getFkIdTabRamo2(),
            $keys[9] => $this->getFkIdTabRamo3(),
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
        $pos = PfProfissaoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdPfProfissao($value);
                break;
            case 1:
                $this->setFkIdPfInformacoes($value);
                break;
            case 2:
                $this->setEmpresa($value);
                break;
            case 3:
                $this->setCidade($value);
                break;
            case 4:
                $this->setDtAdmissao($value);
                break;
            case 5:
                $this->setDtDemissao($value);
                break;
            case 6:
                $this->setCargaHoraria($value);
                break;
            case 7:
                $this->setFkIdTabRamo1($value);
                break;
            case 8:
                $this->setFkIdTabRamo2($value);
                break;
            case 9:
                $this->setFkIdTabRamo3($value);
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
        $keys = PfProfissaoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdPfProfissao($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFkIdPfInformacoes($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmpresa($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCidade($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDtAdmissao($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDtDemissao($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCargaHoraria($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFkIdTabRamo1($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFkIdTabRamo2($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFkIdTabRamo3($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PfProfissaoPeer::DATABASE_NAME);

        if ($this->isColumnModified(PfProfissaoPeer::ID_PF_PROFISSAO)) $criteria->add(PfProfissaoPeer::ID_PF_PROFISSAO, $this->id_pf_profissao);
        if ($this->isColumnModified(PfProfissaoPeer::FK_ID_PF_INFORMACOES)) $criteria->add(PfProfissaoPeer::FK_ID_PF_INFORMACOES, $this->fk_id_pf_informacoes);
        if ($this->isColumnModified(PfProfissaoPeer::EMPRESA)) $criteria->add(PfProfissaoPeer::EMPRESA, $this->empresa);
        if ($this->isColumnModified(PfProfissaoPeer::CIDADE)) $criteria->add(PfProfissaoPeer::CIDADE, $this->cidade);
        if ($this->isColumnModified(PfProfissaoPeer::DT_ADMISSAO)) $criteria->add(PfProfissaoPeer::DT_ADMISSAO, $this->dt_admissao);
        if ($this->isColumnModified(PfProfissaoPeer::DT_DEMISSAO)) $criteria->add(PfProfissaoPeer::DT_DEMISSAO, $this->dt_demissao);
        if ($this->isColumnModified(PfProfissaoPeer::CARGA_HORARIA)) $criteria->add(PfProfissaoPeer::CARGA_HORARIA, $this->carga_horaria);
        if ($this->isColumnModified(PfProfissaoPeer::FK_ID_TAB_RAMO1)) $criteria->add(PfProfissaoPeer::FK_ID_TAB_RAMO1, $this->fk_id_tab_ramo1);
        if ($this->isColumnModified(PfProfissaoPeer::FK_ID_TAB_RAMO2)) $criteria->add(PfProfissaoPeer::FK_ID_TAB_RAMO2, $this->fk_id_tab_ramo2);
        if ($this->isColumnModified(PfProfissaoPeer::FK_ID_TAB_RAMO3)) $criteria->add(PfProfissaoPeer::FK_ID_TAB_RAMO3, $this->fk_id_tab_ramo3);

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
        $criteria = new Criteria(PfProfissaoPeer::DATABASE_NAME);
        $criteria->add(PfProfissaoPeer::ID_PF_PROFISSAO, $this->id_pf_profissao);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdPfProfissao();
    }

    /**
     * Generic method to set the primary key (id_pf_profissao column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPfProfissao($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdPfProfissao();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of PfProfissao (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkIdPfInformacoes($this->getFkIdPfInformacoes());
        $copyObj->setEmpresa($this->getEmpresa());
        $copyObj->setCidade($this->getCidade());
        $copyObj->setDtAdmissao($this->getDtAdmissao());
        $copyObj->setDtDemissao($this->getDtDemissao());
        $copyObj->setCargaHoraria($this->getCargaHoraria());
        $copyObj->setFkIdTabRamo1($this->getFkIdTabRamo1());
        $copyObj->setFkIdTabRamo2($this->getFkIdTabRamo2());
        $copyObj->setFkIdTabRamo3($this->getFkIdTabRamo3());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPfProfissao(NULL); // this is a auto-increment column, so set to default value
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
     * @return PfProfissao Clone of current object.
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
     * @return PfProfissaoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PfProfissaoPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_pf_profissao = null;
        $this->fk_id_pf_informacoes = null;
        $this->empresa = null;
        $this->cidade = null;
        $this->dt_admissao = null;
        $this->dt_demissao = null;
        $this->carga_horaria = null;
        $this->fk_id_tab_ramo1 = null;
        $this->fk_id_tab_ramo2 = null;
        $this->fk_id_tab_ramo3 = null;
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
        return (string) $this->exportTo(PfProfissaoPeer::DEFAULT_STRING_FORMAT);
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
