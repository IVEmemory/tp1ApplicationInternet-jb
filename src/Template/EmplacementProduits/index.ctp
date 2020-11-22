<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ObecCity[]|\Cake\Collection\CollectionInterface $emplacementProduits
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Obec City'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kraj Regions'), ['controller' => 'Produits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kraj Region'), ['controller' => 'Produits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Okres Counties'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Okres County'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emplacementProduits index large-9 medium-8 columns content">
    <h3><?= __('Obec Cities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('produit_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('action_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actionPro') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emplacementProduits as $emplacementProduit): ?>
            <tr>
                <td><?= $this->Number->format($emplacementProduit->id) ?></td>
                <td><?= $emplacementProduit->has('produit') ? $this->Html->link($emplacementProduit->produit->id, ['controller' => 'Produits', 'action' => 'view', $emplacementProduit->produit->id]) : '' ?></td>
                <td><?= $emplacementProduit->has('action') ? $this->Html->link($emplacementProduit->action->id, ['controller' => 'Actions', 'action' => 'view', $emplacementProduit->action->id]) : '' ?></td>
                <td><?= h($emplacementProduit->code) ?></td>
                <td><?= h($emplacementProduit->actionPro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $emplacementProduit->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emplacementProduit->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emplacementProduit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emplacementProduit->id)]) ?>
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
