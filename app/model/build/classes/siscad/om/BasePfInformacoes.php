<?php


/**
 * Base class that represents a row from the 'pf_informacoes' table.
 *
 *
 *
 * @package    propel.generator.siscad.om
 */
abstract class BasePfInformacoes extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PfInformacoesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PfInformacoesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_pf_informacoes field.
     * @var        int
     */
    protected $id_pf_informacoes;

    /**
     * The value for the fk_id_tab_nacionalidade field.
     * @var        int
     */
    protected $fk_id_tab_nacionalidade;

    /**
     * The value for the fk_id_tab_estado_civil field.
     * @var        int
     */
    protected $fk_id_tab_estado_civil;

    /**
     * The value for the fk_id_tab_tipo_sanguineo field.
     * @var        int
     */
    protected $fk_id_tab_tipo_sanguineo;

    /**
     * The value for the fk_id_tab_faixa_salarial field.
     * @var        int
     */
    protected $fk_id_tab_faixa_salarial;

    /**
     * The value for the mae field.
     * @var        string
     */
    protected $mae;

    /**
     * The value for the pai field.
     * @var        string
     */
    protected $pai;

    /**
     * The value for the dt_nascimento field.
     * @var        string
     */
    protected $dt_nascimento;

    /**
     * The value for the naturalidade field.
     * @var        string
     */
    protected $naturalidade;

    /**
     * The value for the uf_naturalidade field.
     * @var        string
     */
    protected $uf_naturalidade;

    /**
     * The value for the sexo field.
     * @var        string
     */
    protected $sexo;

    /**
     * The value for the rg_nro field.
     * @var        string
     */
    protected $rg_nro;

    /**
     * The value for the rg_orgao_expedidor field.
     * @var        string
     */
    protected $rg_orgao_expedidor;

    /**
     * The value for the rg_dt_expedicao field.
     * @var        string
     */
    protected $rg_dt_expedicao;

    /**
     * The value for the certificado_militar field.
     * @var        string
     */
    protected $certificado_militar;

    /**
     * The value for the titulo_eleitor field.
     * @var        string
     */
    protected $titulo_eleitor;

    /**
     * The value for the ctps_numero field.
     * @var        string
     */
    protected $ctps_numero;

    /**
     * The value for the ctps_serie field.
     * @var        string
     */
    protected $ctps_serie;

    /**
     * The value for the ctps_dt_expedicao field.
     * @var        string
     */
    protected $ctps_dt_expedicao;

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
     * Get the [id_pf_informacoes] column value.
     *
     * @return int
     */
    public function getIdPfInformacoes()
    {

        return $this->id_pf_informacoes;
    }

    /**
     * Get the [fk_id_tab_nacionalidade] column value.
     *
     * @return int
     */
    public function getFkIdTabNacionalidade()
    {

        return $this->fk_id_tab_nacionalidade;
    }

    /**
     * Get the [fk_id_tab_estado_civil] column value.
     *
     * @return int
     */
    public function getFkIdTabEstadoCivil()
    {

        return $this->fk_id_tab_estado_civil;
    }

    /**
     * Get the [fk_id_tab_tipo_sanguineo] column value.
     *
     * @return int
     */
    public function getFkIdTabTipoSanguineo()
    {

        return $this->fk_id_tab_tipo_sanguineo;
    }

    /**
     * Get the [fk_id_tab_faixa_salarial] column value.
     *
     * @return int
     */
    public function getFkIdTabFaixaSalarial()
    {

        return $this->fk_id_tab_faixa_salarial;
    }

    /**
     * Get the [mae] column value.
     *
     * @return string
     */
    public function getMae()
    {

        return $this->mae;
    }

    /**
     * Get the [pai] column value.
     *
     * @return string
     */
    public function getPai()
    {

        return $this->pai;
    }

    /**
     * Get the [optionally formatted] temporal [dt_nascimento] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDtNascimento($format = '%x')
    {
        if ($this->dt_nascimento === null) {
            return null;
        }

        if ($this->dt_nascimento === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dt_nascimento);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_nascimento, true), $x);
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
     * Get the [naturalidade] column value.
     *
     * @return string
     */
    public function getNaturalidade()
    {

        return $this->naturalidade;
    }

    /**
     * Get the [uf_naturalidade] column value.
     *
     * @return string
     */
    public function getUfNaturalidade()
    {

        return $this->uf_naturalidade;
    }

    /**
     * Get the [sexo] column value.
     *
     * @return string
     */
    public function getSexo()
    {

        return $this->sexo;
    }

    /**
     * Get the [rg_nro] column value.
     *
     * @return string
     */
    public function getRgNro()
    {

        return $this->rg_nro;
    }

    /**
     * Get the [rg_orgao_expedidor] column value.
     *
     * @return string
     */
    public function getRgOrgaoExpedidor()
    {

        return $this->rg_orgao_expedidor;
    }

    /**
     * Get the [optionally formatted] temporal [rg_dt_expedicao] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getRgDtExpedicao($format = '%x')
    {
        if ($this->rg_dt_expedicao === null) {
            return null;
        }

        if ($this->rg_dt_expedicao === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->rg_dt_expedicao);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->rg_dt_expedicao, true), $x);
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
     * Get the [certificado_militar] column value.
     *
     * @return string
     */
    public function getCertificadoMilitar()
    {

        return $this->certificado_militar;
    }

    /**
     * Get the [titulo_eleitor] column value.
     *
     * @return string
     */
    public function getTituloEleitor()
    {

        return $this->titulo_eleitor;
    }

    /**
     * Get the [ctps_numero] column value.
     *
     * @return string
     */
    public function getCtpsNumero()
    {

        return $this->ctps_numero;
    }

    /**
     * Get the [ctps_serie] column value.
     *
     * @return string
     */
    public function getCtpsSerie()
    {

        return $this->ctps_serie;
    }

    /**
     * Get the [optionally formatted] temporal [ctps_dt_expedicao] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCtpsDtExpedicao($format = '%x')
    {
        if ($this->ctps_dt_expedicao === null) {
            return null;
        }

        if ($this->ctps_dt_expedicao === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->ctps_dt_expedicao);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->ctps_dt_expedicao, true), $x);
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
     * Set the value of [id_pf_informacoes] column.
     *
     * @param  int $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setIdPfInformacoes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_pf_informacoes !== $v) {
            $this->id_pf_informacoes = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::ID_PF_INFORMACOES;
        }


        return $this;
    } // setIdPfInformacoes()

    /**
     * Set the value of [fk_id_tab_nacionalidade] column.
     *
     * @param  int $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setFkIdTabNacionalidade($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_nacionalidade !== $v) {
            $this->fk_id_tab_nacionalidade = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::FK_ID_TAB_NACIONALIDADE;
        }


        return $this;
    } // setFkIdTabNacionalidade()

    /**
     * Set the value of [fk_id_tab_estado_civil] column.
     *
     * @param  int $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setFkIdTabEstadoCivil($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_estado_civil !== $v) {
            $this->fk_id_tab_estado_civil = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::FK_ID_TAB_ESTADO_CIVIL;
        }


        return $this;
    } // setFkIdTabEstadoCivil()

    /**
     * Set the value of [fk_id_tab_tipo_sanguineo] column.
     *
     * @param  int $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setFkIdTabTipoSanguineo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_tipo_sanguineo !== $v) {
            $this->fk_id_tab_tipo_sanguineo = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::FK_ID_TAB_TIPO_SANGUINEO;
        }


        return $this;
    } // setFkIdTabTipoSanguineo()

    /**
     * Set the value of [fk_id_tab_faixa_salarial] column.
     *
     * @param  int $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setFkIdTabFaixaSalarial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_tab_faixa_salarial !== $v) {
            $this->fk_id_tab_faixa_salarial = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::FK_ID_TAB_FAIXA_SALARIAL;
        }


        return $this;
    } // setFkIdTabFaixaSalarial()

    /**
     * Set the value of [mae] column.
     *
     * @param  string $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setMae($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mae !== $v) {
            $this->mae = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::MAE;
        }


        return $this;
    } // setMae()

    /**
     * Set the value of [pai] column.
     *
     * @param  string $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setPai($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pai !== $v) {
            $this->pai = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::PAI;
        }


        return $this;
    } // setPai()

    /**
     * Sets the value of [dt_nascimento] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setDtNascimento($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dt_nascimento !== null || $dt !== null) {
            $currentDateAsString = ($this->dt_nascimento !== null && $tmpDt = new DateTime($this->dt_nascimento)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dt_nascimento = $newDateAsString;
                $this->modifiedColumns[] = PfInformacoesPeer::DT_NASCIMENTO;
            }
        } // if either are not null


        return $this;
    } // setDtNascimento()

    /**
     * Set the value of [naturalidade] column.
     *
     * @param  string $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setNaturalidade($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naturalidade !== $v) {
            $this->naturalidade = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::NATURALIDADE;
        }


        return $this;
    } // setNaturalidade()

    /**
     * Set the value of [uf_naturalidade] column.
     *
     * @param  string $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setUfNaturalidade($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->uf_naturalidade !== $v) {
            $this->uf_naturalidade = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::UF_NATURALIDADE;
        }


        return $this;
    } // setUfNaturalidade()

    /**
     * Set the value of [sexo] column.
     *
     * @param  string $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setSexo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sexo !== $v) {
            $this->sexo = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::SEXO;
        }


        return $this;
    } // setSexo()

    /**
     * Set the value of [rg_nro] column.
     *
     * @param  string $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setRgNro($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rg_nro !== $v) {
            $this->rg_nro = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::RG_NRO;
        }


        return $this;
    } // setRgNro()

    /**
     * Set the value of [rg_orgao_expedidor] column.
     *
     * @param  string $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setRgOrgaoExpedidor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rg_orgao_expedidor !== $v) {
            $this->rg_orgao_expedidor = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::RG_ORGAO_EXPEDIDOR;
        }


        return $this;
    } // setRgOrgaoExpedidor()

    /**
     * Sets the value of [rg_dt_expedicao] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setRgDtExpedicao($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->rg_dt_expedicao !== null || $dt !== null) {
            $currentDateAsString = ($this->rg_dt_expedicao !== null && $tmpDt = new DateTime($this->rg_dt_expedicao)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->rg_dt_expedicao = $newDateAsString;
                $this->modifiedColumns[] = PfInformacoesPeer::RG_DT_EXPEDICAO;
            }
        } // if either are not null


        return $this;
    } // setRgDtExpedicao()

    /**
     * Set the value of [certificado_militar] column.
     *
     * @param  string $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setCertificadoMilitar($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->certificado_militar !== $v) {
            $this->certificado_militar = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::CERTIFICADO_MILITAR;
        }


        return $this;
    } // setCertificadoMilitar()

    /**
     * Set the value of [titulo_eleitor] column.
     *
     * @param  string $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setTituloEleitor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->titulo_eleitor !== $v) {
            $this->titulo_eleitor = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::TITULO_ELEITOR;
        }


        return $this;
    } // setTituloEleitor()

    /**
     * Set the value of [ctps_numero] column.
     *
     * @param  string $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setCtpsNumero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ctps_numero !== $v) {
            $this->ctps_numero = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::CTPS_NUMERO;
        }


        return $this;
    } // setCtpsNumero()

    /**
     * Set the value of [ctps_serie] column.
     *
     * @param  string $v new value
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setCtpsSerie($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ctps_serie !== $v) {
            $this->ctps_serie = $v;
            $this->modifiedColumns[] = PfInformacoesPeer::CTPS_SERIE;
        }


        return $this;
    } // setCtpsSerie()

    /**
     * Sets the value of [ctps_dt_expedicao] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInformacoes The current object (for fluent API support)
     */
    public function setCtpsDtExpedicao($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ctps_dt_expedicao !== null || $dt !== null) {
            $currentDateAsString = ($this->ctps_dt_expedicao !== null && $tmpDt = new DateTime($this->ctps_dt_expedicao)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ctps_dt_expedicao = $newDateAsString;
                $this->modifiedColumns[] = PfInformacoesPeer::CTPS_DT_EXPEDICAO;
            }
        } // if either are not null


        return $this;
    } // setCtpsDtExpedicao()

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

            $this->id_pf_informacoes = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fk_id_tab_nacionalidade = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->fk_id_tab_estado_civil = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->fk_id_tab_tipo_sanguineo = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->fk_id_tab_faixa_salarial = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->mae = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->pai = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->dt_nascimento = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->naturalidade = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->uf_naturalidade = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->sexo = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->rg_nro = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->rg_orgao_expedidor = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->rg_dt_expedicao = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->certificado_militar = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->titulo_eleitor = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->ctps_numero = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->ctps_serie = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->ctps_dt_expedicao = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 19; // 19 = PfInformacoesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PfInformacoes object", $e);
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
            $con = Propel::getConnection(PfInformacoesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PfInformacoesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PfInformacoesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PfInformacoesQuery::create()
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
            $con = Propel::getConnection(PfInformacoesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PfInformacoesPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PfInformacoesPeer::ID_PF_INFORMACOES;
        if (null !== $this->id_pf_informacoes) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PfInformacoesPeer::ID_PF_INFORMACOES . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PfInformacoesPeer::ID_PF_INFORMACOES)) {
            $modifiedColumns[':p' . $index++]  = '`id_pf_informacoes`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::FK_ID_TAB_NACIONALIDADE)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_nacionalidade`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::FK_ID_TAB_ESTADO_CIVIL)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_estado_civil`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::FK_ID_TAB_TIPO_SANGUINEO)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_tipo_sanguineo`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::FK_ID_TAB_FAIXA_SALARIAL)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_tab_faixa_salarial`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::MAE)) {
            $modifiedColumns[':p' . $index++]  = '`mae`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::PAI)) {
            $modifiedColumns[':p' . $index++]  = '`pai`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::DT_NASCIMENTO)) {
            $modifiedColumns[':p' . $index++]  = '`dt_nascimento`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::NATURALIDADE)) {
            $modifiedColumns[':p' . $index++]  = '`naturalidade`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::UF_NATURALIDADE)) {
            $modifiedColumns[':p' . $index++]  = '`uf_naturalidade`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::SEXO)) {
            $modifiedColumns[':p' . $index++]  = '`sexo`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::RG_NRO)) {
            $modifiedColumns[':p' . $index++]  = '`rg_nro`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::RG_ORGAO_EXPEDIDOR)) {
            $modifiedColumns[':p' . $index++]  = '`rg_orgao_expedidor`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::RG_DT_EXPEDICAO)) {
            $modifiedColumns[':p' . $index++]  = '`rg_dt_expedicao`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::CERTIFICADO_MILITAR)) {
            $modifiedColumns[':p' . $index++]  = '`certificado_militar`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::TITULO_ELEITOR)) {
            $modifiedColumns[':p' . $index++]  = '`titulo_eleitor`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::CTPS_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`ctps_numero`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::CTPS_SERIE)) {
            $modifiedColumns[':p' . $index++]  = '`ctps_serie`';
        }
        if ($this->isColumnModified(PfInformacoesPeer::CTPS_DT_EXPEDICAO)) {
            $modifiedColumns[':p' . $index++]  = '`ctps_dt_expedicao`';
        }

        $sql = sprintf(
            'INSERT INTO `pf_informacoes` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_pf_informacoes`':
                        $stmt->bindValue($identifier, $this->id_pf_informacoes, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_nacionalidade`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_nacionalidade, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_estado_civil`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_estado_civil, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_tipo_sanguineo`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_tipo_sanguineo, PDO::PARAM_INT);
                        break;
                    case '`fk_id_tab_faixa_salarial`':
                        $stmt->bindValue($identifier, $this->fk_id_tab_faixa_salarial, PDO::PARAM_INT);
                        break;
                    case '`mae`':
                        $stmt->bindValue($identifier, $this->mae, PDO::PARAM_STR);
                        break;
                    case '`pai`':
                        $stmt->bindValue($identifier, $this->pai, PDO::PARAM_STR);
                        break;
                    case '`dt_nascimento`':
                        $stmt->bindValue($identifier, $this->dt_nascimento, PDO::PARAM_STR);
                        break;
                    case '`naturalidade`':
                        $stmt->bindValue($identifier, $this->naturalidade, PDO::PARAM_STR);
                        break;
                    case '`uf_naturalidade`':
                        $stmt->bindValue($identifier, $this->uf_naturalidade, PDO::PARAM_STR);
                        break;
                    case '`sexo`':
                        $stmt->bindValue($identifier, $this->sexo, PDO::PARAM_STR);
                        break;
                    case '`rg_nro`':
                        $stmt->bindValue($identifier, $this->rg_nro, PDO::PARAM_STR);
                        break;
                    case '`rg_orgao_expedidor`':
                        $stmt->bindValue($identifier, $this->rg_orgao_expedidor, PDO::PARAM_STR);
                        break;
                    case '`rg_dt_expedicao`':
                        $stmt->bindValue($identifier, $this->rg_dt_expedicao, PDO::PARAM_STR);
                        break;
                    case '`certificado_militar`':
                        $stmt->bindValue($identifier, $this->certificado_militar, PDO::PARAM_STR);
                        break;
                    case '`titulo_eleitor`':
                        $stmt->bindValue($identifier, $this->titulo_eleitor, PDO::PARAM_STR);
                        break;
                    case '`ctps_numero`':
                        $stmt->bindValue($identifier, $this->ctps_numero, PDO::PARAM_STR);
                        break;
                    case '`ctps_serie`':
                        $stmt->bindValue($identifier, $this->ctps_serie, PDO::PARAM_STR);
                        break;
                    case '`ctps_dt_expedicao`':
                        $stmt->bindValue($identifier, $this->ctps_dt_expedicao, PDO::PARAM_STR);
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
        $this->setIdPfInformacoes($pk);

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


            if (($retval = PfInformacoesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PfInformacoesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdPfInformacoes();
                break;
            case 1:
                return $this->getFkIdTabNacionalidade();
                break;
            case 2:
                return $this->getFkIdTabEstadoCivil();
                break;
            case 3:
                return $this->getFkIdTabTipoSanguineo();
                break;
            case 4:
                return $this->getFkIdTabFaixaSalarial();
                break;
            case 5:
                return $this->getMae();
                break;
            case 6:
                return $this->getPai();
                break;
            case 7:
                return $this->getDtNascimento();
                break;
            case 8:
                return $this->getNaturalidade();
                break;
            case 9:
                return $this->getUfNaturalidade();
                break;
            case 10:
                return $this->getSexo();
                break;
            case 11:
                return $this->getRgNro();
                break;
            case 12:
                return $this->getRgOrgaoExpedidor();
                break;
            case 13:
                return $this->getRgDtExpedicao();
                break;
            case 14:
                return $this->getCertificadoMilitar();
                break;
            case 15:
                return $this->getTituloEleitor();
                break;
            case 16:
                return $this->getCtpsNumero();
                break;
            case 17:
                return $this->getCtpsSerie();
                break;
            case 18:
                return $this->getCtpsDtExpedicao();
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
        if (isset($alreadyDumpedObjects['PfInformacoes'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PfInformacoes'][$this->getPrimaryKey()] = true;
        $keys = PfInformacoesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPfInformacoes(),
            $keys[1] => $this->getFkIdTabNacionalidade(),
            $keys[2] => $this->getFkIdTabEstadoCivil(),
            $keys[3] => $this->getFkIdTabTipoSanguineo(),
            $keys[4] => $this->getFkIdTabFaixaSalarial(),
            $keys[5] => $this->getMae(),
            $keys[6] => $this->getPai(),
            $keys[7] => $this->getDtNascimento(),
            $keys[8] => $this->getNaturalidade(),
            $keys[9] => $this->getUfNaturalidade(),
            $keys[10] => $this->getSexo(),
            $keys[11] => $this->getRgNro(),
            $keys[12] => $this->getRgOrgaoExpedidor(),
            $keys[13] => $this->getRgDtExpedicao(),
            $keys[14] => $this->getCertificadoMilitar(),
            $keys[15] => $this->getTituloEleitor(),
            $keys[16] => $this->getCtpsNumero(),
            $keys[17] => $this->getCtpsSerie(),
            $keys[18] => $this->getCtpsDtExpedicao(),
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
        $pos = PfInformacoesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdPfInformacoes($value);
                break;
            case 1:
                $this->setFkIdTabNacionalidade($value);
                break;
            case 2:
                $this->setFkIdTabEstadoCivil($value);
                break;
            case 3:
                $this->setFkIdTabTipoSanguineo($value);
                break;
            case 4:
                $this->setFkIdTabFaixaSalarial($value);
                break;
            case 5:
                $this->setMae($value);
                break;
            case 6:
                $this->setPai($value);
                break;
            case 7:
                $this->setDtNascimento($value);
                break;
            case 8:
                $this->setNaturalidade($value);
                break;
            case 9:
                $this->setUfNaturalidade($value);
                break;
            case 10:
                $this->setSexo($value);
                break;
            case 11:
                $this->setRgNro($value);
                break;
            case 12:
                $this->setRgOrgaoExpedidor($value);
                break;
            case 13:
                $this->setRgDtExpedicao($value);
                break;
            case 14:
                $this->setCertificadoMilitar($value);
                break;
            case 15:
                $this->setTituloEleitor($value);
                break;
            case 16:
                $this->setCtpsNumero($value);
                break;
            case 17:
                $this->setCtpsSerie($value);
                break;
            case 18:
                $this->setCtpsDtExpedicao($value);
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
        $keys = PfInformacoesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdPfInformacoes($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFkIdTabNacionalidade($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFkIdTabEstadoCivil($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFkIdTabTipoSanguineo($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFkIdTabFaixaSalarial($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMae($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPai($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDtNascimento($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNaturalidade($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUfNaturalidade($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSexo($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setRgNro($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRgOrgaoExpedidor($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setRgDtExpedicao($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCertificadoMilitar($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTituloEleitor($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setCtpsNumero($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCtpsSerie($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setCtpsDtExpedicao($arr[$keys[18]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PfInformacoesPeer::DATABASE_NAME);

        if ($this->isColumnModified(PfInformacoesPeer::ID_PF_INFORMACOES)) $criteria->add(PfInformacoesPeer::ID_PF_INFORMACOES, $this->id_pf_informacoes);
        if ($this->isColumnModified(PfInformacoesPeer::FK_ID_TAB_NACIONALIDADE)) $criteria->add(PfInformacoesPeer::FK_ID_TAB_NACIONALIDADE, $this->fk_id_tab_nacionalidade);
        if ($this->isColumnModified(PfInformacoesPeer::FK_ID_TAB_ESTADO_CIVIL)) $criteria->add(PfInformacoesPeer::FK_ID_TAB_ESTADO_CIVIL, $this->fk_id_tab_estado_civil);
        if ($this->isColumnModified(PfInformacoesPeer::FK_ID_TAB_TIPO_SANGUINEO)) $criteria->add(PfInformacoesPeer::FK_ID_TAB_TIPO_SANGUINEO, $this->fk_id_tab_tipo_sanguineo);
        if ($this->isColumnModified(PfInformacoesPeer::FK_ID_TAB_FAIXA_SALARIAL)) $criteria->add(PfInformacoesPeer::FK_ID_TAB_FAIXA_SALARIAL, $this->fk_id_tab_faixa_salarial);
        if ($this->isColumnModified(PfInformacoesPeer::MAE)) $criteria->add(PfInformacoesPeer::MAE, $this->mae);
        if ($this->isColumnModified(PfInformacoesPeer::PAI)) $criteria->add(PfInformacoesPeer::PAI, $this->pai);
        if ($this->isColumnModified(PfInformacoesPeer::DT_NASCIMENTO)) $criteria->add(PfInformacoesPeer::DT_NASCIMENTO, $this->dt_nascimento);
        if ($this->isColumnModified(PfInformacoesPeer::NATURALIDADE)) $criteria->add(PfInformacoesPeer::NATURALIDADE, $this->naturalidade);
        if ($this->isColumnModified(PfInformacoesPeer::UF_NATURALIDADE)) $criteria->add(PfInformacoesPeer::UF_NATURALIDADE, $this->uf_naturalidade);
        if ($this->isColumnModified(PfInformacoesPeer::SEXO)) $criteria->add(PfInformacoesPeer::SEXO, $this->sexo);
        if ($this->isColumnModified(PfInformacoesPeer::RG_NRO)) $criteria->add(PfInformacoesPeer::RG_NRO, $this->rg_nro);
        if ($this->isColumnModified(PfInformacoesPeer::RG_ORGAO_EXPEDIDOR)) $criteria->add(PfInformacoesPeer::RG_ORGAO_EXPEDIDOR, $this->rg_orgao_expedidor);
        if ($this->isColumnModified(PfInformacoesPeer::RG_DT_EXPEDICAO)) $criteria->add(PfInformacoesPeer::RG_DT_EXPEDICAO, $this->rg_dt_expedicao);
        if ($this->isColumnModified(PfInformacoesPeer::CERTIFICADO_MILITAR)) $criteria->add(PfInformacoesPeer::CERTIFICADO_MILITAR, $this->certificado_militar);
        if ($this->isColumnModified(PfInformacoesPeer::TITULO_ELEITOR)) $criteria->add(PfInformacoesPeer::TITULO_ELEITOR, $this->titulo_eleitor);
        if ($this->isColumnModified(PfInformacoesPeer::CTPS_NUMERO)) $criteria->add(PfInformacoesPeer::CTPS_NUMERO, $this->ctps_numero);
        if ($this->isColumnModified(PfInformacoesPeer::CTPS_SERIE)) $criteria->add(PfInformacoesPeer::CTPS_SERIE, $this->ctps_serie);
        if ($this->isColumnModified(PfInformacoesPeer::CTPS_DT_EXPEDICAO)) $criteria->add(PfInformacoesPeer::CTPS_DT_EXPEDICAO, $this->ctps_dt_expedicao);

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
        $criteria = new Criteria(PfInformacoesPeer::DATABASE_NAME);
        $criteria->add(PfInformacoesPeer::ID_PF_INFORMACOES, $this->id_pf_informacoes);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdPfInformacoes();
    }

    /**
     * Generic method to set the primary key (id_pf_informacoes column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPfInformacoes($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdPfInformacoes();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of PfInformacoes (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkIdTabNacionalidade($this->getFkIdTabNacionalidade());
        $copyObj->setFkIdTabEstadoCivil($this->getFkIdTabEstadoCivil());
        $copyObj->setFkIdTabTipoSanguineo($this->getFkIdTabTipoSanguineo());
        $copyObj->setFkIdTabFaixaSalarial($this->getFkIdTabFaixaSalarial());
        $copyObj->setMae($this->getMae());
        $copyObj->setPai($this->getPai());
        $copyObj->setDtNascimento($this->getDtNascimento());
        $copyObj->setNaturalidade($this->getNaturalidade());
        $copyObj->setUfNaturalidade($this->getUfNaturalidade());
        $copyObj->setSexo($this->getSexo());
        $copyObj->setRgNro($this->getRgNro());
        $copyObj->setRgOrgaoExpedidor($this->getRgOrgaoExpedidor());
        $copyObj->setRgDtExpedicao($this->getRgDtExpedicao());
        $copyObj->setCertificadoMilitar($this->getCertificadoMilitar());
        $copyObj->setTituloEleitor($this->getTituloEleitor());
        $copyObj->setCtpsNumero($this->getCtpsNumero());
        $copyObj->setCtpsSerie($this->getCtpsSerie());
        $copyObj->setCtpsDtExpedicao($this->getCtpsDtExpedicao());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPfInformacoes(NULL); // this is a auto-increment column, so set to default value
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
     * @return PfInformacoes Clone of current object.
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
     * @return PfInformacoesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PfInformacoesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_pf_informacoes = null;
        $this->fk_id_tab_nacionalidade = null;
        $this->fk_id_tab_estado_civil = null;
        $this->fk_id_tab_tipo_sanguineo = null;
        $this->fk_id_tab_faixa_salarial = null;
        $this->mae = null;
        $this->pai = null;
        $this->dt_nascimento = null;
        $this->naturalidade = null;
        $this->uf_naturalidade = null;
        $this->sexo = null;
        $this->rg_nro = null;
        $this->rg_orgao_expedidor = null;
        $this->rg_dt_expedicao = null;
        $this->certificado_militar = null;
        $this->titulo_eleitor = null;
        $this->ctps_numero = null;
        $this->ctps_serie = null;
        $this->ctps_dt_expedicao = null;
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
        return (string) $this->exportTo(PfInformacoesPeer::DEFAULT_STRING_FORMAT);
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
