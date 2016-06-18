<?php



/**
 * This class defines the structure of the 'pf_inscricao' table.
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
class PfInscricaoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad.map.PfInscricaoTableMap';

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
        $this->setName('pf_inscricao');
        $this->setPhpName('PfInscricao');
        $this->setClassname('PfInscricao');
        $this->setPackage('siscad');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_pf_inscricao', 'IdPfInscricao', 'INTEGER', true, 10, null);
        $this->addColumn('fk_id_pf_informacoes', 'FkIdPfInformacoes', 'INTEGER', false, 10, null);
        $this->addColumn('pf_uf', 'PfUf', 'CHAR', false, 2, null);
        $this->addColumn('pf_inscricao', 'PfInscricao', 'VARCHAR', false, 5, null);
        $this->addColumn('pf_classe', 'PfClasse', 'CHAR', false, 2, '0');
        $this->addColumn('nome', 'Nome', 'VARCHAR', false, 60, null);
        $this->addColumn('cpf', 'Cpf', 'VARCHAR', false, 14, null);
        $this->addColumn('carteira_crmv', 'CarteiraCrmv', 'VARCHAR', false, 10, null);
        $this->addColumn('dt_carteira_crmv', 'DtCarteiraCrmv', 'DATE', false, null, null);
        $this->addColumn('dt_inscricao', 'DtInscricao', 'DATE', false, null, null);
        $this->addColumn('atuante', 'Atuante', 'BOOLEAN', false, 1, null);
        $this->addColumn('isento', 'Isento', 'BOOLEAN', false, 1, null);
        $this->addColumn('dt_inc_cadin', 'DtIncCadin', 'DATE', false, null, null);
        $this->addColumn('dt_exc_cadin', 'DtExcCadin', 'DATE', false, null, null);
        $this->addColumn('processo', 'Processo', 'BOOLEAN', false, 1, null);
        $this->addColumn('revista_cfmv', 'RevistaCfmv', 'BOOLEAN', false, 1, null);
        $this->addColumn('revista_cfmv_dt', 'RevistaCfmvDt', 'DATE', false, null, null);
        $this->addColumn('carteira_validade', 'CarteiraValidade', 'DATE', false, null, null);
        $this->addColumn('provisoria', 'Provisoria', 'TINYINT', false, null, null);
        $this->addColumn('provisoria_num', 'ProvisoriaNum', 'VARCHAR', false, 10, null);
        $this->addColumn('provisoria_data', 'ProvisoriaData', 'DATE', false, null, null);
        $this->addColumn('provisoria_validade', 'ProvisoriaValidade', 'DATE', false, null, null);
        $this->addColumn('especialista_num', 'EspecialistaNum', 'VARCHAR', false, 10, null);
        $this->addColumn('especialista_data', 'EspecialistaData', 'DATE', false, null, null);
        $this->addColumn('especialista_validade', 'EspecialistaValidade', 'DATE', false, null, null);
        $this->addColumn('segundavia_num', 'SegundaviaNum', 'VARCHAR', false, 10, null);
        $this->addColumn('segundavia_data', 'SegundaviaData', 'DATE', false, null, null);
        $this->addColumn('segundavia_validade', 'SegundaviaValidade', 'DATE', false, null, null);
        $this->addColumn('senha', 'Senha', 'VARCHAR', false, 32, '6aba15de24e9b46f49535c899a4c4899');
        // validators
        $this->addValidator('nome', 'maxLength', 'propel.validator.MaxLengthValidator', '60', 'Nome: Tamanho máximo 60');
        $this->addValidator('cpf', 'maxLength', 'propel.validator.MaxLengthValidator', '14', 'Cpf: Tamanho máximo 14');
        $this->addValidator('carteira_crmv', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'CarteiraCrmv: Tamanho máximo 10');
        $this->addValidator('dt_carteira_crmv', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'DtCarteiraCrmv: Tamanho máximo ');
        $this->addValidator('dt_carteira_crmv', 'type', 'propel.validator.TypeValidator', 'date', 'DtCarteiraCrmv: formato inválido');
        $this->addValidator('dt_inscricao', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'DtInscricao: Tamanho máximo ');
        $this->addValidator('dt_inscricao', 'type', 'propel.validator.TypeValidator', 'date', 'DtInscricao: formato inválido');
        $this->addValidator('atuante', 'maxLength', 'propel.validator.MaxLengthValidator', '1', 'Atuante: Tamanho máximo 1');
        $this->addValidator('isento', 'maxLength', 'propel.validator.MaxLengthValidator', '1', 'Isento: Tamanho máximo 1');
        $this->addValidator('dt_inc_cadin', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'DtIncCadin: Tamanho máximo ');
        $this->addValidator('dt_inc_cadin', 'type', 'propel.validator.TypeValidator', 'date', 'DtIncCadin: formato inválido');
        $this->addValidator('dt_exc_cadin', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'DtExcCadin: Tamanho máximo ');
        $this->addValidator('dt_exc_cadin', 'type', 'propel.validator.TypeValidator', 'date', 'DtExcCadin: formato inválido');
        $this->addValidator('processo', 'maxLength', 'propel.validator.MaxLengthValidator', '1', 'Processo: Tamanho máximo 1');
        $this->addValidator('revista_cfmv', 'maxLength', 'propel.validator.MaxLengthValidator', '1', 'RevistaCfmv: Tamanho máximo 1');
        $this->addValidator('revista_cfmv_dt', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'RevistaCfmvDt: Tamanho máximo ');
        $this->addValidator('revista_cfmv_dt', 'type', 'propel.validator.TypeValidator', 'date', 'RevistaCfmvDt: formato inválido');
        $this->addValidator('carteira_validade', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'CarteiraValidade: Tamanho máximo ');
        $this->addValidator('carteira_validade', 'type', 'propel.validator.TypeValidator', 'date', 'CarteiraValidade: formato inválido');
        $this->addValidator('provisoria', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'Provisoria: Tamanho máximo ');
        $this->addValidator('provisoria', 'type', 'propel.validator.TypeValidator', 'integer', 'Provisoria: formato inválido');
        $this->addValidator('provisoria_num', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'ProvisoriaNum: Tamanho máximo 10');
        $this->addValidator('provisoria_data', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'ProvisoriaData: Tamanho máximo ');
        $this->addValidator('provisoria_data', 'type', 'propel.validator.TypeValidator', 'date', 'ProvisoriaData: formato inválido');
        $this->addValidator('provisoria_validade', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'ProvisoriaValidade: Tamanho máximo ');
        $this->addValidator('provisoria_validade', 'type', 'propel.validator.TypeValidator', 'date', 'ProvisoriaValidade: formato inválido');
        $this->addValidator('especialista_num', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'EspecialistaNum: Tamanho máximo 10');
        $this->addValidator('especialista_data', 'type', 'propel.validator.TypeValidator', 'date', 'EspecialistaData: formato inválido');
        $this->addValidator('especialista_data', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'EspecialistaData: Tamanho máximo ');
        $this->addValidator('especialista_validade', 'type', 'propel.validator.TypeValidator', 'date', 'EspecialistaValidade: formato inválido');
        $this->addValidator('especialista_validade', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'EspecialistaValidade: Tamanho máximo ');
        $this->addValidator('segundavia_num', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'SegundaviaNum: Tamanho máximo 10');
        $this->addValidator('segundavia_data', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'SegundaviaData: Tamanho máximo ');
        $this->addValidator('segundavia_data', 'type', 'propel.validator.TypeValidator', 'date', 'SegundaviaData: formato inválido');
        $this->addValidator('segundavia_validade', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'SegundaviaValidade: Tamanho máximo ');
        $this->addValidator('segundavia_validade', 'type', 'propel.validator.TypeValidator', 'date', 'SegundaviaValidade: formato inválido');
        $this->addValidator('senha', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Senha: Tamanho máximo 32');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PfInscricaoTableMap
