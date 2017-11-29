
var app=angular.module('myApp',[]);
app.controller('reviewsCtrl',function($scope,$http)
               {
                $http.get("phpFiles/db.php").then(function(response)
                     {
                        $scope.reviews=response.data;
                     });
               });

app.controller('reviewsCtrl2',function($scope,$http)
              {
                $scope.addReview=function()
                {
                  $url="phpFiles/addReview.php?reviewData="+$scope.review+"&selectedAttribute="+$scope.attribute;
                  $scope.spice=$url;
                  $http.get($url).then(function()
                  {
                      $scope.spice="data inserted successfully";
                  }
                  );
                };
              });
