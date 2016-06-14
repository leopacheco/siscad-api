<?php


/**
 * Base class that represents a row from the 'tab_uf' table.
 *
 *
 *
 * @package    propel.generator.siscad-api.om
 */
abstract class BaseTabUf extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TabUfPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TabUfPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_tab_uf field.
     * @var        int
     */
    protected $id_tab_uf;

    /**
     * The value for the sigla field.
     * @var        string
     */
    protected $sigla;

    /**
     * The value for the tratamento field.
     * @var        string
     */
    protected $tratamento;

    /**
     * The value for the estado field.
     * @var        string
     */
    protected $estado;

    /**
     * The value for the capital field.
     * @var        string
     */
    protected $capital;

    /**
     * The value for the rua field.
     * @var        string
     */
    protected $rua;

    /**
     * The value for the bairro field.
     * @var        string
     */
    protected $bairro;

    /**
     * The value for the cep field.
     * @var        string
     */
    protected $cep;

    /**
     * The value for the ddd field.
     * @var        string
     */
    protected $ddd;

    /**
     * The value for the telefone field.
     * @var        string
     */
    protected $telefone;

    /**
     * The value for the fax field.
     * @var        string
     */
    protected $fax;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the sequencia_tf field.
     * @var        int
     */
    protected $sequencia_tf;

    /**
     * The value for the sequencia_ai field.
     * @var        int
     */
    protected $sequencia_ai;

    /**
     * The value for the ano field.
     * @var        string
     */
    protected $ano;

    /**
     * The value for the regiao field.
     * @var        string
     */
    protected $regiao;

    /**
     * The value for the res1102 field.
     * @var        int
     */
    protected $res1102;

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
     * Get the [id_tab_uf] column value.
     *
     * @return int
     */
    public function getIdTabUf()
    {

        return $this->id_tab_uf;
    }

    /**
     * Get the [sigla] column value.
     *
     * @return string
     */
    public function getSigla()
    {

        return $this->sigla;
    }

    /**
     * Get the [tratamento] column value.
     *
     * @return string
     */
    public function getTratamento()
    {

        return $this->tratamento;
    }

    /**
     * Get the [estado] column value.
     *
     * @return string
     */
    public function getEstado()
    {

        return $this->estado;
    }

    /**
     * Get the [capital] column value.
     *
     * @return string
     */
    public function getCapital()
    {

        return $this->capital;
    }

    /**
     * Get the [rua] column value.
     *
     * @return string
     */
    public function getRua()
    {

        return $this->rua;
    }

    /**
     * Get the [bairro] column value.
     *
     * @return string
     */
    public function getBairro()
    {

        return $this->bairro;
    }

    /**
     * Get the [cep] column value.
     *
     * @return string
     */
    public function getCep()
    {

        return $this->cep;
    }

    /**
     * Get the [ddd] column value.
     *
     * @return string
     */
    public function getDdd()
    {

        return $this->ddd;
    }

    /**
     * Get the [telefone] column value.
     *
     * @return string
     */
    public function getTelefone()
    {

        return $this->telefone;
    }

    /**
     * Get the [fax] column value.
     *
     * @return string
     */
    public function getFax()
    {

        return $this->fax;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [sequencia_tf] column value.
     *
     * @return int
     */
    public function getSequenciaTf()
    {

        return $this->sequencia_tf;
    }

    /**
     * Get the [sequencia_ai] column value.
     *
     * @return int
     */
    public function getSequenciaAi()
    {

        return $this->sequencia_ai;
    }

    /**
     * Get the [ano] column value.
     *
     * @return string
     */
    public function getAno()
    {

        return $this->ano;
    }

    /**
     * Get the [regiao] column value.
     *
     * @return string
     */
    public function getRegiao()
    {

        return $this->regiao;
    }

    /**
     * Get the [res1102] column value.
     *
     * @return int
     */
    public function getRes1102()
    {

        return $this->res1102;
    }

    /**
     * Set the value of [id_tab_uf] column.
     *
     * @param  int $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setIdTabUf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tab_uf !== $v) {
            $this->id_tab_uf = $v;
            $this->modifiedColumns[] = TabUfPeer::ID_TAB_UF;
        }


        return $this;
    } // setIdTabUf()

    /**
     * Set the value of [sigla] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setSigla($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sigla !== $v) {
            $this->sigla = $v;
            $this->modifiedColumns[] = TabUfPeer::SIGLA;
        }


        return $this;
    } // setSigla()

    /**
     * Set the value of [tratamento] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setTratamento($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tratamento !== $v) {
            $this->tratamento = $v;
            $this->modifiedColumns[] = TabUfPeer::TRATAMENTO;
        }


        return $this;
    } // setTratamento()

    /**
     * Set the value of [estado] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->estado !== $v) {
            $this->estado = $v;
            $this->modifiedColumns[] = TabUfPeer::ESTADO;
        }


        return $this;
    } // setEstado()

    /**
     * Set the value of [capital] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setCapital($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->capital !== $v) {
            $this->capital = $v;
            $this->modifiedColumns[] = TabUfPeer::CAPITAL;
        }


        return $this;
    } // setCapital()

    /**
     * Set the value of [rua] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setRua($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rua !== $v) {
            $this->rua = $v;
            $this->modifiedColumns[] = TabUfPeer::RUA;
        }


        return $this;
    } // setRua()

    /**
     * Set the value of [bairro] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setBairro($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bairro !== $v) {
            $this->bairro = $v;
            $this->modifiedColumns[] = TabUfPeer::BAIRRO;
        }


        return $this;
    } // setBairro()

    /**
     * Set the value of [cep] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setCep($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cep !== $v) {
            $this->cep = $v;
            $this->modifiedColumns[] = TabUfPeer::CEP;
        }


        return $this;
    } // setCep()

    /**
     * Set the value of [ddd] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setDdd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ddd !== $v) {
            $this->ddd = $v;
            $this->modifiedColumns[] = TabUfPeer::DDD;
        }


        return $this;
    } // setDdd()

    /**
     * Set the value of [telefone] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setTelefone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->telefone !== $v) {
            $this->telefone = $v;
            $this->modifiedColumns[] = TabUfPeer::TELEFONE;
        }


        return $this;
    } // setTelefone()

    /**
     * Set the value of [fax] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = TabUfPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = TabUfPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [sequencia_tf] column.
     *
     * @param  int $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setSequenciaTf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sequencia_tf !== $v) {
            $this->sequencia_tf = $v;
            $this->modifiedColumns[] = TabUfPeer::SEQUENCIA_TF;
        }


        return $this;
    } // setSequenciaTf()

    /**
     * Set the value of [sequencia_ai] column.
     *
     * @param  int $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setSequenciaAi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sequencia_ai !== $v) {
            $this->sequencia_ai = $v;
            $this->modifiedColumns[] = TabUfPeer::SEQUENCIA_AI;
        }


        return $this;
    } // setSequenciaAi()

    /**
     * Set the value of [ano] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setAno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ano !== $v) {
            $this->ano = $v;
            $this->modifiedColumns[] = TabUfPeer::ANO;
        }


        return $this;
    } // setAno()

    /**
     * Set the value of [regiao] column.
     *
     * @param  string $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setRegiao($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->regiao !== $v) {
            $this->regiao = $v;
            $this->modifiedColumns[] = TabUfPeer::REGIAO;
        }


        return $this;
    } // setRegiao()

    /**
     * Set the value of [res1102] column.
     *
     * @param  int $v new value
     * @return TabUf The current object (for fluent API support)
     */
    public function setRes1102($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->res1102 !== $v) {
            $this->res1102 = $v;
            $this->modifiedColumns[] = TabUfPeer::RES1102;
        }


        return $this;
    } // setRes1102()

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

            $this->id_tab_uf = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->sigla = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->tratamento = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->estado = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->capital = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->rua = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->bairro = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->cep = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ddd = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->telefone = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->fax = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->email = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->sequencia_tf = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->sequencia_ai = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->ano = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->regiao = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->res1102 = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = TabUfPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating TabUf object", $e);
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
            $con = Propel::getConnection(TabUfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TabUfPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(TabUfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TabUfQuery::create()
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
            $con = Propel::getConnection(TabUfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TabUfPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = TabUfPeer::ID_TAB_UF;
        if (null !== $this->id_tab_uf) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TabUfPeer::ID_TAB_UF . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TabUfPeer::ID_TAB_UF)) {
            $modifiedColumns[':p' . $index++]  = '`id_tab_uf`';
        }
        if ($this->isColumnModified(TabUfPeer::SIGLA)) {
            $modifiedColumns[':p' . $index++]  = '`sigla`';
        }
        if ($this->isColumnModified(TabUfPeer::TRATAMENTO)) {
            $modifiedColumns[':p' . $index++]  = '`tratamento`';
        }
        if ($this->isColumnModified(TabUfPeer::ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`estado`';
        }
        if ($this->isColumnModified(TabUfPeer::CAPITAL)) {
            $modifiedColumns[':p' . $index++]  = '`capital`';
        }
        if ($this->isColumnModified(TabUfPeer::RUA)) {
            $modifiedColumns[':p' . $index++]  = '`rua`';
        }
        if ($this->isColumnModified(TabUfPeer::BAIRRO)) {
            $modifiedColumns[':p' . $index++]  = '`bairro`';
        }
        if ($this->isColumnModified(TabUfPeer::CEP)) {
            $modifiedColumns[':p' . $index++]  = '`cep`';
        }
        if ($this->isColumnModified(TabUfPeer::DDD)) {
            $modifiedColumns[':p' . $index++]  = '`ddd`';
        }
        if ($this->isColumnModified(TabUfPeer::TELEFONE)) {
            $modifiedColumns[':p' . $index++]  = '`telefone`';
        }
        if ($this->isColumnModified(TabUfPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(TabUfPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(TabUfPeer::SEQUENCIA_TF)) {
            $modifiedColumns[':p' . $index++]  = '`sequencia_tf`';
        }
        if ($this->isColumnModified(TabUfPeer::SEQUENCIA_AI)) {
            $modifiedColumns[':p' . $index++]  = '`sequencia_ai`';
        }
        if ($this->isColumnModified(TabUfPeer::ANO)) {
            $modifiedColumns[':p' . $index++]  = '`ano`';
        }
        if ($this->isColumnModified(TabUfPeer::REGIAO)) {
            $modifiedColumns[':p' . $index++]  = '`regiao`';
        }
        if ($this->isColumnModified(TabUfPeer::RES1102)) {
            $modifiedColumns[':p' . $index++]  = '`res1102`';
        }

        $sql = sprintf(
            'INSERT INTO `tab_uf` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_tab_uf`':
                        $stmt->bindValue($identifier, $this->id_tab_uf, PDO::PARAM_INT);
                        break;
                    case '`sigla`':
                        $stmt->bindValue($identifier, $this->sigla, PDO::PARAM_STR);
                        break;
                    case '`tratamento`':
                        $stmt->bindValue($identifier, $this->tratamento, PDO::PARAM_STR);
                        break;
                    case '`estado`':
                        $stmt->bindValue($identifier, $this->estado, PDO::PARAM_STR);
                        break;
                    case '`capital`':
                        $stmt->bindValue($identifier, $this->capital, PDO::PARAM_STR);
                        break;
                    case '`rua`':
                        $stmt->bindValue($identifier, $this->rua, PDO::PARAM_STR);
                        break;
                    case '`bairro`':
                        $stmt->bindValue($identifier, $this->bairro, PDO::PARAM_STR);
                        break;
                    case '`cep`':
                        $stmt->bindValue($identifier, $this->cep, PDO::PARAM_STR);
                        break;
                    case '`ddd`':
                        $stmt->bindValue($identifier, $this->ddd, PDO::PARAM_STR);
                        break;
                    case '`telefone`':
                        $stmt->bindValue($identifier, $this->telefone, PDO::PARAM_STR);
                        break;
                    case '`fax`':
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`sequencia_tf`':
                        $stmt->bindValue($identifier, $this->sequencia_tf, PDO::PARAM_INT);
                        break;
                    case '`sequencia_ai`':
                        $stmt->bindValue($identifier, $this->sequencia_ai, PDO::PARAM_INT);
                        break;
                    case '`ano`':
                        $stmt->bindValue($identifier, $this->ano, PDO::PARAM_STR);
                        break;
                    case '`regiao`':
                        $stmt->bindValue($identifier, $this->regiao, PDO::PARAM_STR);
                        break;
                    case '`res1102`':
                        $stmt->bindValue($identifier, $this->res1102, PDO::PARAM_INT);
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
        $this->setIdTabUf($pk);

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


            if (($retval = TabUfPeer::doValidate($this, $columns)) !== true) {
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
        $pos = TabUfPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTabUf();
                break;
            case 1:
                return $this->getSigla();
                break;
            case 2:
                return $this->getTratamento();
                break;
            case 3:
                return $this->getEstado();
                break;
            case 4:
                return $this->getCapital();
                break;
            case 5:
                return $this->getRua();
                break;
            case 6:
                return $this->getBairro();
                break;
            case 7:
                return $this->getCep();
                break;
            case 8:
                return $this->getDdd();
                break;
            case 9:
                return $this->getTelefone();
                break;
            case 10:
                return $this->getFax();
                break;
            case 11:
                return $this->getEmail();
                break;
            case 12:
                return $this->getSequenciaTf();
                break;
            case 13:
                return $this->getSequenciaAi();
                break;
            case 14:
                return $this->getAno();
                break;
            case 15:
                return $this->getRegiao();
                break;
            case 16:
                return $this->getRes1102();
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
        if (isset($alreadyDumpedObjects['TabUf'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TabUf'][$this->getPrimaryKey()] = true;
        $keys = TabUfPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTabUf(),
            $keys[1] => $this->getSigla(),
            $keys[2] => $this->getTratamento(),
            $keys[3] => $this->getEstado(),
            $keys[4] => $this->getCapital(),
            $keys[5] => $this->getRua(),
            $keys[6] => $this->getBairro(),
            $keys[7] => $this->getCep(),
            $keys[8] => $this->getDdd(),
            $keys[9] => $this->getTelefone(),
            $keys[10] => $this->getFax(),
            $keys[11] => $this->getEmail(),
            $keys[12] => $this->getSequenciaTf(),
            $keys[13] => $this->getSequenciaAi(),
            $keys[14] => $this->getAno(),
            $keys[15] => $this->getRegiao(),
            $keys[16] => $this->getRes1102(),
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
        $pos = TabUfPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTabUf($value);
                break;
            case 1:
                $this->setSigla($value);
                break;
            case 2:
                $this->setTratamento($value);
                break;
            case 3:
                $this->setEstado($value);
                break;
            case 4:
                $this->setCapital($value);
                break;
            case 5:
                $this->setRua($value);
                break;
            case 6:
                $this->setBairro($value);
                break;
            case 7:
                $this->setCep($value);
                break;
            case 8:
                $this->setDdd($value);
                break;
            case 9:
                $this->setTelefone($value);
                break;
            case 10:
                $this->setFax($value);
                break;
            case 11:
                $this->setEmail($value);
                break;
            case 12:
                $this->setSequenciaTf($value);
                break;
            case 13:
                $this->setSequenciaAi($value);
                break;
            case 14:
                $this->setAno($value);
                break;
            case 15:
                $this->setRegiao($value);
                break;
            case 16:
                $this->setRes1102($value);
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
        $keys = TabUfPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTabUf($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSigla($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTratamento($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEstado($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCapital($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRua($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setBairro($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCep($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDdd($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTelefone($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFax($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEmail($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setSequenciaTf($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSequenciaAi($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setAno($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setRegiao($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRes1102($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TabUfPeer::DATABASE_NAME);

        if ($this->isColumnModified(TabUfPeer::ID_TAB_UF)) $criteria->add(TabUfPeer::ID_TAB_UF, $this->id_tab_uf);
        if ($this->isColumnModified(TabUfPeer::SIGLA)) $criteria->add(TabUfPeer::SIGLA, $this->sigla);
        if ($this->isColumnModified(TabUfPeer::TRATAMENTO)) $criteria->add(TabUfPeer::TRATAMENTO, $this->tratamento);
        if ($this->isColumnModified(TabUfPeer::ESTADO)) $criteria->add(TabUfPeer::ESTADO, $this->estado);
        if ($this->isColumnModified(TabUfPeer::CAPITAL)) $criteria->add(TabUfPeer::CAPITAL, $this->capital);
        if ($this->isColumnModified(TabUfPeer::RUA)) $criteria->add(TabUfPeer::RUA, $this->rua);
        if ($this->isColumnModified(TabUfPeer::BAIRRO)) $criteria->add(TabUfPeer::BAIRRO, $this->bairro);
        if ($this->isColumnModified(TabUfPeer::CEP)) $criteria->add(TabUfPeer::CEP, $this->cep);
        if ($this->isColumnModified(TabUfPeer::DDD)) $criteria->add(TabUfPeer::DDD, $this->ddd);
        if ($this->isColumnModified(TabUfPeer::TELEFONE)) $criteria->add(TabUfPeer::TELEFONE, $this->telefone);
        if ($this->isColumnModified(TabUfPeer::FAX)) $criteria->add(TabUfPeer::FAX, $this->fax);
        if ($this->isColumnModified(TabUfPeer::EMAIL)) $criteria->add(TabUfPeer::EMAIL, $this->email);
        if ($this->isColumnModified(TabUfPeer::SEQUENCIA_TF)) $criteria->add(TabUfPeer::SEQUENCIA_TF, $this->sequencia_tf);
        if ($this->isColumnModified(TabUfPeer::SEQUENCIA_AI)) $criteria->add(TabUfPeer::SEQUENCIA_AI, $this->sequencia_ai);
        if ($this->isColumnModified(TabUfPeer::ANO)) $criteria->add(TabUfPeer::ANO, $this->ano);
        if ($this->isColumnModified(TabUfPeer::REGIAO)) $criteria->add(TabUfPeer::REGIAO, $this->regiao);
        if ($this->isColumnModified(TabUfPeer::RES1102)) $criteria->add(TabUfPeer::RES1102, $this->res1102);

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
        $criteria = new Criteria(TabUfPeer::DATABASE_NAME);
        $criteria->add(TabUfPeer::ID_TAB_UF, $this->id_tab_uf);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdTabUf();
    }

    /**
     * Generic method to set the primary key (id_tab_uf column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdTabUf($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdTabUf();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of TabUf (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSigla($this->getSigla());
        $copyObj->setTratamento($this->getTratamento());
        $copyObj->setEstado($this->getEstado());
        $copyObj->setCapital($this->getCapital());
        $copyObj->setRua($this->getRua());
        $copyObj->setBairro($this->getBairro());
        $copyObj->setCep($this->getCep());
        $copyObj->setDdd($this->getDdd());
        $copyObj->setTelefone($this->getTelefone());
        $copyObj->setFax($this->getFax());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setSequenciaTf($this->getSequenciaTf());
        $copyObj->setSequenciaAi($this->getSequenciaAi());
        $copyObj->setAno($this->getAno());
        $copyObj->setRegiao($this->getRegiao());
        $copyObj->setRes1102($this->getRes1102());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdTabUf(NULL); // this is a auto-increment column, so set to default value
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
     * @return TabUf Clone of current object.
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
     * @return TabUfPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TabUfPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_tab_uf = null;
        $this->sigla = null;
        $this->tratamento = null;
        $this->estado = null;
        $this->capital = null;
        $this->rua = null;
        $this->bairro = null;
        $this->cep = null;
        $this->ddd = null;
        $this->telefone = null;
        $this->fax = null;
        $this->email = null;
        $this->sequencia_tf = null;
        $this->sequencia_ai = null;
        $this->ano = null;
        $this->regiao = null;
        $this->res1102 = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
        return (string) $this->exportTo(TabUfPeer::DEFAULT_STRING_FORMAT);
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
