<?php
    session_start();
    //check if user has logged into fb
    if(!isset($_SESSION['userData']))
    header ('Location : index.html');
    $_SESSION['customizedValue']=6;


?>
<!DOCTYPE html>
<html>
    <head>
        <title>ProductList</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://algorithmia.com/v1/clients/js/algorithmia-0.2.0.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="cssFiles/aggregatedOutputCss.css">

    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <body ng-app="myOutputApp">
        <div class="">
        <div class="row">
            <div class="col-lg-12">
        <div class="jumbotron" id="jumpotron">

            <p><h1 style="color:white;padding-left:50px;">Social Recommender Systems  </h1></p>
            <p style="color:white;"><h3 style="padding-left:50px;">AN APPROACH FOR BUILDING EFFICIENT SOCIAL RECOMMENDER SYSTEM USING INDIVIDUAL RELATIONSHIP NETWORKS WITH SOCIAL SENTIMENTAL ANALYSIS</h3></p>

        </div>
        </div>
        </div>

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
            <p><h1 style="color:DodgerBlue;"><?php echo strtoupper("{$_SESSION['collegeName']}"); ?></h1></p>
            <h1 style="color:DodgerBlue;">
                Responses-AGGREGATED REVIEWS&nbsp

            </h1>
            </div>
        </div>

        <div ng-controller="aggReviewsCtrl">

            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div ng-repeat="x in reviews">
                        <hr>
                        <div class ="row">
                            <div class="col-lg-2" style="font-weight:bold">{{x.fbid}} : </div>
                            <div class="col-lg-10" style="font-style:italic"> {{x.reviews}} {{x.measure}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>



        <script src="jsFiles/myOutputApp.js"></script>
    </body>
</html>
