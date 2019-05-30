<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReplyConten $replyConten
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reply Conten'), ['action' => 'edit', $replyConten->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reply Conten'), ['action' => 'delete', $replyConten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $replyConten->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reply Contens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reply Conten'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Receptions'), ['controller' => 'Receptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reception'), ['controller' => 'Receptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="replyContens view large-9 medium-8 columns content">
    <h3><?= h($replyConten->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Reception') ?></th>
            <td><?= $replyConten->has('reception') ? $this->Html->link($replyConten->reception->id, ['controller' => 'Receptions', 'action' => 'view', $replyConten->reception->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Pass') ?></th>
            <td><?= h($replyConten->file_pass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($replyConten->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($replyConten->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($replyConten->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($replyConten->content)); ?>
    </div>
</div>
