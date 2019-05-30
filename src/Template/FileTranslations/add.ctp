<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FileTranslation $fileTranslation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List File Translations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="fileTranslations form large-9 medium-8 columns content">
    <?php
     echo $this->Form->create($fileTranslation,['enctype' => 'multipart/form-data','url' => ['controller' => 'FileTranslations', 'action' => 'add']]) ;

      //echo $this->Form->create($fileform, ['type' => 'file', 'url' => ['controller' => 'FileTranslation', 'action' => 'add']]);

    ?>
    <fieldset>
        <legend><?= __('Add File Translation') ?></legend>

        <?php
            echo $this->Form->control('code', ['options' => $selectlang,'label' => '変換先の言語']);
            echo $this->Form->control('input_txt');
            echo $this->Form->control('input_file_pass');
            echo $this->Form->control('output_txt');
            echo $this->Form->control('output_file_pass');
            echo $this->Form->control('upload_file', ['type' => 'file', 'label' => 'ファイル', 'required' => true,]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
