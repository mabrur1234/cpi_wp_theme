/**
 * Created by user on 8/4/2016.
 */

'use strict';
/**
 * controllers used for the dashboard
 */

app.controller('userCtrl', ["$scope","$location","authFact",
    function($scope, $location, $cookieStore,  ajaxData, $rootScope, authFact, $cookies) {
        $scope.master = $scope.myModel;

        console.log('==========login ctrl============');
        $cookies.put('press_test_cookie','fuckoff')
        console.log($cookies);
        console.log('===========xxxxxxxxxxxxx=========');

        $cookies.put('press_test_cookie','fuckoff')
        console.log($cookies.get('press_test_cookie'));
        console.log('==========login ctrl============');
        $scope.loginUser=function(){
            console.log('Userd clicked login', $scope.myModel);
            alert($scope.myModel.email);
            console.log('cookies start');
            console.log($cookies.get('press_test_cookie'));
            console.log('end cookies start');
            ajaxData.getCurrentUser("get_user", user , password ).then(function(data){
                $scope.data = data;
                //console.log(data);
                $scope.site = [{
                    url: 'rgba(90,135,112,0)'
                }];
                $scope.siteUrl = "http://clippingpathindia.dev/";
            })
        }



    }]);
