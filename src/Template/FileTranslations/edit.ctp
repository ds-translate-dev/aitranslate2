<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FileTranslation $fileTranslation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fileTranslation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fileTranslation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List File Translations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="fileTranslations form large-9 medium-8 columns content">
    <?= $this->Form->create($fileTranslation) ?>
    <fieldset>
        <legend><?= __('Edit File Translation') ?></legend>
        <?php
            echo $this->Form->control('input_txt');
            echo $this->Form->control('input_file_pass');
            echo $this->Form->control('output_txt');
            echo $this->Form->control('output_file_pass');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
