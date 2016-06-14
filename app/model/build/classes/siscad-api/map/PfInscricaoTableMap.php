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
 * @package    propel.generator.siscad-api.map
 */
class PfInscricaoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad-api.map.PfInscricaoTableMap';

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
        $this->setPackage('siscad-api');
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
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PfInscricaoTableMap
