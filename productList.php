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
    echo $_SESSION['latitude'];
    echo $_SESSION['longitude'];
?>
<html>
    <head>
        <title>ProductList</title>
    </head>
    <body>
        
    </body>
</html>