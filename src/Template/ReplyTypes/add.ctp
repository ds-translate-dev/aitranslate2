<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReplyType $replyType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Reply Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Receptions'), ['controller' => 'Receptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reception'), ['controller' => 'Receptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="replyTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($replyType) ?>
    <fieldset>
        <legend><?= __('Add Reply Type') ?></legend>
        <?php
            echo $this->Form->control('reply_type_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
