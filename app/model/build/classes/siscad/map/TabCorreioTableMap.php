<?php

namespace Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'tab_correio' table.
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
class TabCorreioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad.map.TabCorreioTableMap';

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
        $this->setName('tab_correio');
        $this->setPhpName('TabCorreio');
        $this->setClassname('Model\\TabCorreio');
        $this->setPackage('siscad');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_tab_correio', 'IdTabCorreio', 'INTEGER', true, 5, 0);
        $this->addColumn('descricao', 'Descricao', 'VARCHAR', false, 30, null);
        // validators
        $this->addValidator('descricao', 'maxLength', 'propel.validator.MaxLengthValidator', '30', 'Descricao: Tamanho máximo 30');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TabCorreioTableMap
