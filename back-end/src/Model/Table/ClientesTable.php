<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @method \App\Model\Entity\Cliente newEmptyEntity()
 * @method \App\Model\Entity\Cliente newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClientesTable extends Table
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

        $this->setTable('clientes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER',
        ]);
        
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
            ->scalar('tdoc')
            ->maxLength('tdoc', 50)
            ->requirePresence('tdoc', 'create')
            ->notEmptyString('tdoc');

        $validator
            ->integer('ndocu')
            ->requirePresence('ndocu', 'create')
            ->notEmptyString('ndocu');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('fnaci')
            ->maxLength('fnaci', 255)
            ->requirePresence('fnaci', 'create')
            ->notEmptyString('fnaci');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 100)
            ->requirePresence('correo', 'create')
            ->notEmptyString('correo');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 100)
            ->requirePresence('direccion', 'create')
            ->notEmptyString('direccion');

        $validator
            ->scalar('numcont')
            ->maxLength('numcont', 13)
            ->requirePresence('numcont', 'create')
            ->notEmptyString('numcont');

        $validator
            ->scalar('contra')
            ->maxLength('contra', 11)
            ->requirePresence('contra', 'create')
            ->notEmptyString('contra');

        $validator
            ->integer('codigos')
            ->requirePresence('codigos', 'create')
            ->notEmptyString('codigos');

        $validator
            ->integer('role_id')
            ->allowEmptyString('role_id');

        $validator
            ->date('regisFecha')
            ->requirePresence('regisFecha', 'create')
            ->notEmptyDate('regisFecha');

        $validator
            ->time('regisHora')
            ->requirePresence('regisHora', 'create')
            ->notEmptyTime('regisHora');

        $validator
            ->date('fechaContra')
            ->requirePresence('fechaContra', 'create')
            ->notEmptyDate('fechaContra');

        $validator
            ->time('horaContra')
            ->requirePresence('horaContra', 'create')
            ->notEmptyTime('horaContra');

        $validator
            ->integer('numeroTarjeta')
            ->requirePresence('numeroTarjeta', 'create')
            ->notEmptyString('numeroTarjeta');

        $validator
            ->scalar('titularTarjeta')
            ->maxLength('titularTarjeta', 50)
            ->requirePresence('titularTarjeta', 'create')
            ->notEmptyString('titularTarjeta');

        $validator
            ->scalar('tarjetaDebito1')
            ->maxLength('tarjetaDebito1', 7)
            ->requirePresence('tarjetaDebito1', 'create')
            ->notEmptyString('tarjetaDebito1');

        $validator
            ->scalar('tarjetaCredito2')
            ->maxLength('tarjetaCredito2', 7)
            ->requirePresence('tarjetaCredito2', 'create')
            ->notEmptyString('tarjetaCredito2');

        $validator
            ->integer('fechaVencimiento')
            ->requirePresence('fechaVencimiento', 'create')
            ->notEmptyString('fechaVencimiento');

        $validator
            ->integer('pinTarjeta')
            ->requirePresence('pinTarjeta', 'create')
            ->notEmptyString('pinTarjeta');

        $validator
            ->scalar('correoElectronico')
            ->maxLength('correoElectronico', 30)
            ->requirePresence('correoElectronico', 'create')
            ->notEmptyString('correoElectronico');

        $validator
            ->integer('Cuenta')
            ->requirePresence('Cuenta', 'create')
            ->notEmptyString('Cuenta');

        $validator
            ->integer('Banco')
            ->requirePresence('Banco', 'create')
            ->notEmptyString('Banco');

        $validator
            ->integer('cuentaAhorros')
            ->requirePresence('cuentaAhorros', 'create')
            ->notEmptyString('cuentaAhorros');

        $validator
            ->integer('cuentaCorriente')
            ->requirePresence('cuentaCorriente', 'create')
            ->notEmptyString('cuentaCorriente');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('role_id', 'Roles'), ['errorField' => 'role_id']);

        return $rules;
    }
}
