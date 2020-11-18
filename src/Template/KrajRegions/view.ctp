<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KrajRegion $krajRegion
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
        <li><?= $this->Html->link(__('Liste de tâche 2.0'), ['controller' => 'KrajRegions', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="krajRegions view large-9 medium-8 columns content">
    <h3><?= h($krajRegion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code de tâche') ?></th>
            <td><?= h($krajRegion->kod) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tâche vague') ?></th>
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
                <th scope="col"><?= __('tâche vague Id') ?></th>
                <th scope="col"><?= __('emplacement tâche Id') ?></th>
                <th scope="col"><?= __('Code de tâche') ?></th>
                <th scope="col"><?= __('Tâche vague') ?></th>
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
