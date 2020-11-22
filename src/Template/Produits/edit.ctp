<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KrajRegion $produit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Kraj Regions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Obec Cities'), ['controller' => 'EmplacementProduits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Obec City'), ['controller' => 'EmplacementProduits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Okres Counties'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Okres County'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produits form large-9 medium-8 columns content">
    <?= $this->Form->create($produit) ?>
    <fieldset>
        <legend><?= __('Edit Kraj Region') ?></legend>
        <?php
            echo $this->Form->control('code');
            echo $this->Form->control('actionPro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
