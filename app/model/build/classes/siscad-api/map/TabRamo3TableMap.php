<?php



/**
 * This class defines the structure of the 'tab_ramo3' table.
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
class TabRamo3TableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad-api.map.TabRamo3TableMap';

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
        $this->setName('tab_ramo3');
        $this->setPhpName('TabRamo3');
        $this->setClassname('TabRamo3');
        $this->setPackage('siscad-api');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_tab_ramo3', 'IdTabRamo3', 'INTEGER', true, 5, null);
        $this->addColumn('cod_ramo1', 'CodRamo1', 'CHAR', false, 2, '0');
        $this->addColumn('cod_ramo2', 'CodRamo2', 'CHAR', false, 2, '0');
        $this->addColumn('cod_ramo3', 'CodRamo3', 'CHAR', false, 2, '0');
        $this->addColumn('descricao', 'Descricao', 'VARCHAR', false, 40, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TabRamo3TableMap
