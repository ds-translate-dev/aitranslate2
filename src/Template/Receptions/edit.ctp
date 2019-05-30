<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reception $reception
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reception->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reception->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Receptions'), ['action' => 'index']) ?></li>
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
<div class="receptions form large-9 medium-8 columns content">
    <?= $this->Form->create($reception) ?>
    <fieldset>
        <legend><?= __('Edit Reception') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('order_type_id', ['options' => $orderTypes]);
            echo $this->Form->control('reply_type_id', ['options' => $replyTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
