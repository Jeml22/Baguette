<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ventas Model
 *
 * @method \App\Model\Entity\Venta newEmptyEntity()
 * @method \App\Model\Entity\Venta newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Venta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Venta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Venta findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Venta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Venta[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Venta|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venta saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venta[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venta[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venta[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venta[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VentasTable extends Table
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

        $this->setTable('ventas');
        $this->setDisplayField('id_venta');
        $this->setPrimaryKey('id_venta');
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
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->time('hora')
            ->requirePresence('hora', 'create')
            ->notEmptyTime('hora');

        $validator
            ->scalar('productos')
            ->maxLength('productos', 255)
            ->requirePresence('productos', 'create')
            ->notEmptyString('productos');

        $validator
            ->integer('cantidad')
            ->requirePresence('cantidad', 'create')
            ->notEmptyString('cantidad');

        $validator
            ->decimal('total')
            ->requirePresence('total', 'create')
            ->notEmptyString('total');

        $validator
            ->scalar('idfactura')
            ->maxLength('idfactura', 255)
            ->requirePresence('idfactura', 'create')
            ->notEmptyString('idfactura');

        return $validator;
    }
}
