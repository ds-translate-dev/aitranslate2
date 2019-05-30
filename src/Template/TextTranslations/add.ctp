<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TextTranslation $textTranslation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Text Translations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="textTranslations form large-9 medium-8 columns content">
    <?= $this->Form->create($textTranslation) ?>
    <?php
    echo $this->Form->control('code', ['options' => $selectlang,'label' => '変換先の言語']);
    ?>

    <fieldset>
        <legend><?= __('翻訳したい文章を入力してください') ?></legend>
        <?php
            echo $this->Form->control('input_txt',['label' =>false]);
            //echo $this->Form->control('output_txt');
        ?>
    </fieldset>
    <?= $this->Form->button(__('翻訳')) ?>
    <?= $this->Form->end() ?>
</div>
