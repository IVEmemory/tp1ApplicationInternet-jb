<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ObecCity $emplacementProduit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Emplacement Produit'), ['action' => 'edit', $emplacementProduit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emplacement produit'), ['action' => 'delete', $emplacementProduit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emplacementProduit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List emplacements produits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emplacement produit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produits'), ['controller' => 'Produits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New produit'), ['controller' => 'Produits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List actions'), ['controller' => 'Actions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New action'), ['controller' => 'Actions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste de tâche 2.0'), ['controller' => 'Produits', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="emplacementProduits view large-9 medium-8 columns content">
    <h3><?= h($emplacementProduit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Produit') ?></th>
            <td><?= $emplacementProduit->has('produit') ? $this->Html->link($emplacementProduit->produit->id, ['controller' => 'Produits', 'action' => 'view', $emplacementProduit->produit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action') ?></th>
            <td><?= $emplacementProduit->has('action') ? $this->Html->link($emplacementProduit->action->id, ['controller' => 'Actions', 'action' => 'view', $emplacementProduit->action->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($emplacementProduit->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('actionPro') ?></th>
            <td><?= h($emplacementProduit->actionPro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($emplacementProduit->id) ?></td>
        </tr>
    </table>
</div>
