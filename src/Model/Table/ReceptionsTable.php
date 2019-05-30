<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Receptions Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\OrderTypesTable|\Cake\ORM\Association\BelongsTo $OrderTypes
 * @property \App\Model\Table\ReplyTypesTable|\Cake\ORM\Association\BelongsTo $ReplyTypes
 * @property \App\Model\Table\OrderContensTable|\Cake\ORM\Association\HasMany $OrderContens
 * @property |\Cake\ORM\Association\HasMany $ReplyContents
 *
 * @method \App\Model\Entity\Reception get($primaryKey, $options = [])
 * @method \App\Model\Entity\Reception newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Reception[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reception|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reception saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reception patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Reception[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reception findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ReceptionsTable extends Table
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

        $this->setTable('receptions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OrderTypes', [
            'foreignKey' => 'order_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ReplyTypes', [
            'foreignKey' => 'reply_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('OrderContens', [
            'foreignKey' => 'reception_id'
        ]);
        $this->hasMany('ReplyContents', [
            'foreignKey' => 'reception_id'
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['order_type_id'], 'OrderTypes'));
        $rules->add($rules->existsIn(['reply_type_id'], 'ReplyTypes'));

        return $rules;
    }
}
