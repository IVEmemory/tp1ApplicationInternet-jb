var app = angular.module('app', []);

app.controller('ProduitCRUDCtrl', ['$scope', 'ProduitCRUDService', function ($scope, ProduitCRUDService) {

        $scope.updateProduit = function () {
            ProduitCRUDService.updateProduit($scope.produit.id, $scope.produit.actionPro, $scope.produit.code)
                    .then(function success(response) {
                        $scope.message = 'Produit data updated!';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.errorMessage = 'Error updating produit!';
                                $scope.message = '';
                            });
        }

        $scope.getProduit = function () {
            var id = $scope.produit.id;
            ProduitCRUDService.getProduit($scope.produit.id)
                    .then(function success(response) {
                        $scope.produit = response.data.produit;
                        $scope.produit.id = id;
                        $scope.message = '';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.message = '';
                                if (response.status === 404) {
                                    $scope.errorMessage = 'Produit not found!';
                                } else {
                                    $scope.errorMessage = "Error getting produit!";
                                }
                            });
        }

        $scope.addProduit = function () {
            if ($scope.produit != null && $scope.produit.actionPro) {
                ProduitCRUDService.addProduit($scope.produit.actionPro, $scope.produit.code)
                        .then(function success(response) {
                            $scope.message = 'Produit added!';
                            $scope.errorMessage = '';
                        },
                                function error(response) {
                                    $scope.errorMessage = 'Error adding produit!';
                                    $scope.message = '';
                                });
            } else {
                $scope.errorMessage = 'Please enter a name!';
                $scope.message = '';
            }
        }

        $scope.deleteProduit = function () {
            ProduitCRUDService.deleteProduit($scope.produit.id)
                    .then(function success(response) {
                        $scope.message = 'Produit deleted!';
                        $scope.produit = null;
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.errorMessage = 'Error deleting produit!';
                                $scope.message = '';
                            })
        }

        $scope.getAllProduits = function () {
            ProduitCRUDService.getAllProduits()
                    .then(function success(response) {
                        $scope.produits = response.data.produits;
                        $scope.message = '';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.message = '';
                                $scope.errorMessage = 'Error getting produits!';
                            });
        }

    }]);

app.service('ProduitCRUDService', ['$http', function ($http) {

        this.getProduit = function getProduit(produitId) {
            return $http({
                method: 'GET',
                url: urlToRestApi + '/' + produitId,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

        this.addProduit = function addProduit(actionPro, code) {
            return $http({
                method: 'POST',
                url: urlToRestApi,
                data: {actionPro: actionPro, code: code},
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

        this.deleteProduit = function deleteProduit(id) {
            return $http({
                method: 'DELETE',
                url: urlToRestApi + '/' + id,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            })
        }

        this.updateProduit = function updateProduit(id, actionPro, code) {
            return $http({
                method: 'PATCH',
                url: urlToRestApi + '/' + id,
                data: {actionPro: actionPro, code: code},
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            })
        }

        this.getAllProduits = function getAllProduits() {
            return $http({
                method: 'GET',
                url: urlToRestApi,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

    }]);


