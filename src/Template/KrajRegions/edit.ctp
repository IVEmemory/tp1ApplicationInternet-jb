<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KrajRegion $krajRegion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $krajRegion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $krajRegion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Kraj Regions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Obec Cities'), ['controller' => 'ObecCities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Obec City'), ['controller' => 'ObecCities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Okres Counties'), ['controller' => 'OkresCounties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Okres County'), ['controller' => 'OkresCounties', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="krajRegions form large-9 medium-8 columns content">
    <?= $this->Form->create($krajRegion) ?>
    <fieldset>
        <legend><?= __('Edit Kraj Region') ?></legend>
        <?php
            echo $this->Form->control('kod');
            echo $this->Form->control('nazev');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
