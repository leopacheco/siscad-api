<?php


/**
 * Base class that represents a row from the 'pfj_endereco' table.
 *
 *
 *
 * @package    propel.generator.siscad.om
 */
abstract class BasePfjEndereco extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PfjEnderecoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PfjEnderecoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_pfj_endereco field.
     * @var        int
     */
    protected $id_pfj_endereco;

    /**
     * The value for the fk_id_pj_registro field.
     * @var        int
     */
    protected $fk_id_pj_registro;

    /**
     * The value for the fk_id_pf_inscricao field.
     * @var        int
     */
    protected $fk_id_pf_inscricao;

    /**
     * The value for the fk_id_tab_uf field.
     * @var        int
     */
    protected $fk_id_tab_uf;

    /**
     * The value for the fk_id_tab_cep_cidade field.
     * @var        int
     */
    protected $fk_id_tab_cep_cidade;

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
     * The value for the uf field.
     * @var        string
     */
    protected $uf;

    /**
     * The value for the fk_id_tab_correio field.
     * @var        int
     */
    protected $fk_id_tab_correio;

    /**
     * The value for the dt_atualizacao field.
     * @var        string
     */
    protected $dt_atualizacao;

    /**
     * The value for the dt_atualizacao_web field.
     * @var        string
     */
    protected $dt_atualizacao_web;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the ddd_tel field.
     * @var        string
     */
    protected $ddd_tel;

    /**
     * The value for the telefone field.
     * @var        string
     */
    protected $telefone;

    /**
     * The value for the ramal field.
     * @var        string
     */
    protected $ramal;

    /**
     * The value for the ddd_cel field.
     * @var        string
     */
    protected $ddd_cel;

    /**
     * The value for the celular field.
     * @var        string
     */
    protected $celular;

    /**
     * The value for the ddd_fax field.
     * @var        string
     */
    protected $ddd_fax;

    /**
     * The value for the fax field.
     * @var        string
     */
    protected $fax;

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
     * Get the [id_pfj_endereco] column value.
     *
     * @return int
     */
    public function getIdPfjEndereco()
    {

        return $this->id_pfj_endereco;
    }

    /**
     * Get the [fk_id_pj_registro] column value.
     *
     * @return int
     */
    public function getFkIdPjRegistro()
    {

        return $this->fk_id_pj_registro;
    }

    /**
     * Get the [fk_id_pf_inscricao] column value.
     *
     * @return int
     */
    public function getFkIdPfInscricao()
    {

        return $this->fk_id_pf_inscricao;
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
     * Get the [fk_id_tab_cep_cidade] column value.
     *
     * @return int
     */
    public function getFkIdTabCepCidade()
    {

        return $this->fk_id_tab_cep_cidade;
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
     * Get the [uf] column value.
     *
     * @return string
     */
    public function getUf()
    {

        return $this->uf;
    }

    /**
     * Get the [fk_id_tab_correio] column value.
     *
     * @return int
     */
    public function getFkIdTabCorreio()
    {

        return $this->fk_id_tab_correio;
    }

    /**
     * Get the [optionally formatted] temporal [dt_atualizacao] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDtAtualizacao($format = '%x')
    {
        if ($this->dt_atualizacao === null) {
            return null;
        }

        if ($this->dt_atualizacao === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dt_atualizacao);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_atualizacao, true), $x);
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
     * Get the [optionally formatted] temporal [dt_atualizacao_web] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDtAtualizacaoWeb($format = '%x')
    {
        if ($this->dt_atualizacao_web === null) {
            return null;
        }

        if ($this->dt_atualizacao_web === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dt_atualizacao_web);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_atualizacao_web, true), $x);
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
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [ddd_tel] column value.
     *
     * @return string
     */
    public function getDddTel()
    {

        return $this->ddd_tel;
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
     * Get the [ramal] column value.
     *
     * @return string
     */
    public function getRamal()
    {

        return $this->ramal;
    }

    /**
     * Get the [ddd_cel] column value.
     *
     * @return string
     */
    public function getDddCel()
    {

        return $this->ddd_cel;
    }

    /**
     * Get the [celular] column value.
     *
     * @return string
     */
    public function getCelular()
    {

        return $this->celular;
    }

    /**
     * Get the [ddd_fax] column value.
     *
     * @return string
     */
    public function getDddFax()
    {

        return $this->ddd_fax;
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
     * Set the value of [id_pfj_endereco] column.
     *
     * @param  int $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setIdPfjEndereco($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_pfj_endereco !== $v) {
            $this->id_pfj_endereco = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::ID_PFJ_ENDERECO;
        }


        return $this;
    } // setIdPfjEndereco()

    /**
     * Set the value of [fk_id_pj_registro] column.
     *
     * @param  int $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setFkIdPjRegistro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_pj_registro !== $v) {
            $this->fk_id_pj_registro = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::FK_ID_PJ_REGISTRO;
        }


        return $this;
    } // setFkIdPjRegistro()

    /**
     * Set the value of [fk_id_pf_inscricao] column.
     *
     * @param  int $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setFkIdPfInscricao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_pf_inscricao !== $v) {
            $this->fk_id_pf_inscricao = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::FK_ID_PF_INSCRICAO;
        }


        return $this;
    } // setFkIdPfInscricao()

    /**
     * Set the value of [fk_id_tab_uf] column.
     *
     * @param  int $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setFkIdTabUf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_uf !== $v) {
            $this->fk_id_tab_uf = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::FK_ID_TAB_UF;
        }


        return $this;
    } // setFkIdTabUf()

    /**
     * Set the value of [fk_id_tab_cep_cidade] column.
     *
     * @param  int $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setFkIdTabCepCidade($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_cep_cidade !== $v) {
            $this->fk_id_tab_cep_cidade = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::FK_ID_TAB_CEP_CIDADE;
        }


        return $this;
    } // setFkIdTabCepCidade()

    /**
     * Set the value of [endereco] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setEndereco($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->endereco !== $v) {
            $this->endereco = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::ENDERECO;
        }


        return $this;
    } // setEndereco()

    /**
     * Set the value of [bairro] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setBairro($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bairro !== $v) {
            $this->bairro = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::BAIRRO;
        }


        return $this;
    } // setBairro()

    /**
     * Set the value of [cidade] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setCidade($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cidade !== $v) {
            $this->cidade = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::CIDADE;
        }


        return $this;
    } // setCidade()

    /**
     * Set the value of [cep] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setCep($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cep !== $v) {
            $this->cep = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::CEP;
        }


        return $this;
    } // setCep()

    /**
     * Set the value of [uf] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setUf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->uf !== $v) {
            $this->uf = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::UF;
        }


        return $this;
    } // setUf()

    /**
     * Set the value of [fk_id_tab_correio] column.
     *
     * @param  int $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setFkIdTabCorreio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_correio !== $v) {
            $this->fk_id_tab_correio = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::FK_ID_TAB_CORREIO;
        }


        return $this;
    } // setFkIdTabCorreio()

    /**
     * Sets the value of [dt_atualizacao] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setDtAtualizacao($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dt_atualizacao !== null || $dt !== null) {
            $currentDateAsString = ($this->dt_atualizacao !== null && $tmpDt = new DateTime($this->dt_atualizacao)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dt_atualizacao = $newDateAsString;
                $this->modifiedColumns[] = PfjEnderecoPeer::DT_ATUALIZACAO;
            }
        } // if either are not null


        return $this;
    } // setDtAtualizacao()

    /**
     * Sets the value of [dt_atualizacao_web] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setDtAtualizacaoWeb($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dt_atualizacao_web !== null || $dt !== null) {
            $currentDateAsString = ($this->dt_atualizacao_web !== null && $tmpDt = new DateTime($this->dt_atualizacao_web)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dt_atualizacao_web = $newDateAsString;
                $this->modifiedColumns[] = PfjEnderecoPeer::DT_ATUALIZACAO_WEB;
            }
        } // if either are not null


        return $this;
    } // setDtAtualizacaoWeb()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [ddd_tel] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setDddTel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ddd_tel !== $v) {
            $this->ddd_tel = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::DDD_TEL;
        }


        return $this;
    } // setDddTel()

    /**
     * Set the value of [telefone] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setTelefone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->telefone !== $v) {
            $this->telefone = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::TELEFONE;
        }


        return $this;
    } // setTelefone()

    /**
     * Set the value of [ramal] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setRamal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ramal !== $v) {
            $this->ramal = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::RAMAL;
        }


        return $this;
    } // setRamal()

    /**
     * Set the value of [ddd_cel] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setDddCel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ddd_cel !== $v) {
            $this->ddd_cel = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::DDD_CEL;
        }


        return $this;
    } // setDddCel()

    /**
     * Set the value of [celular] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setCelular($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->celular !== $v) {
            $this->celular = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::CELULAR;
        }


        return $this;
    } // setCelular()

    /**
     * Set the value of [ddd_fax] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setDddFax($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ddd_fax !== $v) {
            $this->ddd_fax = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::DDD_FAX;
        }


        return $this;
    } // setDddFax()

    /**
     * Set the value of [fax] column.
     *
     * @param  string $v new value
     * @return PfjEndereco The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = PfjEnderecoPeer::FAX;
        }


        return $this;
    } // setFax()

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

            $this->id_pfj_endereco = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fk_id_pj_registro = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->fk_id_pf_inscricao = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->fk_id_tab_uf = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->fk_id_tab_cep_cidade = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->endereco = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->bairro = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->cidade = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->cep = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->uf = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->fk_id_tab_correio = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->dt_atualizacao = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->dt_atualizacao_web = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->email = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->ddd_tel = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->telefone = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->ramal = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->ddd_cel = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->celular = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->ddd_fax = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->fax = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = PfjEnderecoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PfjEndereco object", $e);
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
            $con = Propel::getConnection(PfjEnderecoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PfjEnderecoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PfjEnderecoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PfjEnderecoQuery::create()
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
            $con = Propel::getConnection(PfjEnderecoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PfjEnderecoPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PfjEnderecoPeer::ID_PFJ_ENDERECO;
        if (null !== $this->id_pfj_endereco) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PfjEnderecoPeer::ID_PFJ_ENDERECO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PfjEnderecoPeer::ID_PFJ_ENDERECO)) {
            $modifiedColumns[':p' . $index++]  = '`id_pfj_endereco`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::FK_ID_PJ_REGISTRO)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_pj_registro`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::FK_ID_PF_INSCRICAO)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_pf_inscricao`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::FK_ID_TAB_UF)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_uf`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::FK_ID_TAB_CEP_CIDADE)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_cep_cidade`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::ENDERECO)) {
            $modifiedColumns[':p' . $index++]  = '`endereco`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::BAIRRO)) {
            $modifiedColumns[':p' . $index++]  = '`bairro`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::CIDADE)) {
            $modifiedColumns[':p' . $index++]  = '`cidade`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::CEP)) {
            $modifiedColumns[':p' . $index++]  = '`cep`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::UF)) {
            $modifiedColumns[':p' . $index++]  = '`uf`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::FK_ID_TAB_CORREIO)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_correio`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::DT_ATUALIZACAO)) {
            $modifiedColumns[':p' . $index++]  = '`dt_atualizacao`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::DT_ATUALIZACAO_WEB)) {
            $modifiedColumns[':p' . $index++]  = '`dt_atualizacao_web`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::DDD_TEL)) {
            $modifiedColumns[':p' . $index++]  = '`ddd_tel`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::TELEFONE)) {
            $modifiedColumns[':p' . $index++]  = '`telefone`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::RAMAL)) {
            $modifiedColumns[':p' . $index++]  = '`ramal`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::DDD_CEL)) {
            $modifiedColumns[':p' . $index++]  = '`ddd_cel`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::CELULAR)) {
            $modifiedColumns[':p' . $index++]  = '`celular`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::DDD_FAX)) {
            $modifiedColumns[':p' . $index++]  = '`ddd_fax`';
        }
        if ($this->isColumnModified(PfjEnderecoPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }

        $sql = sprintf(
            'INSERT INTO `pfj_endereco` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_pfj_endereco`':
                        $stmt->bindValue($identifier, $this->id_pfj_endereco, PDO::PARAM_INT);
                        break;
                    case '`fk_id_pj_registro`':
                        $stmt->bindValue($identifier, $this->fk_id_pj_registro, PDO::PARAM_INT);
                        break;
                    case '`fk_id_pf_inscricao`':
                        $stmt->bindValue($identifier, $this->fk_id_pf_inscricao, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_uf`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_uf, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_cep_cidade`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_cep_cidade, PDO::PARAM_INT);
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
                    case '`uf`':
                        $stmt->bindValue($identifier, $this->uf, PDO::PARAM_STR);
                        break;
                    case '`fk_id_tab_correio`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_correio, PDO::PARAM_INT);
                        break;
                    case '`dt_atualizacao`':
                        $stmt->bindValue($identifier, $this->dt_atualizacao, PDO::PARAM_STR);
                        break;
                    case '`dt_atualizacao_web`':
                        $stmt->bindValue($identifier, $this->dt_atualizacao_web, PDO::PARAM_STR);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`ddd_tel`':
                        $stmt->bindValue($identifier, $this->ddd_tel, PDO::PARAM_STR);
                        break;
                    case '`telefone`':
                        $stmt->bindValue($identifier, $this->telefone, PDO::PARAM_STR);
                        break;
                    case '`ramal`':
                        $stmt->bindValue($identifier, $this->ramal, PDO::PARAM_STR);
                        break;
                    case '`ddd_cel`':
                        $stmt->bindValue($identifier, $this->ddd_cel, PDO::PARAM_STR);
                        break;
                    case '`celular`':
                        $stmt->bindValue($identifier, $this->celular, PDO::PARAM_STR);
                        break;
                    case '`ddd_fax`':
                        $stmt->bindValue($identifier, $this->ddd_fax, PDO::PARAM_STR);
                        break;
                    case '`fax`':
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
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
        $this->setIdPfjEndereco($pk);

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


            if (($retval = PfjEnderecoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PfjEnderecoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdPfjEndereco();
                break;
            case 1:
                return $this->getFkIdPjRegistro();
                break;
            case 2:
                return $this->getFkIdPfInscricao();
                break;
            case 3:
                return $this->getFkIdTabUf();
                break;
            case 4:
                return $this->getFkIdTabCepCidade();
                break;
            case 5:
                return $this->getEndereco();
                break;
            case 6:
                return $this->getBairro();
                break;
            case 7:
                return $this->getCidade();
                break;
            case 8:
                return $this->getCep();
                break;
            case 9:
                return $this->getUf();
                break;
            case 10:
                return $this->getFkIdTabCorreio();
                break;
            case 11:
                return $this->getDtAtualizacao();
                break;
            case 12:
                return $this->getDtAtualizacaoWeb();
                break;
            case 13:
                return $this->getEmail();
                break;
            case 14:
                return $this->getDddTel();
                break;
            case 15:
                return $this->getTelefone();
                break;
            case 16:
                return $this->getRamal();
                break;
            case 17:
                return $this->getDddCel();
                break;
            case 18:
                return $this->getCelular();
                break;
            case 19:
                return $this->getDddFax();
                break;
            case 20:
                return $this->getFax();
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
        if (isset($alreadyDumpedObjects['PfjEndereco'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PfjEndereco'][$this->getPrimaryKey()] = true;
        $keys = PfjEnderecoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPfjEndereco(),
            $keys[1] => $this->getFkIdPjRegistro(),
            $keys[2] => $this->getFkIdPfInscricao(),
            $keys[3] => $this->getFkIdTabUf(),
            $keys[4] => $this->getFkIdTabCepCidade(),
            $keys[5] => $this->getEndereco(),
            $keys[6] => $this->getBairro(),
            $keys[7] => $this->getCidade(),
            $keys[8] => $this->getCep(),
            $keys[9] => $this->getUf(),
            $keys[10] => $this->getFkIdTabCorreio(),
            $keys[11] => $this->getDtAtualizacao(),
            $keys[12] => $this->getDtAtualizacaoWeb(),
            $keys[13] => $this->getEmail(),
            $keys[14] => $this->getDddTel(),
            $keys[15] => $this->getTelefone(),
            $keys[16] => $this->getRamal(),
            $keys[17] => $this->getDddCel(),
            $keys[18] => $this->getCelular(),
            $keys[19] => $this->getDddFax(),
            $keys[20] => $this->getFax(),
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
        $pos = PfjEnderecoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdPfjEndereco($value);
                break;
            case 1:
                $this->setFkIdPjRegistro($value);
                break;
            case 2:
                $this->setFkIdPfInscricao($value);
                break;
            case 3:
                $this->setFkIdTabUf($value);
                break;
            case 4:
                $this->setFkIdTabCepCidade($value);
                break;
            case 5:
                $this->setEndereco($value);
                break;
            case 6:
                $this->setBairro($value);
                break;
            case 7:
                $this->setCidade($value);
                break;
            case 8:
                $this->setCep($value);
                break;
            case 9:
                $this->setUf($value);
                break;
            case 10:
                $this->setFkIdTabCorreio($value);
                break;
            case 11:
                $this->setDtAtualizacao($value);
                break;
            case 12:
                $this->setDtAtualizacaoWeb($value);
                break;
            case 13:
                $this->setEmail($value);
                break;
            case 14:
                $this->setDddTel($value);
                break;
            case 15:
                $this->setTelefone($value);
                break;
            case 16:
                $this->setRamal($value);
                break;
            case 17:
                $this->setDddCel($value);
                break;
            case 18:
                $this->setCelular($value);
                break;
            case 19:
                $this->setDddFax($value);
                break;
            case 20:
                $this->setFax($value);
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
        $keys = PfjEnderecoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdPfjEndereco($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFkIdPjRegistro($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFkIdPfInscricao($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFkIdTabUf($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFkIdTabCepCidade($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEndereco($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setBairro($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCidade($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCep($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUf($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFkIdTabCorreio($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDtAtualizacao($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDtAtualizacaoWeb($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEmail($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDddTel($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTelefone($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRamal($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDddCel($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setCelular($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDddFax($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setFax($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PfjEnderecoPeer::DATABASE_NAME);

        if ($this->isColumnModified(PfjEnderecoPeer::ID_PFJ_ENDERECO)) $criteria->add(PfjEnderecoPeer::ID_PFJ_ENDERECO, $this->id_pfj_endereco);
        if ($this->isColumnModified(PfjEnderecoPeer::FK_ID_PJ_REGISTRO)) $criteria->add(PfjEnderecoPeer::FK_ID_PJ_REGISTRO, $this->fk_id_pj_registro);
        if ($this->isColumnModified(PfjEnderecoPeer::FK_ID_PF_INSCRICAO)) $criteria->add(PfjEnderecoPeer::FK_ID_PF_INSCRICAO, $this->fk_id_pf_inscricao);
        if ($this->isColumnModified(PfjEnderecoPeer::FK_ID_TAB_UF)) $criteria->add(PfjEnderecoPeer::FK_ID_TAB_UF, $this->fk_id_tab_uf);
        if ($this->isColumnModified(PfjEnderecoPeer::FK_ID_TAB_CEP_CIDADE)) $criteria->add(PfjEnderecoPeer::FK_ID_TAB_CEP_CIDADE, $this->fk_id_tab_cep_cidade);
        if ($this->isColumnModified(PfjEnderecoPeer::ENDERECO)) $criteria->add(PfjEnderecoPeer::ENDERECO, $this->endereco);
        if ($this->isColumnModified(PfjEnderecoPeer::BAIRRO)) $criteria->add(PfjEnderecoPeer::BAIRRO, $this->bairro);
        if ($this->isColumnModified(PfjEnderecoPeer::CIDADE)) $criteria->add(PfjEnderecoPeer::CIDADE, $this->cidade);
        if ($this->isColumnModified(PfjEnderecoPeer::CEP)) $criteria->add(PfjEnderecoPeer::CEP, $this->cep);
        if ($this->isColumnModified(PfjEnderecoPeer::UF)) $criteria->add(PfjEnderecoPeer::UF, $this->uf);
        if ($this->isColumnModified(PfjEnderecoPeer::FK_ID_TAB_CORREIO)) $criteria->add(PfjEnderecoPeer::FK_ID_TAB_CORREIO, $this->fk_id_tab_correio);
        if ($this->isColumnModified(PfjEnderecoPeer::DT_ATUALIZACAO)) $criteria->add(PfjEnderecoPeer::DT_ATUALIZACAO, $this->dt_atualizacao);
        if ($this->isColumnModified(PfjEnderecoPeer::DT_ATUALIZACAO_WEB)) $criteria->add(PfjEnderecoPeer::DT_ATUALIZACAO_WEB, $this->dt_atualizacao_web);
        if ($this->isColumnModified(PfjEnderecoPeer::EMAIL)) $criteria->add(PfjEnderecoPeer::EMAIL, $this->email);
        if ($this->isColumnModified(PfjEnderecoPeer::DDD_TEL)) $criteria->add(PfjEnderecoPeer::DDD_TEL, $this->ddd_tel);
        if ($this->isColumnModified(PfjEnderecoPeer::TELEFONE)) $criteria->add(PfjEnderecoPeer::TELEFONE, $this->telefone);
        if ($this->isColumnModified(PfjEnderecoPeer::RAMAL)) $criteria->add(PfjEnderecoPeer::RAMAL, $this->ramal);
        if ($this->isColumnModified(PfjEnderecoPeer::DDD_CEL)) $criteria->add(PfjEnderecoPeer::DDD_CEL, $this->ddd_cel);
        if ($this->isColumnModified(PfjEnderecoPeer::CELULAR)) $criteria->add(PfjEnderecoPeer::CELULAR, $this->celular);
        if ($this->isColumnModified(PfjEnderecoPeer::DDD_FAX)) $criteria->add(PfjEnderecoPeer::DDD_FAX, $this->ddd_fax);
        if ($this->isColumnModified(PfjEnderecoPeer::FAX)) $criteria->add(PfjEnderecoPeer::FAX, $this->fax);

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
        $criteria = new Criteria(PfjEnderecoPeer::DATABASE_NAME);
        $criteria->add(PfjEnderecoPeer::ID_PFJ_ENDERECO, $this->id_pfj_endereco);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdPfjEndereco();
    }

    /**
     * Generic method to set the primary key (id_pfj_endereco column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPfjEndereco($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdPfjEndereco();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of PfjEndereco (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkIdPjRegistro($this->getFkIdPjRegistro());
        $copyObj->setFkIdPfInscricao($this->getFkIdPfInscricao());
        $copyObj->setFkIdTabUf($this->getFkIdTabUf());
        $copyObj->setFkIdTabCepCidade($this->getFkIdTabCepCidade());
        $copyObj->setEndereco($this->getEndereco());
        $copyObj->setBairro($this->getBairro());
        $copyObj->setCidade($this->getCidade());
        $copyObj->setCep($this->getCep());
        $copyObj->setUf($this->getUf());
        $copyObj->setFkIdTabCorreio($this->getFkIdTabCorreio());
        $copyObj->setDtAtualizacao($this->getDtAtualizacao());
        $copyObj->setDtAtualizacaoWeb($this->getDtAtualizacaoWeb());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setDddTel($this->getDddTel());
        $copyObj->setTelefone($this->getTelefone());
        $copyObj->setRamal($this->getRamal());
        $copyObj->setDddCel($this->getDddCel());
        $copyObj->setCelular($this->getCelular());
        $copyObj->setDddFax($this->getDddFax());
        $copyObj->setFax($this->getFax());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPfjEndereco(NULL); // this is a auto-increment column, so set to default value
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
     * @return PfjEndereco Clone of current object.
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
     * @return PfjEnderecoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PfjEnderecoPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_pfj_endereco = null;
        $this->fk_id_pj_registro = null;
        $this->fk_id_pf_inscricao = null;
        $this->fk_id_tab_uf = null;
        $this->fk_id_tab_cep_cidade = null;
        $this->endereco = null;
        $this->bairro = null;
        $this->cidade = null;
        $this->cep = null;
        $this->uf = null;
        $this->fk_id_tab_correio = null;
        $this->dt_atualizacao = null;
        $this->dt_atualizacao_web = null;
        $this->email = null;
        $this->ddd_tel = null;
        $this->telefone = null;
        $this->ramal = null;
        $this->ddd_cel = null;
        $this->celular = null;
        $this->ddd_fax = null;
        $this->fax = null;
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
        return (string) $this->exportTo(PfjEnderecoPeer::DEFAULT_STRING_FORMAT);
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
