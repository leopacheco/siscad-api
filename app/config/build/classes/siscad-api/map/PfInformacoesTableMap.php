<?php



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
 * @package    propel.generator.siscad-api.map
 */
class PfInformacoesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad-api.map.PfInformacoesTableMap';

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
        $this->setClassname('PfInformacoes');
        $this->setPackage('siscad-api');
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
        $this->addValidator('mae', 'type', 'propel.validator.TypeValidator', 'string', 'A coluna MAE deve ser do tipo texto');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PfInformacoesTableMap
