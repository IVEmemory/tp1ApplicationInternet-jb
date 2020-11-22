<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ObecCity $emplacementProduit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $emplacementProduit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $emplacementProduit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Obec Cities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Kraj Regions'), ['controller' => 'Produits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kraj Region'), ['controller' => 'Produits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Okres Counties'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Okres County'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emplacementProduits form large-9 medium-8 columns content">
    <?= $this->Form->create($emplacementProduit) ?>
    <fieldset>
        <legend><?= __('Edit Obec City') ?></legend>
        <?php
            echo $this->Form->control('produit_id', ['options' => $produits]);
            echo $this->Form->control('action_id', ['options' => $actions]);
            echo $this->Form->control('code');
            echo $this->Form->control('actionPro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
