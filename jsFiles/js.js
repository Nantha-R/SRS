
var app=angular.module('myApp',[]);
app.controller('reviewsCtrl',function($scope,$http)
               {
                $http.get("phpFiles/db.php").then(function(response)
                     {
                        $scope.reviews=response.data;
                     });
               });