<?php

namespace Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'pf_profissao' table.
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
class PfProfissaoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad.map.PfProfissaoTableMap';

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
        $this->setName('pf_profissao');
        $this->setPhpName('PfProfissao');
        $this->setClassname('Model\\PfProfissao');
        $this->setPackage('siscad');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_pf_profissao', 'IdPfProfissao', 'INTEGER', true, 10, null);
        $this->addColumn('fk_id_pf_informacoes', 'FkIdPfInformacoes', 'INTEGER', false, 10, null);
        $this->addColumn('empresa', 'Empresa', 'VARCHAR', false, 50, null);
        $this->addColumn('cidade', 'Cidade', 'VARCHAR', false, 40, null);
        $this->addColumn('dt_admissao', 'DtAdmissao', 'DATE', false, null, null);
        $this->addColumn('dt_demissao', 'DtDemissao', 'DATE', false, null, null);
        $this->addColumn('carga_horaria', 'CargaHoraria', 'INTEGER', false, 3, null);
        $this->addColumn('fk_id_tab_ramo1', 'FkIdTabRamo1', 'INTEGER', true, 5, 3);
        $this->addColumn('fk_id_tab_ramo2', 'FkIdTabRamo2', 'INTEGER', true, 5, 16);
        $this->addColumn('fk_id_tab_ramo3', 'FkIdTabRamo3', 'INTEGER', true, 5, 219);
        // validators
        $this->addValidator('empresa', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Empresa: Tamanho máximo 50');
        $this->addValidator('cidade', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Cidade: Tamanho máximo 40');
        $this->addValidator('dt_admissao', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'DtAdmissao: Tamanho máximo ');
        $this->addValidator('dt_admissao', 'type', 'propel.validator.TypeValidator', 'date', 'DtAdmissao: formato inválido');
        $this->addValidator('dt_demissao', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'DtDemissao: Tamanho máximo ');
        $this->addValidator('dt_demissao', 'type', 'propel.validator.TypeValidator', 'date', 'DtDemissao: formato inválido');
        $this->addValidator('carga_horaria', 'maxLength', 'propel.validator.MaxLengthValidator', '3', 'CargaHoraria: Tamanho máximo 3');
        $this->addValidator('carga_horaria', 'type', 'propel.validator.TypeValidator', 'integer', 'CargaHoraria: formato inválido');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PfProfissaoTableMap
