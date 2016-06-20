<?php

namespace Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'tab_uf' table.
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
class TabUfTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad.map.TabUfTableMap';

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
        $this->setName('tab_uf');
        $this->setPhpName('TabUf');
        $this->setClassname('Model\\TabUf');
        $this->setPackage('siscad');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_tab_uf', 'IdTabUf', 'INTEGER', true, 5, null);
        $this->addColumn('sigla', 'Sigla', 'CHAR', false, 2, null);
        $this->addColumn('tratamento', 'Tratamento', 'CHAR', false, 2, null);
        $this->addColumn('estado', 'Estado', 'VARCHAR', false, 30, null);
        $this->addColumn('capital', 'Capital', 'VARCHAR', false, 20, null);
        $this->addColumn('rua', 'Rua', 'VARCHAR', false, 100, null);
        $this->addColumn('bairro', 'Bairro', 'VARCHAR', false, 50, null);
        $this->addColumn('cep', 'Cep', 'VARCHAR', false, 9, null);
        $this->addColumn('ddd', 'Ddd', 'VARCHAR', false, 2, null);
        $this->addColumn('telefone', 'Telefone', 'VARCHAR', false, 15, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 15, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 50, null);
        $this->addColumn('sequencia_tf', 'SequenciaTf', 'INTEGER', false, 5, null);
        $this->addColumn('sequencia_ai', 'SequenciaAi', 'INTEGER', false, 5, null);
        $this->addColumn('ano', 'Ano', 'CHAR', false, 4, null);
        $this->addColumn('regiao', 'Regiao', 'VARCHAR', false, 12, null);
        $this->addColumn('res1102', 'Res1102', 'INTEGER', false, 2, null);
        // validators
        $this->addValidator('sigla', 'maxLength', 'propel.validator.MaxLengthValidator', '2', 'Sigla: tamanho máximo 2');
        $this->addValidator('tratamento', 'maxLength', 'propel.validator.MaxLengthValidator', '2', 'Tratamento: tamanho máximo 2');
        $this->addValidator('estado', 'maxLength', 'propel.validator.MaxLengthValidator', '30', 'Estado: tamanho máximo 30');
        $this->addValidator('capital', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Capital: tamanho máximo 20');
        $this->addValidator('rua', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Rua: tamanho máximo 100');
        $this->addValidator('bairro', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Bairro: tamanho máximo 50');
        $this->addValidator('cep', 'maxLength', 'propel.validator.MaxLengthValidator', '9', 'Cep: tamanho máximo 9');
        $this->addValidator('ddd', 'maxLength', 'propel.validator.MaxLengthValidator', '2', 'Ddd: tamanho máximo 2');
        $this->addValidator('telefone', 'maxLength', 'propel.validator.MaxLengthValidator', '15', 'Telefone: tamanho máximo 15');
        $this->addValidator('fax', 'maxLength', 'propel.validator.MaxLengthValidator', '15', 'Fax: tamanho máximo 15');
        $this->addValidator('email', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Email: tamanho máximo 50');
        $this->addValidator('email', 'match', 'propel.validator.MatchValidator', '/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9])+(\.[a-zA-Z0-9_-]+)+$/', 'Email: formato inválido');
        $this->addValidator('ano', 'maxLength', 'propel.validator.MaxLengthValidator', '4', 'Ano: tamanho máximo 4');
        $this->addValidator('regiao', 'maxLength', 'propel.validator.MaxLengthValidator', '12', 'Regiao: tamanho máximo 12');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TabUfTableMap
