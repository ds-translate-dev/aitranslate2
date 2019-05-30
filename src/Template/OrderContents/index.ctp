<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderContent[]|\Cake\Collection\CollectionInterface $orderContents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order Content'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Receptions'), ['controller' => 'Receptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reception'), ['controller' => 'Receptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderContents index large-9 medium-8 columns content">
    <h3><?= __('Order Contents') ?></h3>
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
            <?php foreach ($orderContents as $orderContent): ?>
            <tr>
                <td><?= $this->Number->format($orderContent->id) ?></td>
                <td><?= $orderContent->has('reception') ? $this->Html->link($orderContent->reception->id, ['controller' => 'Receptions', 'action' => 'view', $orderContent->reception->id]) : '' ?></td>
                <td><?= h($orderContent->file_pass) ?></td>
                <td><?= h($orderContent->created) ?></td>
                <td><?= h($orderContent->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orderContent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderContent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderContent->id)]) ?>
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
