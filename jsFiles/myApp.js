
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

                  var input = {
                    "document": $scope.review;
                  };
                  var colvalue="document";
                  var value1=$scope.review;
                  var josn={};
                  json[colvalue]=value1;
                  $scope.fileContents.push(josn);
                  Algorithmia.client("simeqY772qhzCQkDtET++EUGeQv1")
                      .algo("nlp/SentimentAnalysis/1.0.4")
                      .pipe(josn)
                      .then(function(output) {
                                console.log(output);
                                var value=output.result[0].sentiment;
                                $url="phpFiles/addReview.php?reviewData="+$scope.review+"&selectedAttribute="+$scope.attribute;
                                $http.get($url).then(function()
                                {
                                    $scope.spice="data inserted successfully"+value;
                                }
                                );
                      });


                };
              });
