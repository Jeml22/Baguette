<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produpasteles Model
 *
 * @method \App\Model\Entity\Produpastele newEmptyEntity()
 * @method \App\Model\Entity\Produpastele newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Produpastele[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produpastele get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produpastele findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Produpastele patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produpastele[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produpastele|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produpastele saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produpastele[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produpastele[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produpastele[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produpastele[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProdupastelesTable extends Table
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

        $this->setTable('produpasteles');
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
