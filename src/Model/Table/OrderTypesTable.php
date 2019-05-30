<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrderTypes Model
 *
 * @property \App\Model\Table\ReceptionsTable|\Cake\ORM\Association\HasMany $Receptions
 *
 * @method \App\Model\Entity\OrderType get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrderType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrderType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrderType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrderType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrderType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrderType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrderType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrderTypesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('order_types');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Receptions', [
            'foreignKey' => 'order_type_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('order_type_name')
            ->maxLength('order_type_name', 255)
            ->requirePresence('order_type_name', 'create')
            ->allowEmptyString('order_type_name', false);

        return $validator;
    }
}
