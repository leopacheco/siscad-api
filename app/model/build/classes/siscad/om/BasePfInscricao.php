<?php


/**
 * Base class that represents a row from the 'pf_inscricao' table.
 *
 *
 *
 * @package    propel.generator.siscad.om
 */
abstract class BasePfInscricao extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PfInscricaoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PfInscricaoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_pf_inscricao field.
     * @var        int
     */
    protected $id_pf_inscricao;

    /**
     * The value for the fk_id_pf_informacoes field.
     * @var        int
     */
    protected $fk_id_pf_informacoes;

    /**
     * The value for the pf_uf field.
     * @var        string
     */
    protected $pf_uf;

    /**
     * The value for the pf_inscricao field.
     * @var        string
     */
    protected $pf_inscricao;

    /**
     * The value for the pf_classe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $pf_classe;

    /**
     * The value for the nome field.
     * @var        string
     */
    protected $nome;

    /**
     * The value for the cpf field.
     * @var        string
     */
    protected $cpf;

    /**
     * The value for the carteira_crmv field.
     * @var        string
     */
    protected $carteira_crmv;

    /**
     * The value for the dt_carteira_crmv field.
     * @var        string
     */
    protected $dt_carteira_crmv;

    /**
     * The value for the dt_inscricao field.
     * @var        string
     */
    protected $dt_inscricao;

    /**
     * The value for the atuante field.
     * @var        boolean
     */
    protected $atuante;

    /**
     * The value for the isento field.
     * @var        boolean
     */
    protected $isento;

    /**
     * The value for the dt_inc_cadin field.
     * @var        string
     */
    protected $dt_inc_cadin;

    /**
     * The value for the dt_exc_cadin field.
     * @var        string
     */
    protected $dt_exc_cadin;

    /**
     * The value for the processo field.
     * @var        boolean
     */
    protected $processo;

    /**
     * The value for the revista_cfmv field.
     * @var        boolean
     */
    protected $revista_cfmv;

    /**
     * The value for the revista_cfmv_dt field.
     * @var        string
     */
    protected $revista_cfmv_dt;

    /**
     * The value for the carteira_validade field.
     * @var        string
     */
    protected $carteira_validade;

    /**
     * The value for the provisoria field.
     * @var        int
     */
    protected $provisoria;

    /**
     * The value for the provisoria_num field.
     * @var        string
     */
    protected $provisoria_num;

    /**
     * The value for the provisoria_data field.
     * @var        string
     */
    protected $provisoria_data;

    /**
     * The value for the provisoria_validade field.
     * @var        string
     */
    protected $provisoria_validade;

    /**
     * The value for the especialista_num field.
     * @var        string
     */
    protected $especialista_num;

    /**
     * The value for the especialista_data field.
     * @var        string
     */
    protected $especialista_data;

    /**
     * The value for the especialista_validade field.
     * @var        string
     */
    protected $especialista_validade;

    /**
     * The value for the segundavia_num field.
     * @var        string
     */
    protected $segundavia_num;

    /**
     * The value for the segundavia_data field.
     * @var        string
     */
    protected $segundavia_data;

    /**
     * The value for the segundavia_validade field.
     * @var        string
     */
    protected $segundavia_validade;

    /**
     * The value for the senha field.
     * Note: this column has a database default value of: '6aba15de24e9b46f49535c899a4c4899'
     * @var        string
     */
    protected $senha;

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
        $this->pf_classe = '0';
        $this->senha = '6aba15de24e9b46f49535c899a4c4899';
    }

    /**
     * Initializes internal state of BasePfInscricao object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_pf_inscricao] column value.
     *
     * @return int
     */
    public function getIdPfInscricao()
    {

        return $this->id_pf_inscricao;
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
     * Get the [pf_uf] column value.
     *
     * @return string
     */
    public function getPfUf()
    {

        return $this->pf_uf;
    }

    /**
     * Get the [pf_inscricao] column value.
     *
     * @return string
     */
    public function getPfInscricao()
    {

        return $this->pf_inscricao;
    }

    /**
     * Get the [pf_classe] column value.
     *
     * @return string
     */
    public function getPfClasse()
    {

        return $this->pf_classe;
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
     * Get the [cpf] column value.
     *
     * @return string
     */
    public function getCpf()
    {

        return $this->cpf;
    }

    /**
     * Get the [carteira_crmv] column value.
     *
     * @return string
     */
    public function getCarteiraCrmv()
    {

        return $this->carteira_crmv;
    }

    /**
     * Get the [optionally formatted] temporal [dt_carteira_crmv] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDtCarteiraCrmv($format = '%x')
    {
        if ($this->dt_carteira_crmv === null) {
            return null;
        }

        if ($this->dt_carteira_crmv === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dt_carteira_crmv);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_carteira_crmv, true), $x);
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
     * Get the [optionally formatted] temporal [dt_inscricao] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDtInscricao($format = '%x')
    {
        if ($this->dt_inscricao === null) {
            return null;
        }

        if ($this->dt_inscricao === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dt_inscricao);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_inscricao, true), $x);
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
     * Get the [atuante] column value.
     *
     * @return boolean
     */
    public function getAtuante()
    {

        return $this->atuante;
    }

    /**
     * Get the [isento] column value.
     *
     * @return boolean
     */
    public function getIsento()
    {

        return $this->isento;
    }

    /**
     * Get the [optionally formatted] temporal [dt_inc_cadin] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDtIncCadin($format = '%x')
    {
        if ($this->dt_inc_cadin === null) {
            return null;
        }

        if ($this->dt_inc_cadin === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dt_inc_cadin);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_inc_cadin, true), $x);
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
     * Get the [optionally formatted] temporal [dt_exc_cadin] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDtExcCadin($format = '%x')
    {
        if ($this->dt_exc_cadin === null) {
            return null;
        }

        if ($this->dt_exc_cadin === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dt_exc_cadin);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dt_exc_cadin, true), $x);
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
     * Get the [processo] column value.
     *
     * @return boolean
     */
    public function getProcesso()
    {

        return $this->processo;
    }

    /**
     * Get the [revista_cfmv] column value.
     *
     * @return boolean
     */
    public function getRevistaCfmv()
    {

        return $this->revista_cfmv;
    }

    /**
     * Get the [optionally formatted] temporal [revista_cfmv_dt] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getRevistaCfmvDt($format = '%x')
    {
        if ($this->revista_cfmv_dt === null) {
            return null;
        }

        if ($this->revista_cfmv_dt === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->revista_cfmv_dt);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->revista_cfmv_dt, true), $x);
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
     * Get the [optionally formatted] temporal [carteira_validade] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCarteiraValidade($format = '%x')
    {
        if ($this->carteira_validade === null) {
            return null;
        }

        if ($this->carteira_validade === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->carteira_validade);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->carteira_validade, true), $x);
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
     * Get the [provisoria] column value.
     *
     * @return int
     */
    public function getProvisoria()
    {

        return $this->provisoria;
    }

    /**
     * Get the [provisoria_num] column value.
     *
     * @return string
     */
    public function getProvisoriaNum()
    {

        return $this->provisoria_num;
    }

    /**
     * Get the [optionally formatted] temporal [provisoria_data] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getProvisoriaData($format = '%x')
    {
        if ($this->provisoria_data === null) {
            return null;
        }

        if ($this->provisoria_data === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->provisoria_data);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->provisoria_data, true), $x);
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
     * Get the [optionally formatted] temporal [provisoria_validade] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getProvisoriaValidade($format = '%x')
    {
        if ($this->provisoria_validade === null) {
            return null;
        }

        if ($this->provisoria_validade === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->provisoria_validade);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->provisoria_validade, true), $x);
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
     * Get the [especialista_num] column value.
     *
     * @return string
     */
    public function getEspecialistaNum()
    {

        return $this->especialista_num;
    }

    /**
     * Get the [optionally formatted] temporal [especialista_data] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEspecialistaData($format = '%x')
    {
        if ($this->especialista_data === null) {
            return null;
        }

        if ($this->especialista_data === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->especialista_data);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->especialista_data, true), $x);
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
     * Get the [optionally formatted] temporal [especialista_validade] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEspecialistaValidade($format = '%x')
    {
        if ($this->especialista_validade === null) {
            return null;
        }

        if ($this->especialista_validade === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->especialista_validade);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->especialista_validade, true), $x);
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
     * Get the [segundavia_num] column value.
     *
     * @return string
     */
    public function getSegundaviaNum()
    {

        return $this->segundavia_num;
    }

    /**
     * Get the [optionally formatted] temporal [segundavia_data] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSegundaviaData($format = '%x')
    {
        if ($this->segundavia_data === null) {
            return null;
        }

        if ($this->segundavia_data === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->segundavia_data);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->segundavia_data, true), $x);
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
     * Get the [optionally formatted] temporal [segundavia_validade] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getSegundaviaValidade($format = '%x')
    {
        if ($this->segundavia_validade === null) {
            return null;
        }

        if ($this->segundavia_validade === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->segundavia_validade);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->segundavia_validade, true), $x);
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
     * Get the [senha] column value.
     *
     * @return string
     */
    public function getSenha()
    {

        return $this->senha;
    }

    /**
     * Set the value of [id_pf_inscricao] column.
     *
     * @param  int $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setIdPfInscricao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_pf_inscricao !== $v) {
            $this->id_pf_inscricao = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::ID_PF_INSCRICAO;
        }


        return $this;
    } // setIdPfInscricao()

    /**
     * Set the value of [fk_id_pf_informacoes] column.
     *
     * @param  int $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setFkIdPfInformacoes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_id_pf_informacoes !== $v) {
            $this->fk_id_pf_informacoes = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::FK_ID_PF_INFORMACOES;
        }


        return $this;
    } // setFkIdPfInformacoes()

    /**
     * Set the value of [pf_uf] column.
     *
     * @param  string $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setPfUf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pf_uf !== $v) {
            $this->pf_uf = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::PF_UF;
        }


        return $this;
    } // setPfUf()

    /**
     * Set the value of [pf_inscricao] column.
     *
     * @param  string $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setPfInscricao($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pf_inscricao !== $v) {
            $this->pf_inscricao = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::PF_INSCRICAO;
        }


        return $this;
    } // setPfInscricao()

    /**
     * Set the value of [pf_classe] column.
     *
     * @param  string $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setPfClasse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pf_classe !== $v) {
            $this->pf_classe = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::PF_CLASSE;
        }


        return $this;
    } // setPfClasse()

    /**
     * Set the value of [nome] column.
     *
     * @param  string $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setNome($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nome !== $v) {
            $this->nome = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::NOME;
        }


        return $this;
    } // setNome()

    /**
     * Set the value of [cpf] column.
     *
     * @param  string $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setCpf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cpf !== $v) {
            $this->cpf = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::CPF;
        }


        return $this;
    } // setCpf()

    /**
     * Set the value of [carteira_crmv] column.
     *
     * @param  string $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setCarteiraCrmv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->carteira_crmv !== $v) {
            $this->carteira_crmv = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::CARTEIRA_CRMV;
        }


        return $this;
    } // setCarteiraCrmv()

    /**
     * Sets the value of [dt_carteira_crmv] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setDtCarteiraCrmv($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dt_carteira_crmv !== null || $dt !== null) {
            $currentDateAsString = ($this->dt_carteira_crmv !== null && $tmpDt = new DateTime($this->dt_carteira_crmv)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dt_carteira_crmv = $newDateAsString;
                $this->modifiedColumns[] = PfInscricaoPeer::DT_CARTEIRA_CRMV;
            }
        } // if either are not null


        return $this;
    } // setDtCarteiraCrmv()

    /**
     * Sets the value of [dt_inscricao] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setDtInscricao($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dt_inscricao !== null || $dt !== null) {
            $currentDateAsString = ($this->dt_inscricao !== null && $tmpDt = new DateTime($this->dt_inscricao)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dt_inscricao = $newDateAsString;
                $this->modifiedColumns[] = PfInscricaoPeer::DT_INSCRICAO;
            }
        } // if either are not null


        return $this;
    } // setDtInscricao()

    /**
     * Sets the value of the [atuante] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setAtuante($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->atuante !== $v) {
            $this->atuante = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::ATUANTE;
        }


        return $this;
    } // setAtuante()

    /**
     * Sets the value of the [isento] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setIsento($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->isento !== $v) {
            $this->isento = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::ISENTO;
        }


        return $this;
    } // setIsento()

    /**
     * Sets the value of [dt_inc_cadin] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setDtIncCadin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dt_inc_cadin !== null || $dt !== null) {
            $currentDateAsString = ($this->dt_inc_cadin !== null && $tmpDt = new DateTime($this->dt_inc_cadin)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dt_inc_cadin = $newDateAsString;
                $this->modifiedColumns[] = PfInscricaoPeer::DT_INC_CADIN;
            }
        } // if either are not null


        return $this;
    } // setDtIncCadin()

    /**
     * Sets the value of [dt_exc_cadin] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setDtExcCadin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dt_exc_cadin !== null || $dt !== null) {
            $currentDateAsString = ($this->dt_exc_cadin !== null && $tmpDt = new DateTime($this->dt_exc_cadin)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dt_exc_cadin = $newDateAsString;
                $this->modifiedColumns[] = PfInscricaoPeer::DT_EXC_CADIN;
            }
        } // if either are not null


        return $this;
    } // setDtExcCadin()

    /**
     * Sets the value of the [processo] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setProcesso($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->processo !== $v) {
            $this->processo = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::PROCESSO;
        }


        return $this;
    } // setProcesso()

    /**
     * Sets the value of the [revista_cfmv] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setRevistaCfmv($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->revista_cfmv !== $v) {
            $this->revista_cfmv = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::REVISTA_CFMV;
        }


        return $this;
    } // setRevistaCfmv()

    /**
     * Sets the value of [revista_cfmv_dt] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setRevistaCfmvDt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->revista_cfmv_dt !== null || $dt !== null) {
            $currentDateAsString = ($this->revista_cfmv_dt !== null && $tmpDt = new DateTime($this->revista_cfmv_dt)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->revista_cfmv_dt = $newDateAsString;
                $this->modifiedColumns[] = PfInscricaoPeer::REVISTA_CFMV_DT;
            }
        } // if either are not null


        return $this;
    } // setRevistaCfmvDt()

    /**
     * Sets the value of [carteira_validade] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setCarteiraValidade($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->carteira_validade !== null || $dt !== null) {
            $currentDateAsString = ($this->carteira_validade !== null && $tmpDt = new DateTime($this->carteira_validade)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->carteira_validade = $newDateAsString;
                $this->modifiedColumns[] = PfInscricaoPeer::CARTEIRA_VALIDADE;
            }
        } // if either are not null


        return $this;
    } // setCarteiraValidade()

    /**
     * Set the value of [provisoria] column.
     *
     * @param  int $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setProvisoria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->provisoria !== $v) {
            $this->provisoria = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::PROVISORIA;
        }


        return $this;
    } // setProvisoria()

    /**
     * Set the value of [provisoria_num] column.
     *
     * @param  string $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setProvisoriaNum($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->provisoria_num !== $v) {
            $this->provisoria_num = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::PROVISORIA_NUM;
        }


        return $this;
    } // setProvisoriaNum()

    /**
     * Sets the value of [provisoria_data] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setProvisoriaData($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->provisoria_data !== null || $dt !== null) {
            $currentDateAsString = ($this->provisoria_data !== null && $tmpDt = new DateTime($this->provisoria_data)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->provisoria_data = $newDateAsString;
                $this->modifiedColumns[] = PfInscricaoPeer::PROVISORIA_DATA;
            }
        } // if either are not null


        return $this;
    } // setProvisoriaData()

    /**
     * Sets the value of [provisoria_validade] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setProvisoriaValidade($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->provisoria_validade !== null || $dt !== null) {
            $currentDateAsString = ($this->provisoria_validade !== null && $tmpDt = new DateTime($this->provisoria_validade)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->provisoria_validade = $newDateAsString;
                $this->modifiedColumns[] = PfInscricaoPeer::PROVISORIA_VALIDADE;
            }
        } // if either are not null


        return $this;
    } // setProvisoriaValidade()

    /**
     * Set the value of [especialista_num] column.
     *
     * @param  string $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setEspecialistaNum($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->especialista_num !== $v) {
            $this->especialista_num = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::ESPECIALISTA_NUM;
        }


        return $this;
    } // setEspecialistaNum()

    /**
     * Sets the value of [especialista_data] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setEspecialistaData($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->especialista_data !== null || $dt !== null) {
            $currentDateAsString = ($this->especialista_data !== null && $tmpDt = new DateTime($this->especialista_data)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->especialista_data = $newDateAsString;
                $this->modifiedColumns[] = PfInscricaoPeer::ESPECIALISTA_DATA;
            }
        } // if either are not null


        return $this;
    } // setEspecialistaData()

    /**
     * Sets the value of [especialista_validade] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setEspecialistaValidade($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->especialista_validade !== null || $dt !== null) {
            $currentDateAsString = ($this->especialista_validade !== null && $tmpDt = new DateTime($this->especialista_validade)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->especialista_validade = $newDateAsString;
                $this->modifiedColumns[] = PfInscricaoPeer::ESPECIALISTA_VALIDADE;
            }
        } // if either are not null


        return $this;
    } // setEspecialistaValidade()

    /**
     * Set the value of [segundavia_num] column.
     *
     * @param  string $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setSegundaviaNum($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->segundavia_num !== $v) {
            $this->segundavia_num = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::SEGUNDAVIA_NUM;
        }


        return $this;
    } // setSegundaviaNum()

    /**
     * Sets the value of [segundavia_data] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setSegundaviaData($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->segundavia_data !== null || $dt !== null) {
            $currentDateAsString = ($this->segundavia_data !== null && $tmpDt = new DateTime($this->segundavia_data)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->segundavia_data = $newDateAsString;
                $this->modifiedColumns[] = PfInscricaoPeer::SEGUNDAVIA_DATA;
            }
        } // if either are not null


        return $this;
    } // setSegundaviaData()

    /**
     * Sets the value of [segundavia_validade] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setSegundaviaValidade($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->segundavia_validade !== null || $dt !== null) {
            $currentDateAsString = ($this->segundavia_validade !== null && $tmpDt = new DateTime($this->segundavia_validade)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->segundavia_validade = $newDateAsString;
                $this->modifiedColumns[] = PfInscricaoPeer::SEGUNDAVIA_VALIDADE;
            }
        } // if either are not null


        return $this;
    } // setSegundaviaValidade()

    /**
     * Set the value of [senha] column.
     *
     * @param  string $v new value
     * @return PfInscricao The current object (for fluent API support)
     */
    public function setSenha($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->senha !== $v) {
            $this->senha = $v;
            $this->modifiedColumns[] = PfInscricaoPeer::SENHA;
        }


        return $this;
    } // setSenha()

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
            if ($this->pf_classe !== '0') {
                return false;
            }

            if ($this->senha !== '6aba15de24e9b46f49535c899a4c4899') {
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

            $this->id_pf_inscricao = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fk_id_pf_informacoes = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->pf_uf = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->pf_inscricao = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->pf_classe = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->nome = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->cpf = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->carteira_crmv = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->dt_carteira_crmv = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->dt_inscricao = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->atuante = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
            $this->isento = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
            $this->dt_inc_cadin = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->dt_exc_cadin = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->processo = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
            $this->revista_cfmv = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
            $this->revista_cfmv_dt = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->carteira_validade = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->provisoria = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->provisoria_num = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->provisoria_data = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->provisoria_validade = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->especialista_num = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->especialista_data = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->especialista_validade = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->segundavia_num = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->segundavia_data = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->segundavia_validade = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->senha = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 29; // 29 = PfInscricaoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PfInscricao object", $e);
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
            $con = Propel::getConnection(PfInscricaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PfInscricaoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PfInscricaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PfInscricaoQuery::create()
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
            $con = Propel::getConnection(PfInscricaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PfInscricaoPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PfInscricaoPeer::ID_PF_INSCRICAO;
        if (null !== $this->id_pf_inscricao) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PfInscricaoPeer::ID_PF_INSCRICAO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PfInscricaoPeer::ID_PF_INSCRICAO)) {
            $modifiedColumns[':p' . $index++]  = '`id_pf_inscricao`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::FK_ID_PF_INFORMACOES)) {
            $modifiedColumns[':p' . $index++]  = '`fk_id_pf_informacoes`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::PF_UF)) {
            $modifiedColumns[':p' . $index++]  = '`pf_uf`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::PF_INSCRICAO)) {
            $modifiedColumns[':p' . $index++]  = '`pf_inscricao`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::PF_CLASSE)) {
            $modifiedColumns[':p' . $index++]  = '`pf_classe`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::NOME)) {
            $modifiedColumns[':p' . $index++]  = '`nome`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::CPF)) {
            $modifiedColumns[':p' . $index++]  = '`cpf`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::CARTEIRA_CRMV)) {
            $modifiedColumns[':p' . $index++]  = '`carteira_crmv`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::DT_CARTEIRA_CRMV)) {
            $modifiedColumns[':p' . $index++]  = '`dt_carteira_crmv`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::DT_INSCRICAO)) {
            $modifiedColumns[':p' . $index++]  = '`dt_inscricao`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::ATUANTE)) {
            $modifiedColumns[':p' . $index++]  = '`atuante`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::ISENTO)) {
            $modifiedColumns[':p' . $index++]  = '`isento`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::DT_INC_CADIN)) {
            $modifiedColumns[':p' . $index++]  = '`dt_inc_cadin`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::DT_EXC_CADIN)) {
            $modifiedColumns[':p' . $index++]  = '`dt_exc_cadin`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::PROCESSO)) {
            $modifiedColumns[':p' . $index++]  = '`processo`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::REVISTA_CFMV)) {
            $modifiedColumns[':p' . $index++]  = '`revista_cfmv`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::REVISTA_CFMV_DT)) {
            $modifiedColumns[':p' . $index++]  = '`revista_cfmv_dt`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::CARTEIRA_VALIDADE)) {
            $modifiedColumns[':p' . $index++]  = '`carteira_validade`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::PROVISORIA)) {
            $modifiedColumns[':p' . $index++]  = '`provisoria`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::PROVISORIA_NUM)) {
            $modifiedColumns[':p' . $index++]  = '`provisoria_num`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::PROVISORIA_DATA)) {
            $modifiedColumns[':p' . $index++]  = '`provisoria_data`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::PROVISORIA_VALIDADE)) {
            $modifiedColumns[':p' . $index++]  = '`provisoria_validade`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::ESPECIALISTA_NUM)) {
            $modifiedColumns[':p' . $index++]  = '`especialista_num`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::ESPECIALISTA_DATA)) {
            $modifiedColumns[':p' . $index++]  = '`especialista_data`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::ESPECIALISTA_VALIDADE)) {
            $modifiedColumns[':p' . $index++]  = '`especialista_validade`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::SEGUNDAVIA_NUM)) {
            $modifiedColumns[':p' . $index++]  = '`segundavia_num`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::SEGUNDAVIA_DATA)) {
            $modifiedColumns[':p' . $index++]  = '`segundavia_data`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::SEGUNDAVIA_VALIDADE)) {
            $modifiedColumns[':p' . $index++]  = '`segundavia_validade`';
        }
        if ($this->isColumnModified(PfInscricaoPeer::SENHA)) {
            $modifiedColumns[':p' . $index++]  = '`senha`';
        }

        $sql = sprintf(
            'INSERT INTO `pf_inscricao` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_pf_inscricao`':
                        $stmt->bindValue($identifier, $this->id_pf_inscricao, PDO::PARAM_INT);
                        break;
                    case '`fk_id_pf_informacoes`':
                        $stmt->bindValue($identifier, $this->fk_id_pf_informacoes, PDO::PARAM_INT);
                        break;
                    case '`pf_uf`':
                        $stmt->bindValue($identifier, $this->pf_uf, PDO::PARAM_STR);
                        break;
                    case '`pf_inscricao`':
                        $stmt->bindValue($identifier, $this->pf_inscricao, PDO::PARAM_STR);
                        break;
                    case '`pf_classe`':
                        $stmt->bindValue($identifier, $this->pf_classe, PDO::PARAM_STR);
                        break;
                    case '`nome`':
                        $stmt->bindValue($identifier, $this->nome, PDO::PARAM_STR);
                        break;
                    case '`cpf`':
                        $stmt->bindValue($identifier, $this->cpf, PDO::PARAM_STR);
                        break;
                    case '`carteira_crmv`':
                        $stmt->bindValue($identifier, $this->carteira_crmv, PDO::PARAM_STR);
                        break;
                    case '`dt_carteira_crmv`':
                        $stmt->bindValue($identifier, $this->dt_carteira_crmv, PDO::PARAM_STR);
                        break;
                    case '`dt_inscricao`':
                        $stmt->bindValue($identifier, $this->dt_inscricao, PDO::PARAM_STR);
                        break;
                    case '`atuante`':
                        $stmt->bindValue($identifier, (int) $this->atuante, PDO::PARAM_INT);
                        break;
                    case '`isento`':
                        $stmt->bindValue($identifier, (int) $this->isento, PDO::PARAM_INT);
                        break;
                    case '`dt_inc_cadin`':
                        $stmt->bindValue($identifier, $this->dt_inc_cadin, PDO::PARAM_STR);
                        break;
                    case '`dt_exc_cadin`':
                        $stmt->bindValue($identifier, $this->dt_exc_cadin, PDO::PARAM_STR);
                        break;
                    case '`processo`':
                        $stmt->bindValue($identifier, (int) $this->processo, PDO::PARAM_INT);
                        break;
                    case '`revista_cfmv`':
                        $stmt->bindValue($identifier, (int) $this->revista_cfmv, PDO::PARAM_INT);
                        break;
                    case '`revista_cfmv_dt`':
                        $stmt->bindValue($identifier, $this->revista_cfmv_dt, PDO::PARAM_STR);
                        break;
                    case '`carteira_validade`':
                        $stmt->bindValue($identifier, $this->carteira_validade, PDO::PARAM_STR);
                        break;
                    case '`provisoria`':
                        $stmt->bindValue($identifier, $this->provisoria, PDO::PARAM_INT);
                        break;
                    case '`provisoria_num`':
                        $stmt->bindValue($identifier, $this->provisoria_num, PDO::PARAM_STR);
                        break;
                    case '`provisoria_data`':
                        $stmt->bindValue($identifier, $this->provisoria_data, PDO::PARAM_STR);
                        break;
                    case '`provisoria_validade`':
                        $stmt->bindValue($identifier, $this->provisoria_validade, PDO::PARAM_STR);
                        break;
                    case '`especialista_num`':
                        $stmt->bindValue($identifier, $this->especialista_num, PDO::PARAM_STR);
                        break;
                    case '`especialista_data`':
                        $stmt->bindValue($identifier, $this->especialista_data, PDO::PARAM_STR);
                        break;
                    case '`especialista_validade`':
                        $stmt->bindValue($identifier, $this->especialista_validade, PDO::PARAM_STR);
                        break;
                    case '`segundavia_num`':
                        $stmt->bindValue($identifier, $this->segundavia_num, PDO::PARAM_STR);
                        break;
                    case '`segundavia_data`':
                        $stmt->bindValue($identifier, $this->segundavia_data, PDO::PARAM_STR);
                        break;
                    case '`segundavia_validade`':
                        $stmt->bindValue($identifier, $this->segundavia_validade, PDO::PARAM_STR);
                        break;
                    case '`senha`':
                        $stmt->bindValue($identifier, $this->senha, PDO::PARAM_STR);
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
        $this->setIdPfInscricao($pk);

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


            if (($retval = PfInscricaoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PfInscricaoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdPfInscricao();
                break;
            case 1:
                return $this->getFkIdPfInformacoes();
                break;
            case 2:
                return $this->getPfUf();
                break;
            case 3:
                return $this->getPfInscricao();
                break;
            case 4:
                return $this->getPfClasse();
                break;
            case 5:
                return $this->getNome();
                break;
            case 6:
                return $this->getCpf();
                break;
            case 7:
                return $this->getCarteiraCrmv();
                break;
            case 8:
                return $this->getDtCarteiraCrmv();
                break;
            case 9:
                return $this->getDtInscricao();
                break;
            case 10:
                return $this->getAtuante();
                break;
            case 11:
                return $this->getIsento();
                break;
            case 12:
                return $this->getDtIncCadin();
                break;
            case 13:
                return $this->getDtExcCadin();
                break;
            case 14:
                return $this->getProcesso();
                break;
            case 15:
                return $this->getRevistaCfmv();
                break;
            case 16:
                return $this->getRevistaCfmvDt();
                break;
            case 17:
                return $this->getCarteiraValidade();
                break;
            case 18:
                return $this->getProvisoria();
                break;
            case 19:
                return $this->getProvisoriaNum();
                break;
            case 20:
                return $this->getProvisoriaData();
                break;
            case 21:
                return $this->getProvisoriaValidade();
                break;
            case 22:
                return $this->getEspecialistaNum();
                break;
            case 23:
                return $this->getEspecialistaData();
                break;
            case 24:
                return $this->getEspecialistaValidade();
                break;
            case 25:
                return $this->getSegundaviaNum();
                break;
            case 26:
                return $this->getSegundaviaData();
                break;
            case 27:
                return $this->getSegundaviaValidade();
                break;
            case 28:
                return $this->getSenha();
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
        if (isset($alreadyDumpedObjects['PfInscricao'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PfInscricao'][$this->getPrimaryKey()] = true;
        $keys = PfInscricaoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPfInscricao(),
            $keys[1] => $this->getFkIdPfInformacoes(),
            $keys[2] => $this->getPfUf(),
            $keys[3] => $this->getPfInscricao(),
            $keys[4] => $this->getPfClasse(),
            $keys[5] => $this->getNome(),
            $keys[6] => $this->getCpf(),
            $keys[7] => $this->getCarteiraCrmv(),
            $keys[8] => $this->getDtCarteiraCrmv(),
            $keys[9] => $this->getDtInscricao(),
            $keys[10] => $this->getAtuante(),
            $keys[11] => $this->getIsento(),
            $keys[12] => $this->getDtIncCadin(),
            $keys[13] => $this->getDtExcCadin(),
            $keys[14] => $this->getProcesso(),
            $keys[15] => $this->getRevistaCfmv(),
            $keys[16] => $this->getRevistaCfmvDt(),
            $keys[17] => $this->getCarteiraValidade(),
            $keys[18] => $this->getProvisoria(),
            $keys[19] => $this->getProvisoriaNum(),
            $keys[20] => $this->getProvisoriaData(),
            $keys[21] => $this->getProvisoriaValidade(),
            $keys[22] => $this->getEspecialistaNum(),
            $keys[23] => $this->getEspecialistaData(),
            $keys[24] => $this->getEspecialistaValidade(),
            $keys[25] => $this->getSegundaviaNum(),
            $keys[26] => $this->getSegundaviaData(),
            $keys[27] => $this->getSegundaviaValidade(),
            $keys[28] => $this->getSenha(),
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
        $pos = PfInscricaoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdPfInscricao($value);
                break;
            case 1:
                $this->setFkIdPfInformacoes($value);
                break;
            case 2:
                $this->setPfUf($value);
                break;
            case 3:
                $this->setPfInscricao($value);
                break;
            case 4:
                $this->setPfClasse($value);
                break;
            case 5:
                $this->setNome($value);
                break;
            case 6:
                $this->setCpf($value);
                break;
            case 7:
                $this->setCarteiraCrmv($value);
                break;
            case 8:
                $this->setDtCarteiraCrmv($value);
                break;
            case 9:
                $this->setDtInscricao($value);
                break;
            case 10:
                $this->setAtuante($value);
                break;
            case 11:
                $this->setIsento($value);
                break;
            case 12:
                $this->setDtIncCadin($value);
                break;
            case 13:
                $this->setDtExcCadin($value);
                break;
            case 14:
                $this->setProcesso($value);
                break;
            case 15:
                $this->setRevistaCfmv($value);
                break;
            case 16:
                $this->setRevistaCfmvDt($value);
                break;
            case 17:
                $this->setCarteiraValidade($value);
                break;
            case 18:
                $this->setProvisoria($value);
                break;
            case 19:
                $this->setProvisoriaNum($value);
                break;
            case 20:
                $this->setProvisoriaData($value);
                break;
            case 21:
                $this->setProvisoriaValidade($value);
                break;
            case 22:
                $this->setEspecialistaNum($value);
                break;
            case 23:
                $this->setEspecialistaData($value);
                break;
            case 24:
                $this->setEspecialistaValidade($value);
                break;
            case 25:
                $this->setSegundaviaNum($value);
                break;
            case 26:
                $this->setSegundaviaData($value);
                break;
            case 27:
                $this->setSegundaviaValidade($value);
                break;
            case 28:
                $this->setSenha($value);
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
        $keys = PfInscricaoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdPfInscricao($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFkIdPfInformacoes($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPfUf($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPfInscricao($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPfClasse($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNome($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCpf($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCarteiraCrmv($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDtCarteiraCrmv($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDtInscricao($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAtuante($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIsento($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDtIncCadin($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDtExcCadin($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setProcesso($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setRevistaCfmv($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRevistaCfmvDt($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCarteiraValidade($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setProvisoria($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setProvisoriaNum($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setProvisoriaData($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setProvisoriaValidade($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setEspecialistaNum($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setEspecialistaData($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setEspecialistaValidade($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setSegundaviaNum($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setSegundaviaData($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setSegundaviaValidade($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setSenha($arr[$keys[28]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PfInscricaoPeer::DATABASE_NAME);

        if ($this->isColumnModified(PfInscricaoPeer::ID_PF_INSCRICAO)) $criteria->add(PfInscricaoPeer::ID_PF_INSCRICAO, $this->id_pf_inscricao);
        if ($this->isColumnModified(PfInscricaoPeer::FK_ID_PF_INFORMACOES)) $criteria->add(PfInscricaoPeer::FK_ID_PF_INFORMACOES, $this->fk_id_pf_informacoes);
        if ($this->isColumnModified(PfInscricaoPeer::PF_UF)) $criteria->add(PfInscricaoPeer::PF_UF, $this->pf_uf);
        if ($this->isColumnModified(PfInscricaoPeer::PF_INSCRICAO)) $criteria->add(PfInscricaoPeer::PF_INSCRICAO, $this->pf_inscricao);
        if ($this->isColumnModified(PfInscricaoPeer::PF_CLASSE)) $criteria->add(PfInscricaoPeer::PF_CLASSE, $this->pf_classe);
        if ($this->isColumnModified(PfInscricaoPeer::NOME)) $criteria->add(PfInscricaoPeer::NOME, $this->nome);
        if ($this->isColumnModified(PfInscricaoPeer::CPF)) $criteria->add(PfInscricaoPeer::CPF, $this->cpf);
        if ($this->isColumnModified(PfInscricaoPeer::CARTEIRA_CRMV)) $criteria->add(PfInscricaoPeer::CARTEIRA_CRMV, $this->carteira_crmv);
        if ($this->isColumnModified(PfInscricaoPeer::DT_CARTEIRA_CRMV)) $criteria->add(PfInscricaoPeer::DT_CARTEIRA_CRMV, $this->dt_carteira_crmv);
        if ($this->isColumnModified(PfInscricaoPeer::DT_INSCRICAO)) $criteria->add(PfInscricaoPeer::DT_INSCRICAO, $this->dt_inscricao);
        if ($this->isColumnModified(PfInscricaoPeer::ATUANTE)) $criteria->add(PfInscricaoPeer::ATUANTE, $this->atuante);
        if ($this->isColumnModified(PfInscricaoPeer::ISENTO)) $criteria->add(PfInscricaoPeer::ISENTO, $this->isento);
        if ($this->isColumnModified(PfInscricaoPeer::DT_INC_CADIN)) $criteria->add(PfInscricaoPeer::DT_INC_CADIN, $this->dt_inc_cadin);
        if ($this->isColumnModified(PfInscricaoPeer::DT_EXC_CADIN)) $criteria->add(PfInscricaoPeer::DT_EXC_CADIN, $this->dt_exc_cadin);
        if ($this->isColumnModified(PfInscricaoPeer::PROCESSO)) $criteria->add(PfInscricaoPeer::PROCESSO, $this->processo);
        if ($this->isColumnModified(PfInscricaoPeer::REVISTA_CFMV)) $criteria->add(PfInscricaoPeer::REVISTA_CFMV, $this->revista_cfmv);
        if ($this->isColumnModified(PfInscricaoPeer::REVISTA_CFMV_DT)) $criteria->add(PfInscricaoPeer::REVISTA_CFMV_DT, $this->revista_cfmv_dt);
        if ($this->isColumnModified(PfInscricaoPeer::CARTEIRA_VALIDADE)) $criteria->add(PfInscricaoPeer::CARTEIRA_VALIDADE, $this->carteira_validade);
        if ($this->isColumnModified(PfInscricaoPeer::PROVISORIA)) $criteria->add(PfInscricaoPeer::PROVISORIA, $this->provisoria);
        if ($this->isColumnModified(PfInscricaoPeer::PROVISORIA_NUM)) $criteria->add(PfInscricaoPeer::PROVISORIA_NUM, $this->provisoria_num);
        if ($this->isColumnModified(PfInscricaoPeer::PROVISORIA_DATA)) $criteria->add(PfInscricaoPeer::PROVISORIA_DATA, $this->provisoria_data);
        if ($this->isColumnModified(PfInscricaoPeer::PROVISORIA_VALIDADE)) $criteria->add(PfInscricaoPeer::PROVISORIA_VALIDADE, $this->provisoria_validade);
        if ($this->isColumnModified(PfInscricaoPeer::ESPECIALISTA_NUM)) $criteria->add(PfInscricaoPeer::ESPECIALISTA_NUM, $this->especialista_num);
        if ($this->isColumnModified(PfInscricaoPeer::ESPECIALISTA_DATA)) $criteria->add(PfInscricaoPeer::ESPECIALISTA_DATA, $this->especialista_data);
        if ($this->isColumnModified(PfInscricaoPeer::ESPECIALISTA_VALIDADE)) $criteria->add(PfInscricaoPeer::ESPECIALISTA_VALIDADE, $this->especialista_validade);
        if ($this->isColumnModified(PfInscricaoPeer::SEGUNDAVIA_NUM)) $criteria->add(PfInscricaoPeer::SEGUNDAVIA_NUM, $this->segundavia_num);
        if ($this->isColumnModified(PfInscricaoPeer::SEGUNDAVIA_DATA)) $criteria->add(PfInscricaoPeer::SEGUNDAVIA_DATA, $this->segundavia_data);
        if ($this->isColumnModified(PfInscricaoPeer::SEGUNDAVIA_VALIDADE)) $criteria->add(PfInscricaoPeer::SEGUNDAVIA_VALIDADE, $this->segundavia_validade);
        if ($this->isColumnModified(PfInscricaoPeer::SENHA)) $criteria->add(PfInscricaoPeer::SENHA, $this->senha);

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
        $criteria = new Criteria(PfInscricaoPeer::DATABASE_NAME);
        $criteria->add(PfInscricaoPeer::ID_PF_INSCRICAO, $this->id_pf_inscricao);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdPfInscricao();
    }

    /**
     * Generic method to set the primary key (id_pf_inscricao column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPfInscricao($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdPfInscricao();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of PfInscricao (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkIdPfInformacoes($this->getFkIdPfInformacoes());
        $copyObj->setPfUf($this->getPfUf());
        $copyObj->setPfInscricao($this->getPfInscricao());
        $copyObj->setPfClasse($this->getPfClasse());
        $copyObj->setNome($this->getNome());
        $copyObj->setCpf($this->getCpf());
        $copyObj->setCarteiraCrmv($this->getCarteiraCrmv());
        $copyObj->setDtCarteiraCrmv($this->getDtCarteiraCrmv());
        $copyObj->setDtInscricao($this->getDtInscricao());
        $copyObj->setAtuante($this->getAtuante());
        $copyObj->setIsento($this->getIsento());
        $copyObj->setDtIncCadin($this->getDtIncCadin());
        $copyObj->setDtExcCadin($this->getDtExcCadin());
        $copyObj->setProcesso($this->getProcesso());
        $copyObj->setRevistaCfmv($this->getRevistaCfmv());
        $copyObj->setRevistaCfmvDt($this->getRevistaCfmvDt());
        $copyObj->setCarteiraValidade($this->getCarteiraValidade());
        $copyObj->setProvisoria($this->getProvisoria());
        $copyObj->setProvisoriaNum($this->getProvisoriaNum());
        $copyObj->setProvisoriaData($this->getProvisoriaData());
        $copyObj->setProvisoriaValidade($this->getProvisoriaValidade());
        $copyObj->setEspecialistaNum($this->getEspecialistaNum());
        $copyObj->setEspecialistaData($this->getEspecialistaData());
        $copyObj->setEspecialistaValidade($this->getEspecialistaValidade());
        $copyObj->setSegundaviaNum($this->getSegundaviaNum());
        $copyObj->setSegundaviaData($this->getSegundaviaData());
        $copyObj->setSegundaviaValidade($this->getSegundaviaValidade());
        $copyObj->setSenha($this->getSenha());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPfInscricao(NULL); // this is a auto-increment column, so set to default value
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
     * @return PfInscricao Clone of current object.
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
     * @return PfInscricaoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PfInscricaoPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_pf_inscricao = null;
        $this->fk_id_pf_informacoes = null;
        $this->pf_uf = null;
        $this->pf_inscricao = null;
        $this->pf_classe = null;
        $this->nome = null;
        $this->cpf = null;
        $this->carteira_crmv = null;
        $this->dt_carteira_crmv = null;
        $this->dt_inscricao = null;
        $this->atuante = null;
        $this->isento = null;
        $this->dt_inc_cadin = null;
        $this->dt_exc_cadin = null;
        $this->processo = null;
        $this->revista_cfmv = null;
        $this->revista_cfmv_dt = null;
        $this->carteira_validade = null;
        $this->provisoria = null;
        $this->provisoria_num = null;
        $this->provisoria_data = null;
        $this->provisoria_validade = null;
        $this->especialista_num = null;
        $this->especialista_data = null;
        $this->especialista_validade = null;
        $this->segundavia_num = null;
        $this->segundavia_data = null;
        $this->segundavia_validade = null;
        $this->senha = null;
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
        return (string) $this->exportTo(PfInscricaoPeer::DEFAULT_STRING_FORMAT);
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
