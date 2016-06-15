<?php



/**
 * This class defines the structure of the 'tab_ies' table.
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
class TabIesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad.map.TabIesTableMap';

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
        $this->setName('tab_ies');
        $this->setPhpName('TabIes');
        $this->setClassname('TabIes');
        $this->setPackage('siscad');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_tab_ies', 'IdTabIes', 'INTEGER', true, 5, null);
        $this->addColumn('fk_id_tab_ies_vinculacao', 'FkIdTabIesVinculacao', 'INTEGER', false, 5, 0);
        $this->addColumn('fk_id_tab_uf', 'FkIdTabUf', 'INTEGER', false, 5, null);
        $this->addColumn('fk_id_tab_ies_situacao', 'FkIdTabIesSituacao', 'INTEGER', false, 5, 0);
        $this->addColumn('nome', 'Nome', 'VARCHAR', false, 60, null);
        $this->addColumn('sigla', 'Sigla', 'VARCHAR', false, 20, null);
        $this->addColumn('endereco', 'Endereco', 'VARCHAR', false, 50, null);
        $this->addColumn('bairro', 'Bairro', 'VARCHAR', false, 40, null);
        $this->addColumn('cidade', 'Cidade', 'VARCHAR', false, 40, null);
        $this->addColumn('cep', 'Cep', 'VARCHAR', false, 9, null);
        $this->addColumn('site', 'Site', 'VARCHAR', false, 80, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 80, null);
        $this->addColumn('condicao', 'Condicao', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TabIesTableMap
