<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserCategory $userCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($userCategory) ?>
    <fieldset>
        <legend><?= __('Add User Category') ?></legend>
        <?php
            echo $this->Form->control('category_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
