<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TextTranslations Model
 *
 * @method \App\Model\Entity\TextTranslation get($primaryKey, $options = [])
 * @method \App\Model\Entity\TextTranslation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TextTranslation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TextTranslation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TextTranslation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TextTranslation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TextTranslation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TextTranslation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TextTranslationsTable extends Table
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

        $this->setTable('text_translations');
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
            ->scalar('input_txt')
            ->allowEmptyString('input_txt');

        $validator
            ->scalar('output_txt')
            ->allowEmptyString('output_txt');

        return $validator;
    }
}
