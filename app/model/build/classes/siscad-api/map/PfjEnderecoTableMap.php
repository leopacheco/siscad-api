<?php



/**
 * This class defines the structure of the 'pfj_endereco' table.
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
class PfjEnderecoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad-api.map.PfjEnderecoTableMap';

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
        $this->setName('pfj_endereco');
        $this->setPhpName('PfjEndereco');
        $this->setClassname('PfjEndereco');
        $this->setPackage('siscad-api');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_pfj_endereco', 'IdPfjEndereco', 'INTEGER', true, 10, null);
        $this->addColumn('fk_id_pj_registro', 'FkIdPjRegistro', 'INTEGER', false, 10, null);
        $this->addColumn('fk_id_pf_inscricao', 'FkIdPfInscricao', 'INTEGER', false, 10, null);
        $this->addColumn('fk_id_tab_uf', 'FkIdTabUf', 'INTEGER', false, 5, null);
        $this->addColumn('fk_id_tab_cep_cidade', 'FkIdTabCepCidade', 'INTEGER', false, 10, null);
        $this->addColumn('endereco', 'Endereco', 'VARCHAR', false, 50, null);
        $this->addColumn('bairro', 'Bairro', 'VARCHAR', false, 30, null);
        $this->addColumn('cidade', 'Cidade', 'VARCHAR', false, 40, null);
        $this->addColumn('cep', 'Cep', 'VARCHAR', false, 9, null);
        $this->addColumn('uf', 'Uf', 'CHAR', false, 2, null);
        $this->addColumn('fk_id_tab_correio', 'FkIdTabCorreio', 'INTEGER', false, 5, null);
        $this->addColumn('dt_atualizacao', 'DtAtualizacao', 'DATE', false, null, null);
        $this->addColumn('dt_atualizacao_web', 'DtAtualizacaoWeb', 'DATE', false, null, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 100, null);
        $this->addColumn('ddd_tel', 'DddTel', 'CHAR', false, 2, null);
        $this->addColumn('telefone', 'Telefone', 'VARCHAR', false, 15, null);
        $this->addColumn('ramal', 'Ramal', 'VARCHAR', false, 5, null);
        $this->addColumn('ddd_cel', 'DddCel', 'CHAR', false, 2, null);
        $this->addColumn('celular', 'Celular', 'VARCHAR', false, 15, null);
        $this->addColumn('ddd_fax', 'DddFax', 'CHAR', false, 2, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 15, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PfjEnderecoTableMap
