<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PbmtSourceLanguages Model
 *
 * @method \App\Model\Entity\PbmtSourceLanguage get($primaryKey, $options = [])
 * @method \App\Model\Entity\PbmtSourceLanguage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PbmtSourceLanguage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PbmtSourceLanguage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PbmtSourceLanguage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PbmtSourceLanguage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PbmtSourceLanguage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PbmtSourceLanguage findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PbmtSourceLanguagesTable extends Table
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

        $this->setTable('pbmt_source_languages');
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
            ->scalar('language')
            ->maxLength('language', 255)
            ->requirePresence('language', 'create')
            ->allowEmptyString('language', false);

        $validator
            ->scalar('code')
            ->maxLength('code', 255)
            ->requirePresence('code', 'create')
            ->allowEmptyString('code', false);

        $validator
            ->scalar('order')
            ->maxLength('order', 255)
            ->allowEmptyString('order');

        return $validator;
    }
}
