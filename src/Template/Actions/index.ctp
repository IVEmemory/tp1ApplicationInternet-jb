<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OkresCounty[]|\Cake\Collection\CollectionInterface $actions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Okres County'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kraj Regions'), ['controller' => 'Produits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kraj Region'), ['controller' => 'Produits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Obec Cities'), ['controller' => 'EmplacementProduits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Obec City'), ['controller' => 'EmplacementProduits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actions index large-9 medium-8 columns content">
    <h3><?= __('Okres Counties') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('produit_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actionPro') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actions as $action): ?>
            <tr>
                <td><?= $this->Number->format($action->id) ?></td>
                <td><?= $action->has('produit') ? $this->Html->link($action->produit->id, ['controller' => 'Produits', 'action' => 'view', $action->produit->id]) : '' ?></td>
                <td><?= h($action->code) ?></td>
                <td><?= h($action->actionPro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $action->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $action->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $action->id], ['confirm' => __('Are you sure you want to delete # {0}?', $action->id)]) ?>
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
