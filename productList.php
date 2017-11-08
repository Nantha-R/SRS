<?php
    session_start();
    
    //check if user has logged into fb
    if(!isset($_SESSION['userData']))
    header ('Location : index.html');
    
    //check if user has does use a valid get request
    $colleges=array("sjce","jeppiar","sathyabama");
    if(in_array($_GET['collegeName'],$colleges))
    $_SESSION['collegeName']=$_GET['collegeName'];
    else
    header('Location : index.html');
    
    
?>
<!DOCTYPE html>
<html>  
    <head>
        <title>ProductList</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="cssFiles/productListCss.css">
        
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <body>
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
            <p><h1 style="color:DodgerBlue;">Responses</h1></p>
            </div>
        </div>
        <div ng-app="myApp" ng-controller="reviewsCtrl">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div ng-repeat="x in reviews">
                    <hr>{{x.comment}}
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        <script src="jsFiles/js.js"></script>
    </body>
</html>