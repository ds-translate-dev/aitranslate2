<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FileTranslations Model
 *
 * @method \App\Model\Entity\FileTranslation get($primaryKey, $options = [])
 * @method \App\Model\Entity\FileTranslation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FileTranslation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FileTranslation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FileTranslation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FileTranslation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FileTranslation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FileTranslation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FileTranslationsTable extends Table
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

        $this->setTable('file_translations');
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
            ->scalar('input_file_pass')
            ->allowEmptyFile('input_file_pass');

        $validator
            ->scalar('input_file_type')
            ->maxLength('input_file_type', 255)
            ->allowEmptyFile('input_file_type');

        $validator
            ->scalar('output_txt')
            ->allowEmptyString('output_txt');

        $validator
            ->scalar('output_file_pass')
            ->allowEmptyFile('output_file_pass');

        $validator
            ->scalar('output_file_type')
            ->maxLength('output_file_type', 255)
            ->allowEmptyFile('output_file_type');

        return $validator;
    }
}
