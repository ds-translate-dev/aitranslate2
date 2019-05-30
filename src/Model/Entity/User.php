<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $user_name
 * @property string $password
 * @property string $email
 * @property \Cake\I18n\FrozenTime|null $expiration
 * @property int $user_category_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\UserCategory $user_category
 * @property \App\Model\Entity\Reception[] $receptions
 * @property \App\Model\Entity\Sentence[] $sentences
 */
class User extends Entity
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
        'user_name' => true,
        'password' => true,
        'email' => true,
        'expiration' => true,
        'user_category_id' => true,
        'created' => true,
        'modified' => true,
        'user_category' => true,
        'receptions' => true,
        'sentences' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
