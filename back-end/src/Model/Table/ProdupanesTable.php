<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produpanes Model
 *
 * @method \App\Model\Entity\Produpane newEmptyEntity()
 * @method \App\Model\Entity\Produpane newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Produpane[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produpane get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produpane findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Produpane patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produpane[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produpane|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produpane saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produpane[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produpane[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produpane[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produpane[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProdupanesTable extends Table
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

        $this->setTable('produpanes');
        $this->setDisplayField('id_producto');
        $this->setPrimaryKey('id_producto');
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
            ->decimal('precio')
            ->requirePresence('precio', 'create')
            ->notEmptyString('precio');

        $validator
            ->integer('cantidad_disponible')
            ->requirePresence('cantidad_disponible', 'create')
            ->notEmptyString('cantidad_disponible');

        $validator
            ->scalar('nombre_p')
            ->maxLength('nombre_p', 30)
            ->requirePresence('nombre_p', 'create')
            ->notEmptyString('nombre_p');

        $validator
            ->scalar('tipo_prod')
            ->maxLength('tipo_prod', 30)
            ->requirePresence('tipo_prod', 'create')
            ->notEmptyString('tipo_prod');

        $validator
            ->integer('peso')
            ->requirePresence('peso', 'create')
            ->notEmptyString('peso');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 300)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        return $validator;
    }
}
