<?php



/**
 * This class defines the structure of the 'log_atividade' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.siscad_autenticacao.map
 */
class LogAtividadeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad_autenticacao.map.LogAtividadeTableMap';

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
        $this->setName('log_atividade');
        $this->setPhpName('LogAtividade');
        $this->setClassname('LogAtividade');
        $this->setPackage('siscad_autenticacao');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('usuario_id', 'UsuarioId', 'INTEGER', 'usuario', 'id', true, null, null);
        $this->addColumn('tabela_atualizada', 'TabelaAtualizada', 'VARCHAR', true, 80, null);
        $this->addColumn('valor_anterior', 'ValorAnterior', 'LONGVARCHAR', false, null, null);
        $this->addColumn('valor_atual', 'ValorAtual', 'LONGVARCHAR', false, null, null);
        $this->addColumn('data', 'Data', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('usuario_id' => 'id', ), null, null);
    } // buildRelations()

} // LogAtividadeTableMap
