<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KrajRegion $krajRegion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Kraj Region'), ['action' => 'edit', $krajRegion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kraj Region'), ['action' => 'delete', $krajRegion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $krajRegion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Kraj Regions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kraj Region'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Obec Cities'), ['controller' => 'ObecCities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Obec City'), ['controller' => 'ObecCities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Okres Counties'), ['controller' => 'OkresCounties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Okres County'), ['controller' => 'OkresCounties', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="krajRegions view large-9 medium-8 columns content">
    <h3><?= h($krajRegion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Kod') ?></th>
            <td><?= h($krajRegion->kod) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nazev') ?></th>
            <td><?= h($krajRegion->nazev) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($krajRegion->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Obec Cities') ?></h4>
        <?php if (!empty($krajRegion->obec_cities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Kraj Region Id') ?></th>
                <th scope="col"><?= __('Okres County Id') ?></th>
                <th scope="col"><?= __('Kod') ?></th>
                <th scope="col"><?= __('Nazev') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($krajRegion->obec_cities as $obecCities): ?>
            <tr>
                <td><?= h($obecCities->id) ?></td>
                <td><?= h($obecCities->kraj_region_id) ?></td>
                <td><?= h($obecCities->okres_county_id) ?></td>
                <td><?= h($obecCities->kod) ?></td>
                <td><?= h($obecCities->nazev) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ObecCities', 'action' => 'view', $obecCities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ObecCities', 'action' => 'edit', $obecCities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ObecCities', 'action' => 'delete', $obecCities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $obecCities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Okres Counties') ?></h4>
        <?php if (!empty($krajRegion->okres_counties)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Kraj Region Id') ?></th>
                <th scope="col"><?= __('Kod') ?></th>
                <th scope="col"><?= __('Nazev') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($krajRegion->okres_counties as $okresCounties): ?>
            <tr>
                <td><?= h($okresCounties->id) ?></td>
                <td><?= h($okresCounties->kraj_region_id) ?></td>
                <td><?= h($okresCounties->kod) ?></td>
                <td><?= h($okresCounties->nazev) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OkresCounties', 'action' => 'view', $okresCounties->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OkresCounties', 'action' => 'edit', $okresCounties->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OkresCounties', 'action' => 'delete', $okresCounties->id], ['confirm' => __('Are you sure you want to delete # {0}?', $okresCounties->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
