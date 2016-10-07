'use strict';
/**
 * controllers used for the dashboard
 */

app.controller('loginCtrl', ["$scope","$location", "ajaxData","$rootScope","authFact",
    function($scope, $location,  ajaxData, $rootScope, authFact) {
        $scope.master = $scope.myModel;

        $scope.loginUser=function(){

            ajaxData.getCurrentUser("get_user", user , password ).then(function(data){
                $scope.data = data;
                //console.log(data);

            })
            }



    }]);



app.controller('loginValidationCtrl', ["$scope","$location", "$state", "$timeout", "SweetAlert", "ajaxData","authFact" , function ($scope, $location, $state, $timeout, SweetAlert, ajaxData, authFact) {

    $scope.master = $scope.myModel;

    $scope.form = {

        submit: function (form) {
            var firstError = null;
            $scope.loginSuccess = $scope.loginError = false;
            if (form.$invalid) {

                var field = null, firstError = null;
                for (field in form) {
                    if (field[0] != '$') {
                        if (firstError === null && !form[field].$valid) {
                            firstError = form[field].$name;
                        }

                        if (form[field].$pristine) {
                            form[field].$dirty = true;
                        }
                    }
                }

                angular.element('.ng-invalid[name=' + firstError + ']').focus();
                SweetAlert.swal("The form cannot be submitted because it contains validation errors!", "Errors are marked with a red, dashed border!", "error");
                return;

            } else {
                //SweetAlert.swal("Good joob!", "Your form is ready to be submitted!", "success");
                //your code for submit
                console.log( $scope.myModel);

                ajaxData.getCurrentUser("user_login", $scope.myModel.email , $scope.myModel.password ).then(function(data){
                    var ajaxData = data.data;

                    // if login true set cookies and redirect dash board
                    if(ajaxData.type){

                        var accessToken = data.accessToken;
                        authFact.setAccessToken();
                        $scope.successMsg = ajaxData.message;
                        $scope.loginSuccess = true;
                        authFact.setAccessToken('user-obj','test_token');
                        authFact.setAccessToken('userData',ajaxData.userData.data,'obj');
                        $state.go('app.dashboard');
                    }else{

                        $scope.errorMsg = ajaxData.message;
                        $scope.loginError = true;
                    }
                })


            }

        },
        reset: function (form) {

            $scope.myModel = angular.copy($scope.master);
            form.$setPristine(true);

        }
    };

}]);





app.controller('logOutCtrl', ["$scope","$location", "$state", "$timeout", "SweetAlert", "ajaxData","authFact" , function ($scope, $location, $state, $timeout, SweetAlert, ajaxData, authFact) {

    $scope.master = $scope.myModel;

    $scope.logout = function () {
        localStorage.clearAll();
        $state.go('signin');
    };

}]);






