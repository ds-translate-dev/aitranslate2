<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Categories'), ['controller' => 'UserCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Category'), ['controller' => 'UserCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Receptions'), ['controller' => 'Receptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reception'), ['controller' => 'Receptions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sentences'), ['controller' => 'Sentences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sentence'), ['controller' => 'Sentences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('user_name');
            echo $this->Form->control('password');
            echo $this->Form->control('email');
            echo $this->Form->control('expiration', ['empty' => true]);
            echo $this->Form->control('user_category_id', ['options' => $userCategories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
