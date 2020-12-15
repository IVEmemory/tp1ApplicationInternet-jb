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
    <table>
        <tr>
            <td width="100">ID:</td>
            <td><input type="text" id="id" ng-model="produit.id" /></td>
        </tr>
        <tr>
            <td width="100">Name (actionPro):</td>
            <td><input type="text" id="actionPro" ng-model="produit.actionPro" /></td>
        </tr>
        <tr>
            <td width="100">Code (code):</td>
            <td><input type="text" id="code" ng-model="produit.code" /></td>
        </tr>
    </table>
    <br /> <br /> 
    <a ng-click="getProduit(produit.id)">Get Produit</a> 
    <a ng-click="updateProduit(produit.id, produit.actionPro, produit.code)">Update Produit</a> 
    <a ng-click="addProduit(produit.actionPro, produit.code)">Add Produit</a> 
    <a ng-click="deleteProduit(produit.id)">Delete Produit</a>

    <br /> <br />
    <p style="color: green">{{message}}</p>
    <p style="color: red">{{errorMessage}}</p>

    <br />
    <br /> 
    <a ng-click="getAllProduits()">Get all Produits</a><br /> 
    <br /> <br />
    <div ng-repeat="produit in produits">
        {{produit.id}} {{produit.actionPro}} {{produit.code}}
    </div>
    <!-- pre ng-show='produits'>{{produits | json }}</pre-->
</div>

