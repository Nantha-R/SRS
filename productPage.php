<html>
    <head>
        <title>Products</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="cssFiles/productPageCss.css">
    </head>
    <body>
        <?php
        session_start();
        echo $_SESSION['latitude'];
        if(!isset($_SESSION['userData']))
        header('Location: index.html');
        ?>


        <div class="jumbotron" id="jumpotron">

            <p><h1 style="color:white;padding-left:50px;">Social Recommender Systems  </h1></p>
            <p style="color:white;"><h3 style="padding-left:50px;">AN APPROACH FOR BUILDING EFFICIENT SOCIAL RECOMMENDER SYSTEM USING INDIVIDUAL RELATIONSHIP NETWORKS WITH SOCIAL SENTIMENTAL ANALYSIS</h3></p>


            <div class="col-lg-7"></div>
            <div class="col-lg-2" style="font-size:25px">
                Latitude:<?php
                echo $_SESSION['latitude'];
                ?>
            </div>
            <div class="col-lg-2" style="font-size: 25px">
                Longitude:<?php echo $_SESSION['longitude'];?>
            </div>
            <div class="col-lg-1"><a href="fbFiles/logout.php"><button type="button" class="btn btn-default">LOGOUT</button></a></div>
            </div>
        </div>

        <br><br>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10" style="background-color:grey">
                <img src="imagesFiles/sjce.jpg" style="width: 140px;height: 140px">
                <a href="productList.php?collegeName=sjce&customizedValue=0&attribute=none"><h1 class="names">SJCE</h1></a>
                <h6 class="describe">AN APPROACH FOR BUILDING EFFICIENT SOCIAL RECOMMENDER SYSTEM USING INDIVIDUAL RELATIONSHIP NETWORKS WITH SOCIAL SENTIMENTAL ANALYSIS</h6>
            </div>
            <div class="col-lg-1"></div>
        </div>

        <br><br><br>
        <div class="row">
            <div class="col-lg-1" ></div>
            <div class="col-lg-10" style="background-color:grey">
                <img src="imagesFiles/jeppiar.png" style="width: 140px;height:140px">
                <a href="productList.php?collegeName=jeppiar&customizedValue=0&attribute=none"><h1 class="names">JEPPIAR</h1></a>
                <h6 class="describe">AN APPROACH FOR BUILDING EFFICIENT SOCIAL RECOMMENDER SYSTEM USING INDIVIDUAL RELATIONSHIP NETWORKS WITH SOCIAL SENTIMENTAL ANALYSIS</h6>
            </div>
            <div class="col-lg-1"></div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10" style="background-color:grey">
                <img src="imagesFiles/sathyabama.jpg" style="width: 140px;height:140px">
                <a href="productList.php?collegeName=sathyabama&customizedValue=0&attribute=none"><h1 class="names">SATHYABAMA</h1></a>
                <h6 class="describe">AN APPROACH FOR BUILDING EFFICIENT SOCIAL RECOMMENDER SYSTEM USING INDIVIDUAL RELATIONSHIP NETWORKS WITH SOCIAL SENTIMENTAL ANALYSIS</h6>
            </div>
            <div class="col-lg-1"></div>
        </div>

        </div>
        <br><br><br>
    </body>
<html>
