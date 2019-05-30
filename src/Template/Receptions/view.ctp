<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reception $reception
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reception'), ['action' => 'edit', $reception->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reception'), ['action' => 'delete', $reception->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reception->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Receptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reception'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Types'), ['controller' => 'OrderTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Type'), ['controller' => 'OrderTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reply Types'), ['controller' => 'ReplyTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reply Type'), ['controller' => 'ReplyTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Contens'), ['controller' => 'OrderContens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Conten'), ['controller' => 'OrderContens', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="receptions view large-9 medium-8 columns content">
    <h3><?= h($reception->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $reception->has('user') ? $this->Html->link($reception->user->id, ['controller' => 'Users', 'action' => 'view', $reception->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Type') ?></th>
            <td><?= $reception->has('order_type') ? $this->Html->link($reception->order_type->id, ['controller' => 'OrderTypes', 'action' => 'view', $reception->order_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reply Type') ?></th>
            <td><?= $reception->has('reply_type') ? $this->Html->link($reception->reply_type->id, ['controller' => 'ReplyTypes', 'action' => 'view', $reception->reply_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($reception->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($reception->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($reception->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Order Contens') ?></h4>
        <?php if (!empty($reception->order_contens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Reception Id') ?></th>
                <th scope="col"><?= __('File Pass') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($reception->order_contens as $orderContens): ?>
            <tr>
                <td><?= h($orderContens->id) ?></td>
                <td><?= h($orderContens->reception_id) ?></td>
                <td><?= h($orderContens->file_pass) ?></td>
                <td><?= h($orderContens->content) ?></td>
                <td><?= h($orderContens->created) ?></td>
                <td><?= h($orderContens->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrderContens', 'action' => 'view', $orderContens->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrderContens', 'action' => 'edit', $orderContens->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderContens', 'action' => 'delete', $orderContens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderContens->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
