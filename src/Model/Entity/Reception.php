<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reception Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $order_type_id
 * @property int $reply_type_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\OrderType $order_type
 * @property \App\Model\Entity\ReplyType $reply_type
 * @property \App\Model\Entity\OrderConten[] $order_contens
 * @property \App\Model\Entity\ReplyConten[] $reply_contens
 */
class Reception extends Entity
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
        'user_id' => true,
        'order_type_id' => true,
        'reply_type_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'order_type' => true,
        'reply_type' => true,
        'order_contens' => true,
        'reply_contens' => true
    ];
}
