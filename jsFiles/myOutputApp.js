var app=angular.module('myOutputApp',[]);

app.controller('aggReviewsCtrl',function($scope,$http)
               {
                    $http.get("phpFiles/db.php").then(function(response)
                     {
                        $scope.reviews=response.data;
                     });
               });
