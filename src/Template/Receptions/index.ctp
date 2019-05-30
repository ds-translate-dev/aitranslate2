<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reception[]|\Cake\Collection\CollectionInterface $receptions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Reception'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Types'), ['controller' => 'OrderTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Type'), ['controller' => 'OrderTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reply Types'), ['controller' => 'ReplyTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reply Type'), ['controller' => 'ReplyTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Contens'), ['controller' => 'OrderContens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Conten'), ['controller' => 'OrderContens', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="receptions index large-9 medium-8 columns content">
    <h3><?= __('Receptions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reply_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($receptions as $reception): ?>
            <tr>
                <td><?= $this->Number->format($reception->id) ?></td>
                <td><?= $reception->has('user') ? $this->Html->link($reception->user->id, ['controller' => 'Users', 'action' => 'view', $reception->user->id]) : '' ?></td>
                <td><?= $reception->has('order_type') ? $this->Html->link($reception->order_type->id, ['controller' => 'OrderTypes', 'action' => 'view', $reception->order_type->id]) : '' ?></td>
                <td><?= $reception->has('reply_type') ? $this->Html->link($reception->reply_type->id, ['controller' => 'ReplyTypes', 'action' => 'view', $reception->reply_type->id]) : '' ?></td>
                <td><?= h($reception->created) ?></td>
                <td><?= h($reception->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reception->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reception->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reception->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reception->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
