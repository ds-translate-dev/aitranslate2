<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderContent $orderContent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order Content'), ['action' => 'edit', $orderContent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Content'), ['action' => 'delete', $orderContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderContent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Contents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Content'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Receptions'), ['controller' => 'Receptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reception'), ['controller' => 'Receptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orderContents view large-9 medium-8 columns content">
  翻訳結果

    <h3><?= h($orderContent->id) ?></h3>

    <div class="row">
<Table>
<tr><th>翻訳結果</th></tr>
<tr><td>原文：<?= h($orderContent->trans_input)?></td></tr>
<tr><td>訳文：<?= h($orderContent->trans_result) ?></td></tr>
</table>


    </div>

    <?= $this->Html->link(__('AI翻訳'), ['action' => 'edit', $orderContent->id]) ?>


</div>
