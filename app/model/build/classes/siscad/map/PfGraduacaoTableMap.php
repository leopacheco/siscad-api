<?php

namespace Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'pf_graduacao' table.
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
class PfGraduacaoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad.map.PfGraduacaoTableMap';

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
        $this->setName('pf_graduacao');
        $this->setPhpName('PfGraduacao');
        $this->setClassname('Model\\PfGraduacao');
        $this->setPackage('siscad');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_pf_graduacao', 'IdPfGraduacao', 'INTEGER', true, 10, null);
        $this->addColumn('fk_id_tab_uf', 'FkIdTabUf', 'INTEGER', false, 5, null);
        $this->addColumn('fk_id_pf_informacoes', 'FkIdPfInformacoes', 'INTEGER', false, 10, null);
        $this->addColumn('fk_id_tab_area', 'FkIdTabArea', 'INTEGER', false, 5, 0);
        $this->addColumn('fk_id_tab_nivel', 'FkIdTabNivel', 'INTEGER', false, 5, 0);
        $this->addColumn('fk_id_tab_ies', 'FkIdTabIes', 'INTEGER', false, 5, null);
        $this->addColumn('dt_conclusao', 'DtConclusao', 'DATE', false, null, null);
        // validators
        $this->addValidator('dt_conclusao', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'DtConclusao: Tamanho máximo ');
        $this->addValidator('dt_conclusao', 'type', 'propel.validator.TypeValidator', 'date', 'DtConclusao: formato inválido');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PfGraduacaoTableMap
