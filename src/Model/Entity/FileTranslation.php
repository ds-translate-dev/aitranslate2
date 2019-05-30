<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FileTranslation Entity
 *
 * @property int $id
 * @property string|null $input_txt
 * @property string|null $input_file_pass
 * @property string|null $input_file_type
 * @property string|null $output_txt
 * @property string|null $output_file_pass
 * @property string|null $output_file_type
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class FileTranslation extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'input_txt' => true,
        'input_file_pass' => true,
        'input_file_type' => true,
        'output_txt' => true,
        'output_file_pass' => true,
        'output_file_type' => true,
        'created' => true,
        'modified' => true
    ];
}
