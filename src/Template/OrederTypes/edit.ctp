<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrederType $orederType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orederType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orederType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Oreder Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="orederTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($orederType) ?>
    <fieldset>
        <legend><?= __('Edit Oreder Type') ?></legend>
        <?php
            echo $this->Form->control('order_type_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
