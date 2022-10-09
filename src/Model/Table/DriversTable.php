<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Drivers Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CarDriversTable&\Cake\ORM\Association\HasMany $CarDrivers
 *
 * @method \App\Model\Entity\Driver newEmptyEntity()
 * @method \App\Model\Entity\Driver newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Driver[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Driver get($primaryKey, $options = [])
 * @method \App\Model\Entity\Driver findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Driver patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Driver[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Driver|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Driver saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Driver[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Driver[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Driver[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Driver[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DriversTable extends Table
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

        $this->setTable('drivers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('CarDrivers', [
            'foreignKey' => 'driver_id',
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
            ->scalar('driver_name')
            ->maxLength('driver_name', 100)
            ->requirePresence('driver_name', 'create')
            ->notEmptyString('driver_name');

        $validator
            ->scalar('licence_no')
            ->maxLength('licence_no', 100)
            ->requirePresence('licence_no', 'create')
            ->notEmptyString('licence_no');

        $validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmptyString('age');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->requirePresence('photo', 'create')
            ->notEmptyString('photo');

        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

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
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
