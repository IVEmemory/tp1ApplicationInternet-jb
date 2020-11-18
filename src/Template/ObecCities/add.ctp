<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "OkresCounties",
    "action" => "getByKrajRegion",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('ObecCities/add_edit', ['block' => 'scriptBottom']);
?><?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ObecCity $obecCity
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
<div class="obecCities form large-9 medium-8 columns content">
    <?= $this->Form->create($obecCity) ?>
    <fieldset>
        <legend><?= __('Ajouter une action (ex: lait)') ?></legend>
        <?php
            echo $this->Form->control('kraj_region_id', ['options' => $krajRegions]);
            echo $this->Form->control('okres_county_id', ['options' => $okresCounties]);
            echo $this->Form->control('kod');
            echo $this->Form->control('nazev');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
