<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ReplyContens Model
 *
 * @property \App\Model\Table\ReceptionsTable|\Cake\ORM\Association\BelongsTo $Receptions
 *
 * @method \App\Model\Entity\ReplyConten get($primaryKey, $options = [])
 * @method \App\Model\Entity\ReplyConten newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ReplyConten[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ReplyConten|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReplyConten saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReplyConten patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ReplyConten[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ReplyConten findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ReplyContensTable extends Table
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

        $this->setTable('reply_contens');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Receptions', [
            'foreignKey' => 'reception_id',
            'joinType' => 'INNER'
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
            ->scalar('file_pass')
            ->maxLength('file_pass', 255)
            ->allowEmptyFile('file_pass');

        $validator
            ->scalar('content')
            ->allowEmptyString('content');

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
        $rules->add($rules->existsIn(['reception_id'], 'Receptions'));

        return $rules;
    }
}
