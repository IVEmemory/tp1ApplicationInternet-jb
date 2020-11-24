<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OkresCounty $action
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit action'), ['action' => 'edit', $action->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete action'), ['action' => 'delete', $action->id], ['confirm' => __('Are you sure you want to delete # {0}?', $action->id)]) ?> </li>
        <li><?= $this->Html->link(__('List actions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New action'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List produits'), ['controller' => 'Produits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New produit'), ['controller' => 'Produits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List emplacement produit'), ['controller' => 'EmplacementProduits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New emplacemnt produit'), ['controller' => 'EmplacementProduits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste de tâche 2.0'), ['controller' => 'Produits', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="actions view large-9 medium-8 columns content">
    <h3><?= h($action->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Kraj Region') ?></th>
            <td><?= $action->has('produit') ? $this->Html->link($action->produit->id, ['controller' => 'Produits', 'action' => 'view', $action->produit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($action->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('actionPro') ?></th>
            <td><?= h($action->actionPro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($action->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Obec Cities') ?></h4>
        <?php if (!empty($action->emplacementProduits)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Kraj Region Id') ?></th>
                <th scope="col"><?= __('Okres County Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('ActionPro') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($action->emplacementProduits as $emplacementProduits): ?>
            <tr>
                <td><?= h($emplacementProduits->id) ?></td>
                <td><?= h($emplacementProduits->produit_id) ?></td>
                <td><?= h($emplacementProduits->action_id) ?></td>
                <td><?= h($emplacementProduits->code) ?></td>
                <td><?= h($emplacementProduits->actionPro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmplacementProduits', 'action' => 'view', $emplacementProduits->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmplacementProduits', 'action' => 'edit', $emplacementProduits->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmplacementProduits', 'action' => 'delete', $emplacementProduits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emplacementProduits->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
