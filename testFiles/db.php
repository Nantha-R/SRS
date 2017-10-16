<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "srs");

$result = $conn->query("SELECT first_name,last_name FROM users");
$out=array();
$out=$result->fetch_all(MYSQLI_ASSOC);
$myjson=json_encode($out);
echo $myjson;

?>
