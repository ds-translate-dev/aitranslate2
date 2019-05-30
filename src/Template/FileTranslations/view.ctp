<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FileTranslation $fileTranslation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit File Translation'), ['action' => 'edit', $fileTranslation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete File Translation'), ['action' => 'delete', $fileTranslation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileTranslation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List File Translations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File Translation'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fileTranslations view large-9 medium-8 columns content">
    <h3><?= h($fileTranslation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fileTranslation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fileTranslation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fileTranslation->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Input Txt') ?></h4>
        <?= $this->Text->autoParagraph(h($fileTranslation->input_txt)); ?>
    </div>
    <div class="row">
        <h4><?= __('Input File Pass') ?></h4>
        <?= $this->Text->autoParagraph(h($fileTranslation->input_file_pass)); ?>
    </div>
    <div class="row">
        <h4><?= __('Output Txt') ?></h4>
        <?= $this->Text->autoParagraph(h($fileTranslation->output_txt)); ?>
    </div>
    <div class="row">
        <h4><?= __('Output File Pass') ?></h4>
        <?= $this->Text->autoParagraph(h($fileTranslation->output_file_pass)); ?>
    </div>
</div>
