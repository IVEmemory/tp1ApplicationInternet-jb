<?php
echo $this->Html->script([
    'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.js'
        ], ['block' => 'scriptLibraries']
);
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Produits",
    "action" => "getProduits",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('EmplacementProduits/add_edit', ['block' => 'scriptBottom']);
?><?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ObecCity $emplacementProduit
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
<div class="emplacementProduits form large-9 medium-8 columns content" ng-app="linkedlists" ng-controller="produitsController">
    <?= $this->Form->create($emplacementProduit) ?>
    <fieldset>
        <legend><?= __('Add emplacement produit') ?></legend>
        <div>
            <?= __('Produits') ?> : 
            <select 
                name="produit_id"
                id="produit-id" 
                ng-model="produit" 
                ng-options="produit.actionPro for produit in produits track by produit.id"
                >
                <option value=''>Select</option>
            </select>
        </div>
        <div>
            <?= __('Actions') ?> : 
            <!-- pre ng-show='produits'>{{ produits | json }}></pre-->
            <select
                name="action_id"
                id="action-id" 
                ng-disabled="!produit" 
                ng-model="action"
                ng-options="action.actionPro for action in produit.actions track by action.id"
                >
                <option value=''>Select</option>
            </select>
        </div>

        <?php
//            echo $this->Form->control('kraj_region_id', ['options' => $produits]);
//            echo $this->Form->control('okres_county_id', ['options' => [__('Please select a Produit first')]]);
        echo $this->Form->control('code');
        echo $this->Form->control('actionPro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
