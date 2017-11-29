<?php
  session_start();
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  $conn = new mysqli("localhost", "root", "", "srs");
  $reviewData=$_GET['reviewData'];
  $selectedAttribute=$_GET['selectedAttribute'];

  $sqlQuery="insert into reviews values('".$_SESSION['userData']."','".$_SESSION['collegeName']."','".$reviewData."','".$_SESSION['latitude']."','".$_SESSION['longitude']."','".$selectedAttribute."',"."'0.5'".","."'0'".")";
  $conn->query($sqlQuery);
?>
