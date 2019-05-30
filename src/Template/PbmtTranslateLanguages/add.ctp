<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PbmtTranslateLanguage $pbmtTranslateLanguage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pbmt Translate Languages'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pbmtTranslateLanguages form large-9 medium-8 columns content">
    <?= $this->Form->create($pbmtTranslateLanguage) ?>
    <fieldset>
        <legend><?= __('Add Pbmt Translate Language') ?></legend>
        <?php
            echo $this->Form->control('language');
            echo $this->Form->control('code');
            echo $this->Form->control('sort');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
