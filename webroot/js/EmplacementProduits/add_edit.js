var app = angular.module('linkedlists', []);

app.controller('produitsController', function ($scope, $http) {
    // l'url vient de add.ctp
    $http.get(urlToLinkedListFilter).then(function (response) {
        $scope.produits = response.data.produits;
    });
});

