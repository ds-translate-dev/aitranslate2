<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Categories'), ['controller' => 'UserCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Category'), ['controller' => 'UserCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Receptions'), ['controller' => 'Receptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reception'), ['controller' => 'Receptions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sentences'), ['controller' => 'Sentences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sentence'), ['controller' => 'Sentences', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($user->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Category') ?></th>
            <td><?= $user->has('user_category') ? $this->Html->link($user->user_category->id, ['controller' => 'UserCategories', 'action' => 'view', $user->user_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expiration') ?></th>
            <td><?= h($user->expiration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Receptions') ?></h4>
        <?php if (!empty($user->receptions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Order Type Id') ?></th>
                <th scope="col"><?= __('Reply Type Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->receptions as $receptions): ?>
            <tr>
                <td><?= h($receptions->id) ?></td>
                <td><?= h($receptions->user_id) ?></td>
                <td><?= h($receptions->order_type_id) ?></td>
                <td><?= h($receptions->reply_type_id) ?></td>
                <td><?= h($receptions->created) ?></td>
                <td><?= h($receptions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Receptions', 'action' => 'view', $receptions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Receptions', 'action' => 'edit', $receptions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Receptions', 'action' => 'delete', $receptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receptions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sentences') ?></h4>
        <?php if (!empty($user->sentences)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Original') ?></th>
                <th scope="col"><?= __('Translated') ?></th>
                <th scope="col"><?= __('Published') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->sentences as $sentences): ?>
            <tr>
                <td><?= h($sentences->id) ?></td>
                <td><?= h($sentences->user_id) ?></td>
                <td><?= h($sentences->slug) ?></td>
                <td><?= h($sentences->original) ?></td>
                <td><?= h($sentences->translated) ?></td>
                <td><?= h($sentences->published) ?></td>
                <td><?= h($sentences->created) ?></td>
                <td><?= h($sentences->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sentences', 'action' => 'view', $sentences->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sentences', 'action' => 'edit', $sentences->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sentences', 'action' => 'delete', $sentences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sentences->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
