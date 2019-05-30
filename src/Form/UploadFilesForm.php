<?php
namespace App\Form;
use Cake\Form\Form;
use Cake\Validation\Validator;

class UploadFilesForm extends Form
{
  protected function _buildValidator(Validator $validator)
  {
    $validator->provider('customValidate', 'App\Model\Validation\CustomValidation');

    $validator
      ->add('upload_file', 'isCsv', [
        'provider' => 'customValidate',
        'rule' => 'isCsv',
        'message' => 'CSVファイルのみアップロード可能です',
      ])
      ->add('upload_file', 'limitFileSize', [
        'provider' => 'customValidate',
        'rule' => 'limitFileSize',
        'message' => '200バイト以内にしてください',
      ]);

    return $validator;
  }
}
