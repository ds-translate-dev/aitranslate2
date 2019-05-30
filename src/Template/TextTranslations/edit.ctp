<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TextTranslation $textTranslation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $textTranslation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $textTranslation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Text Translations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="textTranslations form large-9 medium-8 columns content">
    <?= $this->Form->create($textTranslation) ?>
    <fieldset>
        <legend><?= __('Edit Text Translation') ?></legend>
        <?php
            echo $this->Form->control('input_txt');
            echo $this->Form->control('output_txt');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
