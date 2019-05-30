<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReplyConten[]|\Cake\Collection\CollectionInterface $replyContens
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Reply Conten'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Receptions'), ['controller' => 'Receptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reception'), ['controller' => 'Receptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="replyContens index large-9 medium-8 columns content">
    <h3><?= __('Reply Contens') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reception_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_pass') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($replyContens as $replyConten): ?>
            <tr>
                <td><?= $this->Number->format($replyConten->id) ?></td>
                <td><?= $replyConten->has('reception') ? $this->Html->link($replyConten->reception->id, ['controller' => 'Receptions', 'action' => 'view', $replyConten->reception->id]) : '' ?></td>
                <td><?= h($replyConten->file_pass) ?></td>
                <td><?= h($replyConten->created) ?></td>
                <td><?= h($replyConten->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $replyConten->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $replyConten->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $replyConten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $replyConten->id)]) ?>
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
