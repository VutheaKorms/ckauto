var app = angular.module('app', []);
app.controller('userController', function($scope, $http, $stateParams, $state) {
    //retrieve employees listing from API
    var API_URL = '/api/v1/users/';
    $scope.id = $stateParams.id;
    console.log($stateParams);

    $scope.goBack = function() {
        window.history.back();
    };

    $scope.back = function() {
        $state.go("app.profile.search");
    }

    function fetch(){
        $http.get(API_URL + $scope.id)
            .success(function (response) {
                $scope.details = response.users;
                console.log($scope.details);
            });
    }

    fetch();

});