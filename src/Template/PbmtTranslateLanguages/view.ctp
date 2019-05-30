<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PbmtTranslateLanguage $pbmtTranslateLanguage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pbmt Translate Language'), ['action' => 'edit', $pbmtTranslateLanguage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pbmt Translate Language'), ['action' => 'delete', $pbmtTranslateLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pbmtTranslateLanguage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pbmt Translate Languages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pbmt Translate Language'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pbmtTranslateLanguages view large-9 medium-8 columns content">
    <h3><?= h($pbmtTranslateLanguage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Language') ?></th>
            <td><?= h($pbmtTranslateLanguage->language) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($pbmtTranslateLanguage->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pbmtTranslateLanguage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sort') ?></th>
            <td><?= $this->Number->format($pbmtTranslateLanguage->sort) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pbmtTranslateLanguage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pbmtTranslateLanguage->modified) ?></td>
        </tr>
    </table>
</div>
