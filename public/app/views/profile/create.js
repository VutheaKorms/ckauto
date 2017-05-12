var app = angular.module('app', []);
app.controller('userController', function($scope, $http, $stateParams, $state) {
    //retrieve employees listing from API
    var API_URL = 'api/users';
    $scope.loading = true;

    $scope.goBack = function() {
        window.history.back();
    };

    $scope.back = function() {
        $state.go("app.profile.search");
    }

    $scope.data = {};

    $scope.save = function(){

        if (!$scope.userForm.$valid) {
            return;
        }

        $scope.loading = true;

        $http.post(API_URL, $scope.data)
            .success(function (response) {
                $scope.user = response;
                $scope.loading = false;
                console.log($scope.user);
            }).error(function(response) {
                console.log(response);
            });

    };

    //function fetch(){
    //    $http.get(API_URL)
    //        .success(function (response) {
    //            $scope.details = response.users;
    //            console.log($scope.details);
    //        });
    //}
    //
    //fetch();

});