<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReplyType $replyType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reply Type'), ['action' => 'edit', $replyType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reply Type'), ['action' => 'delete', $replyType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $replyType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reply Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reply Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Receptions'), ['controller' => 'Receptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reception'), ['controller' => 'Receptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="replyTypes view large-9 medium-8 columns content">
    <h3><?= h($replyType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Reply Type Name') ?></th>
            <td><?= h($replyType->reply_type_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($replyType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($replyType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($replyType->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Receptions') ?></h4>
        <?php if (!empty($replyType->receptions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Order Type Id') ?></th>
                <th scope="col"><?= __('Reply Type Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($replyType->receptions as $receptions): ?>
            <tr>
                <td><?= h($receptions->id) ?></td>
                <td><?= h($receptions->user_id) ?></td>
                <td><?= h($receptions->order_type_id) ?></td>
                <td><?= h($receptions->reply_type_id) ?></td>
                <td><?= h($receptions->created) ?></td>
                <td><?= h($receptions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Receptions', 'action' => 'view', $receptions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Receptions', 'action' => 'edit', $receptions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Receptions', 'action' => 'delete', $receptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receptions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
