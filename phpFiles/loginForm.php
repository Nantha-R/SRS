<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srs";
// Create connection
$conn =  mysqli_connect($servername, $username,"",$dbname);
// Check connection
$fbid=$_POST["fbid"];
$passfb=$_POST["password"];

$sql="select * from login where USERNAME='".$fbid."' and PASSWORD='".$passfb."'";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0)
echo"present";
else
echo"absent";
?>