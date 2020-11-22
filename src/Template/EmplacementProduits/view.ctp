<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ObecCity $emplacementProduit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Obec City'), ['action' => 'edit', $emplacementProduit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Obec City'), ['action' => 'delete', $emplacementProduit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emplacementProduit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Obec Cities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Obec City'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Kraj Regions'), ['controller' => 'Produits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kraj Region'), ['controller' => 'Produits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Okres Counties'), ['controller' => 'Actions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Okres County'), ['controller' => 'Actions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emplacementProduits view large-9 medium-8 columns content">
    <h3><?= h($emplacementProduit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Kraj Region') ?></th>
            <td><?= $emplacementProduit->has('produit') ? $this->Html->link($emplacementProduit->produit->id, ['controller' => 'Produits', 'action' => 'view', $emplacementProduit->produit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Okres County') ?></th>
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
