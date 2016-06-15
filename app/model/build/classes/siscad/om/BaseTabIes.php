<?php


/**
 * Base class that represents a row from the 'tab_ies' table.
 *
 *
 *
 * @package    propel.generator.siscad.om
 */
abstract class BaseTabIes extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TabIesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TabIesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_tab_ies field.
     * @var        int
     */
    protected $id_tab_ies;

    /**
     * The value for the fk_id_tab_ies_vinculacao field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $fk_id_tab_ies_vinculacao;

    /**
     * The value for the fk_id_tab_uf field.
     * @var        int
     */
    protected $fk_id_tab_uf;

    /**
     * The value for the fk_id_tab_ies_situacao field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $fk_id_tab_ies_situacao;

    /**
     * The value for the nome field.
     * @var        string
     */
    protected $nome;

    /**
     * The value for the sigla field.
     * @var        string
     */
    protected $sigla;

    /**
     * The value for the endereco field.
     * @var        string
     */
    protected $endereco;

    /**
     * The value for the bairro field.
     * @var        string
     */
    protected $bairro;

    /**
     * The value for the cidade field.
     * @var        string
     */
    protected $cidade;

    /**
     * The value for the cep field.
     * @var        string
     */
    protected $cep;

    /**
     * The value for the site field.
     * @var        string
     */
    protected $site;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the condicao field.
     * @var        string
     */
    protected $condicao;

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
        $this->fk_id_tab_ies_vinculacao = 0;
        $this->fk_id_tab_ies_situacao = 0;
    }

    /**
     * Initializes internal state of BaseTabIes object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_tab_ies] column value.
     *
     * @return int
     */
    public function getIdTabIes()
    {

        return $this->id_tab_ies;
    }

    /**
     * Get the [fk_id_tab_ies_vinculacao] column value.
     *
     * @return int
     */
    public function getFkIdTabIesVinculacao()
    {

        return $this->fk_id_tab_ies_vinculacao;
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
     * Get the [fk_id_tab_ies_situacao] column value.
     *
     * @return int
     */
    public function getFkIdTabIesSituacao()
    {

        return $this->fk_id_tab_ies_situacao;
    }

    /**
     * Get the [nome] column value.
     *
     * @return string
     */
    public function getNome()
    {

        return $this->nome;
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
     * Get the [endereco] column value.
     *
     * @return string
     */
    public function getEndereco()
    {

        return $this->endereco;
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
     * Get the [cidade] column value.
     *
     * @return string
     */
    public function getCidade()
    {

        return $this->cidade;
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
     * Get the [site] column value.
     *
     * @return string
     */
    public function getSite()
    {

        return $this->site;
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
     * Get the [condicao] column value.
     *
     * @return string
     */
    public function getCondicao()
    {

        return $this->condicao;
    }

    /**
     * Set the value of [id_tab_ies] column.
     *
     * @param  int $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setIdTabIes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tab_ies !== $v) {
            $this->id_tab_ies = $v;
            $this->modifiedColumns[] = TabIesPeer::ID_TAB_IES;
        }


        return $this;
    } // setIdTabIes()

    /**
     * Set the value of [fk_id_tab_ies_vinculacao] column.
     *
     * @param  int $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setFkIdTabIesVinculacao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_ies_vinculacao !== $v) {
            $this->fk_id_tab_ies_vinculacao = $v;
            $this->modifiedColumns[] = TabIesPeer::FK_ID_TAB_IES_VINCULACAO;
        }


        return $this;
    } // setFkIdTabIesVinculacao()

    /**
     * Set the value of [fk_id_tab_uf] column.
     *
     * @param  int $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setFkIdTabUf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_uf !== $v) {
            $this->fk_id_tab_uf = $v;
            $this->modifiedColumns[] = TabIesPeer::FK_ID_TAB_UF;
        }


        return $this;
    } // setFkIdTabUf()

    /**
     * Set the value of [fk_id_tab_ies_situacao] column.
     *
     * @param  int $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setFkIdTabIesSituacao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_ies_situacao !== $v) {
            $this->fk_id_tab_ies_situacao = $v;
            $this->modifiedColumns[] = TabIesPeer::FK_ID_TAB_IES_SITUACAO;
        }


        return $this;
    } // setFkIdTabIesSituacao()

    /**
     * Set the value of [nome] column.
     *
     * @param  string $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setNome($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nome !== $v) {
            $this->nome = $v;
            $this->modifiedColumns[] = TabIesPeer::NOME;
        }


        return $this;
    } // setNome()

    /**
     * Set the value of [sigla] column.
     *
     * @param  string $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setSigla($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sigla !== $v) {
            $this->sigla = $v;
            $this->modifiedColumns[] = TabIesPeer::SIGLA;
        }


        return $this;
    } // setSigla()

    /**
     * Set the value of [endereco] column.
     *
     * @param  string $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setEndereco($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->endereco !== $v) {
            $this->endereco = $v;
            $this->modifiedColumns[] = TabIesPeer::ENDERECO;
        }


        return $this;
    } // setEndereco()

    /**
     * Set the value of [bairro] column.
     *
     * @param  string $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setBairro($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bairro !== $v) {
            $this->bairro = $v;
            $this->modifiedColumns[] = TabIesPeer::BAIRRO;
        }


        return $this;
    } // setBairro()

    /**
     * Set the value of [cidade] column.
     *
     * @param  string $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setCidade($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cidade !== $v) {
            $this->cidade = $v;
            $this->modifiedColumns[] = TabIesPeer::CIDADE;
        }


        return $this;
    } // setCidade()

    /**
     * Set the value of [cep] column.
     *
     * @param  string $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setCep($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cep !== $v) {
            $this->cep = $v;
            $this->modifiedColumns[] = TabIesPeer::CEP;
        }


        return $this;
    } // setCep()

    /**
     * Set the value of [site] column.
     *
     * @param  string $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setSite($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->site !== $v) {
            $this->site = $v;
            $this->modifiedColumns[] = TabIesPeer::SITE;
        }


        return $this;
    } // setSite()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = TabIesPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [condicao] column.
     *
     * @param  string $v new value
     * @return TabIes The current object (for fluent API support)
     */
    public function setCondicao($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->condicao !== $v) {
            $this->condicao = $v;
            $this->modifiedColumns[] = TabIesPeer::CONDICAO;
        }


        return $this;
    } // setCondicao()

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
            if ($this->fk_id_tab_ies_vinculacao !== 0) {
                return false;
            }

            if ($this->fk_id_tab_ies_situacao !== 0) {
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

            $this->id_tab_ies = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fk_id_tab_ies_vinculacao = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->fk_id_tab_uf = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->fk_id_tab_ies_situacao = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->nome = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->sigla = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->endereco = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->bairro = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->cidade = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->cep = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->site = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->email = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->condicao = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = TabIesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating TabIes object", $e);
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
            $con = Propel::getConnection(TabIesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TabIesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(TabIesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TabIesQuery::create()
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
            $con = Propel::getConnection(TabIesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TabIesPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = TabIesPeer::ID_TAB_IES;
        if (null !== $this->id_tab_ies) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TabIesPeer::ID_TAB_IES . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TabIesPeer::ID_TAB_IES)) {
            $modifiedColumns[':p' . $index++]  = '`id_tab_ies`';
        }
        if ($this->isColumnModified(TabIesPeer::FK_ID_TAB_IES_VINCULACAO)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_ies_vinculacao`';
        }
        if ($this->isColumnModified(TabIesPeer::FK_ID_TAB_UF)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_uf`';
        }
        if ($this->isColumnModified(TabIesPeer::FK_ID_TAB_IES_SITUACAO)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_ies_situacao`';
        }
        if ($this->isColumnModified(TabIesPeer::NOME)) {
            $modifiedColumns[':p' . $index++]  = '`nome`';
        }
        if ($this->isColumnModified(TabIesPeer::SIGLA)) {
            $modifiedColumns[':p' . $index++]  = '`sigla`';
        }
        if ($this->isColumnModified(TabIesPeer::ENDERECO)) {
            $modifiedColumns[':p' . $index++]  = '`endereco`';
        }
        if ($this->isColumnModified(TabIesPeer::BAIRRO)) {
            $modifiedColumns[':p' . $index++]  = '`bairro`';
        }
        if ($this->isColumnModified(TabIesPeer::CIDADE)) {
            $modifiedColumns[':p' . $index++]  = '`cidade`';
        }
        if ($this->isColumnModified(TabIesPeer::CEP)) {
            $modifiedColumns[':p' . $index++]  = '`cep`';
        }
        if ($this->isColumnModified(TabIesPeer::SITE)) {
            $modifiedColumns[':p' . $index++]  = '`site`';
        }
        if ($this->isColumnModified(TabIesPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(TabIesPeer::CONDICAO)) {
            $modifiedColumns[':p' . $index++]  = '`condicao`';
        }

        $sql = sprintf(
            'INSERT INTO `tab_ies` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_tab_ies`':
                        $stmt->bindValue($identifier, $this->id_tab_ies, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_ies_vinculacao`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_ies_vinculacao, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_uf`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_uf, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_ies_situacao`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_ies_situacao, PDO::PARAM_INT);
                        break;
                    case '`nome`':
                        $stmt->bindValue($identifier, $this->nome, PDO::PARAM_STR);
                        break;
                    case '`sigla`':
                        $stmt->bindValue($identifier, $this->sigla, PDO::PARAM_STR);
                        break;
                    case '`endereco`':
                        $stmt->bindValue($identifier, $this->endereco, PDO::PARAM_STR);
                        break;
                    case '`bairro`':
                        $stmt->bindValue($identifier, $this->bairro, PDO::PARAM_STR);
                        break;
                    case '`cidade`':
                        $stmt->bindValue($identifier, $this->cidade, PDO::PARAM_STR);
                        break;
                    case '`cep`':
                        $stmt->bindValue($identifier, $this->cep, PDO::PARAM_STR);
                        break;
                    case '`site`':
                        $stmt->bindValue($identifier, $this->site, PDO::PARAM_STR);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`condicao`':
                        $stmt->bindValue($identifier, $this->condicao, PDO::PARAM_STR);
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
        $this->setIdTabIes($pk);

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


            if (($retval = TabIesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = TabIesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTabIes();
                break;
            case 1:
                return $this->getFkIdTabIesVinculacao();
                break;
            case 2:
                return $this->getFkIdTabUf();
                break;
            case 3:
                return $this->getFkIdTabIesSituacao();
                break;
            case 4:
                return $this->getNome();
                break;
            case 5:
                return $this->getSigla();
                break;
            case 6:
                return $this->getEndereco();
                break;
            case 7:
                return $this->getBairro();
                break;
            case 8:
                return $this->getCidade();
                break;
            case 9:
                return $this->getCep();
                break;
            case 10:
                return $this->getSite();
                break;
            case 11:
                return $this->getEmail();
                break;
            case 12:
                return $this->getCondicao();
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
        if (isset($alreadyDumpedObjects['TabIes'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TabIes'][$this->getPrimaryKey()] = true;
        $keys = TabIesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTabIes(),
            $keys[1] => $this->getFkIdTabIesVinculacao(),
            $keys[2] => $this->getFkIdTabUf(),
            $keys[3] => $this->getFkIdTabIesSituacao(),
            $keys[4] => $this->getNome(),
            $keys[5] => $this->getSigla(),
            $keys[6] => $this->getEndereco(),
            $keys[7] => $this->getBairro(),
            $keys[8] => $this->getCidade(),
            $keys[9] => $this->getCep(),
            $keys[10] => $this->getSite(),
            $keys[11] => $this->getEmail(),
            $keys[12] => $this->getCondicao(),
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
        $pos = TabIesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTabIes($value);
                break;
            case 1:
                $this->setFkIdTabIesVinculacao($value);
                break;
            case 2:
                $this->setFkIdTabUf($value);
                break;
            case 3:
                $this->setFkIdTabIesSituacao($value);
                break;
            case 4:
                $this->setNome($value);
                break;
            case 5:
                $this->setSigla($value);
                break;
            case 6:
                $this->setEndereco($value);
                break;
            case 7:
                $this->setBairro($value);
                break;
            case 8:
                $this->setCidade($value);
                break;
            case 9:
                $this->setCep($value);
                break;
            case 10:
                $this->setSite($value);
                break;
            case 11:
                $this->setEmail($value);
                break;
            case 12:
                $this->setCondicao($value);
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
        $keys = TabIesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTabIes($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFkIdTabIesVinculacao($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFkIdTabUf($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFkIdTabIesSituacao($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNome($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSigla($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEndereco($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setBairro($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCidade($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCep($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSite($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEmail($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCondicao($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TabIesPeer::DATABASE_NAME);

        if ($this->isColumnModified(TabIesPeer::ID_TAB_IES)) $criteria->add(TabIesPeer::ID_TAB_IES, $this->id_tab_ies);
        if ($this->isColumnModified(TabIesPeer::FK_ID_TAB_IES_VINCULACAO)) $criteria->add(TabIesPeer::FK_ID_TAB_IES_VINCULACAO, $this->fk_id_tab_ies_vinculacao);
        if ($this->isColumnModified(TabIesPeer::FK_ID_TAB_UF)) $criteria->add(TabIesPeer::FK_ID_TAB_UF, $this->fk_id_tab_uf);
        if ($this->isColumnModified(TabIesPeer::FK_ID_TAB_IES_SITUACAO)) $criteria->add(TabIesPeer::FK_ID_TAB_IES_SITUACAO, $this->fk_id_tab_ies_situacao);
        if ($this->isColumnModified(TabIesPeer::NOME)) $criteria->add(TabIesPeer::NOME, $this->nome);
        if ($this->isColumnModified(TabIesPeer::SIGLA)) $criteria->add(TabIesPeer::SIGLA, $this->sigla);
        if ($this->isColumnModified(TabIesPeer::ENDERECO)) $criteria->add(TabIesPeer::ENDERECO, $this->endereco);
        if ($this->isColumnModified(TabIesPeer::BAIRRO)) $criteria->add(TabIesPeer::BAIRRO, $this->bairro);
        if ($this->isColumnModified(TabIesPeer::CIDADE)) $criteria->add(TabIesPeer::CIDADE, $this->cidade);
        if ($this->isColumnModified(TabIesPeer::CEP)) $criteria->add(TabIesPeer::CEP, $this->cep);
        if ($this->isColumnModified(TabIesPeer::SITE)) $criteria->add(TabIesPeer::SITE, $this->site);
        if ($this->isColumnModified(TabIesPeer::EMAIL)) $criteria->add(TabIesPeer::EMAIL, $this->email);
        if ($this->isColumnModified(TabIesPeer::CONDICAO)) $criteria->add(TabIesPeer::CONDICAO, $this->condicao);

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
        $criteria = new Criteria(TabIesPeer::DATABASE_NAME);
        $criteria->add(TabIesPeer::ID_TAB_IES, $this->id_tab_ies);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdTabIes();
    }

    /**
     * Generic method to set the primary key (id_tab_ies column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdTabIes($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdTabIes();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of TabIes (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkIdTabIesVinculacao($this->getFkIdTabIesVinculacao());
        $copyObj->setFkIdTabUf($this->getFkIdTabUf());
        $copyObj->setFkIdTabIesSituacao($this->getFkIdTabIesSituacao());
        $copyObj->setNome($this->getNome());
        $copyObj->setSigla($this->getSigla());
        $copyObj->setEndereco($this->getEndereco());
        $copyObj->setBairro($this->getBairro());
        $copyObj->setCidade($this->getCidade());
        $copyObj->setCep($this->getCep());
        $copyObj->setSite($this->getSite());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setCondicao($this->getCondicao());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdTabIes(NULL); // this is a auto-increment column, so set to default value
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
     * @return TabIes Clone of current object.
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
     * @return TabIesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TabIesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_tab_ies = null;
        $this->fk_id_tab_ies_vinculacao = null;
        $this->fk_id_tab_uf = null;
        $this->fk_id_tab_ies_situacao = null;
        $this->nome = null;
        $this->sigla = null;
        $this->endereco = null;
        $this->bairro = null;
        $this->cidade = null;
        $this->cep = null;
        $this->site = null;
        $this->email = null;
        $this->condicao = null;
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
        return (string) $this->exportTo(TabIesPeer::DEFAULT_STRING_FORMAT);
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
