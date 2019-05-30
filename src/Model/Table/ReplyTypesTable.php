<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ReplyTypes Model
 *
 * @property \App\Model\Table\ReceptionsTable|\Cake\ORM\Association\HasMany $Receptions
 *
 * @method \App\Model\Entity\ReplyType get($primaryKey, $options = [])
 * @method \App\Model\Entity\ReplyType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ReplyType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ReplyType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReplyType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReplyType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ReplyType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ReplyType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ReplyTypesTable extends Table
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

        $this->setTable('reply_types');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Receptions', [
            'foreignKey' => 'reply_type_id'
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
            ->scalar('reply_type_name')
            ->maxLength('reply_type_name', 255)
            ->requirePresence('reply_type_name', 'create')
            ->allowEmptyString('reply_type_name', false);

        return $validator;
    }
}
