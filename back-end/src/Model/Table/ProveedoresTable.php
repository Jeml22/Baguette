<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proveedores Model
 *
 * @method \App\Model\Entity\Proveedore newEmptyEntity()
 * @method \App\Model\Entity\Proveedore newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Proveedore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proveedore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proveedore findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Proveedore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedore[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedore[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proveedore[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proveedore[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proveedore[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProveedoresTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('proveedores');
        $this->setDisplayField('id_proveedor');
        $this->setPrimaryKey('id_proveedor');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('Producto_proveedor')
            ->maxLength('Producto_proveedor', 50)
            ->requirePresence('Producto_proveedor', 'create')
            ->notEmptyString('Producto_proveedor');

        $validator
            ->scalar('numero_de_contacto')
            ->maxLength('numero_de_contacto', 20)
            ->requirePresence('numero_de_contacto', 'create')
            ->notEmptyString('numero_de_contacto');

        return $validator;
    }
}
