<?php



/**
 * This class defines the structure of the 'tab_graduacao_area' table.
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
class TabGraduacaoAreaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad.map.TabGraduacaoAreaTableMap';

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
        $this->setName('tab_graduacao_area');
        $this->setPhpName('TabGraduacaoArea');
        $this->setClassname('TabGraduacaoArea');
        $this->setPackage('siscad');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_tab_graduacao_area', 'IdTabGraduacaoArea', 'INTEGER', true, 5, null);
        $this->addColumn('descricao', 'Descricao', 'VARCHAR', false, 50, null);
        // validators
        $this->addValidator('descricao', 'type', 'propel.validator.TypeValidator', 'string', 'DESCRIÇÃO: deve ser do tipo string');
        $this->addValidator('descricao', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'DESCRIÇÃO: tamanho máximo 50');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TabGraduacaoAreaTableMap
