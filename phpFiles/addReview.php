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
  $sqlQuery="insert into reviews values('".$_SESSION['userData']."','".$_SESSION['collegeName']."','".$reviewData."','".$_SESSION['latitude']."','".$_SESSION['longitude']."','".$selectedAttribute."',".$sentimentValue.",".$goodOrBad.")";
  $result=$conn->query($sqlQuery);
  $myjson=json_encode($result);
  echo $myjson;
?>
