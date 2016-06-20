<?php

namespace Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'pf_informacoes' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.siscad.map
 */
class PfInformacoesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad.map.PfInformacoesTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('pf_informacoes');
        $this->setPhpName('PfInformacoes');
        $this->setClassname('Model\\PfInformacoes');
        $this->setPackage('siscad');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_pf_informacoes', 'IdPfInformacoes', 'INTEGER', true, 10, null);
        $this->addColumn('fk_id_tab_nacionalidade', 'FkIdTabNacionalidade', 'INTEGER', false, 5, null);
        $this->addColumn('fk_id_tab_estado_civil', 'FkIdTabEstadoCivil', 'INTEGER', false, 5, null);
        $this->addColumn('fk_id_tab_tipo_sanguineo', 'FkIdTabTipoSanguineo', 'INTEGER', false, 5, null);
        $this->addColumn('fk_id_tab_faixa_salarial', 'FkIdTabFaixaSalarial', 'INTEGER', false, 5, null);
        $this->addColumn('mae', 'Mae', 'VARCHAR', false, 60, null);
        $this->addColumn('pai', 'Pai', 'VARCHAR', false, 60, null);
        $this->addColumn('dt_nascimento', 'DtNascimento', 'DATE', false, null, null);
        $this->addColumn('naturalidade', 'Naturalidade', 'VARCHAR', false, 50, null);
        $this->addColumn('uf_naturalidade', 'UfNaturalidade', 'CHAR', false, 2, null);
        $this->addColumn('sexo', 'Sexo', 'CHAR', false, null, null);
        $this->addColumn('rg_nro', 'RgNro', 'VARCHAR', false, 20, null);
        $this->addColumn('rg_orgao_expedidor', 'RgOrgaoExpedidor', 'VARCHAR', false, 50, null);
        $this->addColumn('rg_dt_expedicao', 'RgDtExpedicao', 'DATE', false, null, null);
        $this->addColumn('certificado_militar', 'CertificadoMilitar', 'VARCHAR', false, 50, null);
        $this->addColumn('titulo_eleitor', 'TituloEleitor', 'VARCHAR', false, 50, null);
        $this->addColumn('ctps_numero', 'CtpsNumero', 'VARCHAR', false, 10, null);
        $this->addColumn('ctps_serie', 'CtpsSerie', 'VARCHAR', false, 10, null);
        $this->addColumn('ctps_dt_expedicao', 'CtpsDtExpedicao', 'DATE', false, null, null);
        // validators
        $this->addValidator('mae', 'maxLength', 'propel.validator.MaxLengthValidator', '60', 'Mae: Tamanho máximo 60');
        $this->addValidator('pai', 'maxLength', 'propel.validator.MaxLengthValidator', '60', 'Pai: Tamanho máximo 60');
        $this->addValidator('dt_nascimento', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'DtNascimento: Tamanho máximo ');
        $this->addValidator('dt_nascimento', 'type', 'propel.validator.TypeValidator', 'date', 'DtNascimento: formato inválido');
        $this->addValidator('naturalidade', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Naturalidade: Tamanho máximo 50');
        $this->addValidator('uf_naturalidade', 'maxLength', 'propel.validator.MaxLengthValidator', '2', 'UfNaturalidade: Tamanho máximo 2');
        $this->addValidator('sexo', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'Sexo: Tamanho máximo ');
        $this->addValidator('rg_nro', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'RgNro: Tamanho máximo 20');
        $this->addValidator('rg_orgao_expedidor', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'RgOrgaoExpedidor: Tamanho máximo 50');
        $this->addValidator('rg_dt_expedicao', 'type', 'propel.validator.TypeValidator', 'date', 'RgDtExpedicao: formato inválido');
        $this->addValidator('rg_dt_expedicao', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'RgDtExpedicao: Tamanho máximo ');
        $this->addValidator('certificado_militar', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'CertificadoMilitar: Tamanho máximo 50');
        $this->addValidator('titulo_eleitor', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'TituloEleitor: Tamanho máximo 50');
        $this->addValidator('ctps_numero', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'CtpsNumero: Tamanho máximo 10');
        $this->addValidator('ctps_serie', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'CtpsSerie: Tamanho máximo 10');
        $this->addValidator('ctps_dt_expedicao', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'CtpsDtExpedicao: Tamanho máximo ');
        $this->addValidator('ctps_dt_expedicao', 'type', 'propel.validator.TypeValidator', 'date', 'CtpsDtExpedicao: formato inválido');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PfInformacoesTableMap
