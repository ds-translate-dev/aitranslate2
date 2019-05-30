<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PbmtTranslateLanguages Model
 *
 * @method \App\Model\Entity\PbmtTranslateLanguage get($primaryKey, $options = [])
 * @method \App\Model\Entity\PbmtTranslateLanguage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PbmtTranslateLanguage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PbmtTranslateLanguage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PbmtTranslateLanguage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PbmtTranslateLanguage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PbmtTranslateLanguage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PbmtTranslateLanguage findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PbmtTranslateLanguagesTable extends Table
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

        $this->setTable('pbmt_translate_languages');
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
            ->integer('sort')
            ->allowEmptyString('sort');

        return $validator;
    }
}
