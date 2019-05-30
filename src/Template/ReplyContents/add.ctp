<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReplyContent $replyContent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Reply Contents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Receptions'), ['controller' => 'Receptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reception'), ['controller' => 'Receptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="replyContents form large-9 medium-8 columns content">
    <?= $this->Form->create($replyContent) ?>
    <fieldset>
        <legend><?= __('Add Reply Content') ?></legend>
        <?php
            echo $this->Form->control('reception_id', ['options' => $receptions]);
            echo $this->Form->control('file_pass');
            echo $this->Form->control('content');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
