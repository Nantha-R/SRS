<?php

  session_start();
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");


  $conn = new mysqli("localhost", "root", "", "srs");
  $reviewData=$_GET['reviewData'];
  $selectedAttribute=$_GET['selectedAttribute'];
  $sentimentValue=$_GET['sentimentValue'];
  if($sentimentValue>0)
  $goodOrBad=0;
  else {
    $goodOrBad=1;
  }
  //get Name of the district from db

    $latitude=floor($_SESSION['latitude']);
    $longitude=floor($_SESSION['longitude']);
	
    $query="select Name from districts where latitude=".$latitude." AND longitude=".$longitude;

    $districtResult=$conn->query($query);
    $resultARRAY=$districtResult->fetch_assoc();
    $districtName=$resultARRAY['Name'];
    $countQuery="select count(1) from reviews";
    $countResult=$conn->query($countQuery);
    $countArray=mysql_fetch_array($countResult);
    $id=$countArray[0];

    $sqlQuery="insert into reviews values('".$_SESSION['userData']."','".$_SESSION['collegeName']."','".$reviewData."','".$_SESSION['latitude']."','".$_SESSION['longitude']."','".$selectedAttribute."',".$sentimentValue.",".$goodOrBad.",'".$districtName."','".$id."')";

    $result=$conn->query($sqlQuery);
    $myjson=json_encode($result);
    echo $myjson;
?>
