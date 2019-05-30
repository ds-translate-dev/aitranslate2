<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrederTypes Model
 *
 * @method \App\Model\Entity\OrederType get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrederType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrederType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrederType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrederType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrederType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrederType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrederType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrederTypesTable extends Table
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

        $this->setTable('oreder_types');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
