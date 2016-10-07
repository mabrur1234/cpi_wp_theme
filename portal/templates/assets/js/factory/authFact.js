/**
 * Created by user on 6/21/2016.
 */
app.factory('authFact', ['$http','$cookies','$cookieStore',
    function($http, $cookies, $cookieStore) {

        var authFact = {
            authToken:''
        };

        //set auth token
        authFact.setAccessToken = function(tokenName,accessToken, obj){
            if(obj){
                $cookies.putObject(tokenName,accessToken);
            }else{
                $cookies.put(tokenName,accessToken);
            }



        };
        //get auth token
        authFact.getAccessToken = function(accessToken) {

            return $cookies.get('user-obj');
        };

        authFact.isLoggedin =function(authFact){
            if(authFact.authToken){
                return true;
            }else{
                return false;
            }
        }


        authFact.getUserData =function(authFact) {
        return  $cookies.getObject('userData');
        }



        authFact.getAuthToken = function(a, u, p) {

            // authFact.authToken = accessToken;

            return $http({
                method: 'POST',
                url: ajaxUrl,
                dataType: 'json',
                params: {
                    action: a,
                    user_email: u,
                    password: p,
                },
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    "X-Login-Ajax-call": 'true'

                }
            }).success(function(data){
                console.log(data);

                authFact.currentUser = $cookies;
            });

        };



        return authFact;
    }]);