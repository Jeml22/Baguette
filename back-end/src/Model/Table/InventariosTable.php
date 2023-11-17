<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inventarios Model
 *
 * @method \App\Model\Entity\Inventario newEmptyEntity()
 * @method \App\Model\Entity\Inventario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Inventario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inventario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inventario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Inventario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inventario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inventario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inventario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inventario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Inventario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Inventario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Inventario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InventariosTable extends Table
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

        $this->setTable('inventarios');
        $this->setDisplayField('id_referencia');
        $this->setPrimaryKey('id_referencia');
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
            ->integer('cantidad_inicial')
            ->requirePresence('cantidad_inicial', 'create')
            ->notEmptyString('cantidad_inicial');

        $validator
            ->integer('cantidad_disponible')
            ->requirePresence('cantidad_disponible', 'create')
            ->notEmptyString('cantidad_disponible');

        return $validator;
    }
}
