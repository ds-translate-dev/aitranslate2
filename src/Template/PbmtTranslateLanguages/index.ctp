<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PbmtTranslateLanguage[]|\Cake\Collection\CollectionInterface $pbmtTranslateLanguages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pbmt Translate Language'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pbmtTranslateLanguages index large-9 medium-8 columns content">
    <h3><?= __('Pbmt Translate Languages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('language') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sort') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pbmtTranslateLanguages as $pbmtTranslateLanguage): ?>
            <tr>
                <td><?= $this->Number->format($pbmtTranslateLanguage->id) ?></td>
                <td><?= h($pbmtTranslateLanguage->language) ?></td>
                <td><?= h($pbmtTranslateLanguage->code) ?></td>
                <td><?= $this->Number->format($pbmtTranslateLanguage->sort) ?></td>
                <td><?= h($pbmtTranslateLanguage->created) ?></td>
                <td><?= h($pbmtTranslateLanguage->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pbmtTranslateLanguage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pbmtTranslateLanguage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pbmtTranslateLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pbmtTranslateLanguage->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
