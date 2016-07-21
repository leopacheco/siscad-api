<?php

namespace Model\map;

use \RelationMap;
use \TableMap;


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
 * @package    propel.generator.siscad.map
 */
class PfjEnderecoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad.map.PfjEnderecoTableMap';

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
        $this->setClassname('Model\\PfjEndereco');
        $this->setPackage('siscad');
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
        $this->addColumn('usuario_api', 'UsuarioApi', 'VARCHAR', false, 40, null);
        // validators
        $this->addValidator('endereco', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Endereco: Tamanho máximo 50');
        $this->addValidator('bairro', 'maxLength', 'propel.validator.MaxLengthValidator', '30', 'Bairro: Tamanho máximo 30');
        $this->addValidator('cidade', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Cidade: Tamanho máximo 40');
        $this->addValidator('cep', 'maxLength', 'propel.validator.MaxLengthValidator', '9', 'Cep: Tamanho máximo 9');
        $this->addValidator('uf', 'maxLength', 'propel.validator.MaxLengthValidator', '2', 'Uf: Tamanho máximo 2');
        $this->addValidator('dt_atualizacao', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'DtAtualizacao: Tamanho máximo ');
        $this->addValidator('dt_atualizacao', 'type', 'propel.validator.TypeValidator', 'date', 'DtAtualizacao: formato inválido');
        $this->addValidator('dt_atualizacao_web', 'maxLength', 'propel.validator.MaxLengthValidator', '', 'DtAtualizacaoWeb: Tamanho máximo ');
        $this->addValidator('dt_atualizacao_web', 'type', 'propel.validator.TypeValidator', 'date', 'DtAtualizacaoWeb: formato inválido');
        $this->addValidator('email', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Email: Tamanho máximo 100');
        $this->addValidator('email', 'match', 'propel.validator.MatchValidator', '/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9])+(\.[a-zA-Z0-9_-]+)+$/', 'Email: formato inválido');
        $this->addValidator('ddd_tel', 'maxLength', 'propel.validator.MaxLengthValidator', '2', 'DddTel: Tamanho máximo 2');
        $this->addValidator('telefone', 'maxLength', 'propel.validator.MaxLengthValidator', '15', 'Telefone: Tamanho máximo 15');
        $this->addValidator('ramal', 'maxLength', 'propel.validator.MaxLengthValidator', '5', 'Ramal: Tamanho máximo 5');
        $this->addValidator('ddd_cel', 'maxLength', 'propel.validator.MaxLengthValidator', '2', 'DddCel: Tamanho máximo 2');
        $this->addValidator('celular', 'maxLength', 'propel.validator.MaxLengthValidator', '15', 'Celular: Tamanho máximo 15');
        $this->addValidator('ddd_fax', 'maxLength', 'propel.validator.MaxLengthValidator', '2', 'DddFax: Tamanho máximo 2');
        $this->addValidator('fax', 'maxLength', 'propel.validator.MaxLengthValidator', '15', 'Fax: Tamanho máximo 15');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PfjEnderecoTableMap
