<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produit $produit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Task'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List of comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste de tâche 2.0'), ['controller' => 'Produits', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="produits view large-9 medium-8 columns content">
    <h3><?= h($produit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code de tâche') ?></th>
            <td><?= h($produit->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tâche vague') ?></th>
            <td><?= h($produit->actionPro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produit->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Obec Cities') ?></h4>
        <?php if (!empty($produit->emplacementProduits)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('tâche vague Id') ?></th>
                <th scope="col"><?= __('emplacement tâche Id') ?></th>
                <th scope="col"><?= __('Code de tâche') ?></th>
                <th scope="col"><?= __('Tâche vague') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($produit->emplacementProduits as $emplacementProduits): ?>
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
    <div class="related">
        <h4><?= __('Related actions') ?></h4>
        <?php if (!empty($produit->actions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Produit Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('actionPro') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($produit->actions as $actions): ?>
            <tr>
                <td><?= h($actions->id) ?></td>
                <td><?= h($actions->produit_id) ?></td>
                <td><?= h($actions->code) ?></td>
                <td><?= h($actions->actionPro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Actions', 'action' => 'view', $actions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Actions', 'action' => 'edit', $actions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Actions', 'action' => 'delete', $actions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
