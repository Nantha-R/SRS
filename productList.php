<?php
    session_start();
    
    //check if user has logged into fb
    if(!isset($_SESSION['userData']))
    header ('Location : index.html');
    
    //check if user has does use a valid get request
    $custArrays=array("0","1","2","3","4","5");
    $colleges=array("sjce","jeppiar","sathyabama","alreadyGot");
    $attributeArray=array("Sports","Discipline","Studies","Food","Transport","none");
    if(in_array($_GET['collegeName'],$colleges)&&in_array($_GET['customizedValue'],$custArrays)&&in_array($_GET['attribute'],$attributeArray))
    {
    $_SESSION['collegeName']=$_GET['collegeName'];
    $_SESSION['customizedValue']=$_GET['customizedValue'];
    $_SESSION['attributeValue']=$_GET['attribute'];
    }
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
            <h1 style="color:DodgerBlue;">
                Responses&nbsp
                <span class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Customize Results
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="./productList.php?collegeName=alreadyGot&customizedValue=1&attribute=none">Using FB friends</a></li>
                        <li><a href="./productList.php?collegeName=alreadyGot&customizedValue=2&attribute=none">Using Location</a></li>
                        <li><a href="./productList.php?collegeName=alreadyGot&customizedValue=3&attribute=Studies">Using attribute-Studies</a></li>
                        <li><a href="./productList.php?collegeName=alreadyGot&customizedValue=3&attribute=Sports">Using attribute-Sports</a></li>
                        <li><a href="./productList.php?collegeName=alreadyGot&customizedValue=3&attribute=Discipline">Using attribute-Discipline</a></li>
                        <li><a href="./productList.php?collegeName=alreadyGot&customizedValue=3&attribute=Food">Using attribute-Food</a></li>
                        <li><a href="./productList.php?collegeName=alreadyGot&customizedValue=3&attribute=Transport">Using attribute-Transport</a></li>
                        <li><a href="./productList.php?collegeName=alreadyGot&customizedValue=4&attribute=none">Using Good reviews</a></li>
                        <li><a href="./productList.php?collegeName=alreadyGot&customizedValue=5&attribute=none">Using Bad reviews</a></li>
                    </ul>
                </span>
            </h1>
            </div>
        </div>
        <div ng-app="myApp" ng-controller="reviewsCtrl">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div ng-repeat="x in reviews">
                        <hr>
                        <div class ="row">
                            <div class="col-lg-2" style="font-weight:bold">{{x.fbid}} : </div>
                            <div class="col-lg-10" style="font-style:italic"> {{x.reviews}} {{x.collegeName}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        <script src="jsFiles/js.js"></script>
    </body>
</html>