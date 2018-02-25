var app=angular.module('myApp',[]);
app.controller('reviewsCtrl',function($scope,$http)
               {

                $http.get("phpFiles/db.php").then(function(response)
                     {
                        $scope.reviews=response.data;
                     });

         });

               });

app.controller('reviewsCtrl2',function($scope,$http)
              {
                $scope.afterFormSubmission=false;
                $scope.beforeFormSubmission=true;
                $scope.addReview=function()
                {
                  /*
                  //convert into json
                  $scope.tempInput=$scope.review;
                  $scope.jsonInput={};
                  $scope.jsonInput['document']=$scope.tempInput;

                  //call Sentimental analysis
                  Algorithmia.client("simeqY772qhzCQkDtET++EUGeQv1")
                      .algo("nlp/SentimentAnalysis/1.0.4")
                      .pipe($scope.jsonInput)
                      .then(function(output)*/

                                //inserting records onto db
                                var url="phpFiles/addReview.php?reviewData="+$scope.review+"&selectedAttribute="+$scope.attribute;
                                $http.get(url).then(function(response)
                                {

                                    $scope.note="review inserted successfully";
                                    $scope.afterFormSubmission=true;
                                    $scope.beforeFormSubmission=false;
                                    $scope.review="";
                                }
                              );




                };
              });
