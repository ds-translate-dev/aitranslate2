<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TextTranslation Entity
 *
 * @property int $id
 * @property string|null $input_txt
 * @property string|null $output_txt
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class TextTranslation extends Entity
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
        'output_txt' => true,
        'created' => true,
        'modified' => true
    ];
}
