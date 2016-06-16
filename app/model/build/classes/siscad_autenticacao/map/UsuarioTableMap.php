<?php



/**
 * This class defines the structure of the 'usuario' table.
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
class UsuarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'siscad_autenticacao.map.UsuarioTableMap';

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
        $this->setName('usuario');
        $this->setPhpName('Usuario');
        $this->setClassname('Usuario');
        $this->setPackage('siscad_autenticacao');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('nome', 'Nome', 'VARCHAR', true, 30, null);
        $this->addColumn('descricao', 'Descricao', 'VARCHAR', false, 255, null);
        $this->addColumn('secret', 'Secret', 'VARCHAR', true, 30, null);
        $this->addColumn('ativo', 'Ativo', 'BOOLEAN', true, 1, null);
        $this->addForeignKey('perfil_id', 'PerfilId', 'INTEGER', 'perfil', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Perfil', 'Perfil', RelationMap::MANY_TO_ONE, array('perfil_id' => 'id', ), null, null);
    } // buildRelations()

} // UsuarioTableMap