<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KrajRegion[]|\Cake\Collection\CollectionInterface $krajRegions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Kraj Region'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Obec Cities'), ['controller' => 'ObecCities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Obec City'), ['controller' => 'ObecCities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Okres Counties'), ['controller' => 'OkresCounties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Okres County'), ['controller' => 'OkresCounties', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="krajRegions index large-9 medium-8 columns content">
    <h3><?= __('Kraj Regions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kod') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nazev') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($krajRegions as $krajRegion): ?>
            <tr>
                <td><?= $this->Number->format($krajRegion->id) ?></td>
                <td><?= h($krajRegion->kod) ?></td>
                <td><?= h($krajRegion->nazev) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $krajRegion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $krajRegion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $krajRegion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $krajRegion->id)]) ?>
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
