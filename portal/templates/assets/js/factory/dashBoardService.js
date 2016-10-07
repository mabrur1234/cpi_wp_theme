/**
 * Created by user on 6/21/2016.
 */

function WPService($http) {

    var WPService = {
        categories: [],
        posts: [],
        pageTitle: 'Latest Posts:',
        currentPage: 1,
        totalPages: 1,
        currentUser: {}
    };

    //...

    WPService.getCurrentUser = function(a, u, p) {
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

            }
        }).success(function(data){

           WPService.currentUser = data;
        });

    };

    return WPService;
}

app.factory('ajaxData', ['$http', WPService]);
