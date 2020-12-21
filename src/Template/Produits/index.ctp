<?php
echo $this->Html->script([
    'https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js'
        ], ['block' => 'scriptLibraries']
);
$urlToRestApi = $this->Url->build([
    'prefix' => 'api',
    'controller' => 'Produits'], true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Produits/index', ['block' => 'scriptBottom']);
?>

<div  ng-app="app" ng-controller="ProduitCRUDCtrl">
    <input type="hidden" id="id" ng-model="produit.id" />
    <table>
        <tr>
            <td width="150">Name (actionPro):</td>
            <td><input type="text" id="actionPro" ng-model="produit.actionPro" /></td>
        </tr>
        <tr>
            <td width="150">Code (code):</td>
            <td><input type="text" id="code" ng-model="produit.code" /></td>
        </tr>
    </table>
    <button ng-click="updateProduit(produit)"> Mettre à jour le produit </button>
    <button ng-click="addProduit(produit.actionPro, produit.code)">Ajouter Produit</button>

    <p style="color: green">{{message}}</p>
    <p style="color: red">{{errorMessage}}</p>

    <table class="hoverable bordered">
        <thead>
            <tr>
                <th class="text-align-center" ng-init="getAllProduits()"> id </th>
                <th class="width-30-pct"> Name (actionPro) </th>
                <th class="width-30-pct"> Code </th>
            </tr>
        </thead>

        <tbody ng-init="getAll()">

            <tr ng-repeat="produit in produits| filter:search">
                <td class="text-align-center">
                    {{produit.id}}
                </td>
                <td>
                    {{produit.actionPro}}
                </td>
                <td>
                    {{produit.code}}
                </td>
                <td>
                    <button type="button" class="btn btn-warning btn-sm" ng-click="getProduit(produit.id)"> Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" ng-click="deleteProduit(produit.id)"> Delete</button>                  
                </td>
            </tr>
        </tbody>


    
</div>

