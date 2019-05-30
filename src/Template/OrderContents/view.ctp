<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderContent $orderContent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order Content'), ['action' => 'edit', $orderContent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Content'), ['action' => 'delete', $orderContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderContent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Contents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Content'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Receptions'), ['controller' => 'Receptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reception'), ['controller' => 'Receptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orderContents view large-9 medium-8 columns content">
    <h3><?= h($orderContent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Reception') ?></th>
            <td><?= $orderContent->has('reception') ? $this->Html->link($orderContent->reception->id, ['controller' => 'Receptions', 'action' => 'view', $orderContent->reception->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Pass') ?></th>
            <td><?= h($orderContent->file_pass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($orderContent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($orderContent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($orderContent->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($orderContent->content)); ?>
    </div>

    <?= $this->Html->link(__('AI翻訳'), ['action' => 'translate', $orderContent->id]) ?>


</div>
