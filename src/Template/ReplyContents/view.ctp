<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReplyContent $replyContent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reply Content'), ['action' => 'edit', $replyContent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reply Content'), ['action' => 'delete', $replyContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $replyContent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reply Contents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reply Content'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Receptions'), ['controller' => 'Receptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reception'), ['controller' => 'Receptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="replyContents view large-9 medium-8 columns content">
    <h3><?= h($replyContent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Reception') ?></th>
            <td><?= $replyContent->has('reception') ? $this->Html->link($replyContent->reception->id, ['controller' => 'Receptions', 'action' => 'view', $replyContent->reception->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Pass') ?></th>
            <td><?= h($replyContent->file_pass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($replyContent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($replyContent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($replyContent->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($replyContent->content)); ?>
    </div>
</div>
