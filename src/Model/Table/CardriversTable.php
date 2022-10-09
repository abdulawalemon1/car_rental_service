<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cardrivers Model
 *
 * @property \App\Model\Table\CarsTable&\Cake\ORM\Association\BelongsTo $Cars
 * @property \App\Model\Table\DriversTable&\Cake\ORM\Association\BelongsTo $Drivers
 *
 * @method \App\Model\Entity\Cardriver newEmptyEntity()
 * @method \App\Model\Entity\Cardriver newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cardriver[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cardriver get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cardriver findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cardriver patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cardriver[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cardriver|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cardriver saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cardriver[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cardriver[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cardriver[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cardriver[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CardriversTable extends Table
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

        $this->setTable('cardrivers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cars', [
            'foreignKey' => 'car_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Drivers', [
            'foreignKey' => 'driver_id',
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
            ->integer('car_id')
            ->notEmptyString('car_id');

        $validator
            ->integer('driver_id')
            ->notEmptyString('driver_id');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

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
        $rules->add($rules->existsIn('car_id', 'Cars'), ['errorField' => 'car_id']);
        $rules->add($rules->existsIn('driver_id', 'Drivers'), ['errorField' => 'driver_id']);

        return $rules;
    }
}
