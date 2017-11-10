<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "srs");
$sqlQuery="";
//session start
session_start();
function getResults()
{
    global $conn,$sqlQuery;
    $sqlQuery="SELECT * FROM reviews where collegeName='".$_SESSION['collegeName']."'";
}
function getFBResults()
{
    global $conn,$sqlQuery;
    $sqlQuery="SELECT * FROM reviews where fbid IN (\"".implode("\",\"",$_SESSION['allFriends'])."\")";
}
function getLocationResults()
{
    global $conn,$sqlQuery;
    $val1=$_SESSION['latitude']+2;
    $val2=$val1-4;
    $val3=$_SESSION['longitude']+4;
    $val4=$val3-8;
    $sqlQuery="SELECT * FROM reviews where latitude BETWEEN ".$val2." AND ".$val1." AND longitude BETWEEN ".$val4." AND ".$val3;
}
function getAttributeResults()
{
    global $conn,$sqlQuery;
    $sqlQuery="SELECT * FROM reviews where attribute='".$_SESSION['attributeValue']."'";    
}
function getGoodResults()
{
    global $conn,$sqlQuery;
    $sqlQuery="SELECT * FROM reviews where goodOrBad='0'";
}
function getBadResults()
{
    global $conn,$sqlQuery;
    $sqlQuery="SELECT * FROM reviews where goodOrBad='1'";    
}
switch($_SESSION['customizedValue'])
{
    case "0":
        getResults();
        break;
    case "1":
        getFBResults();
        break;
    case "2":
        getLocationResults();
        break;
    case "3":
        getAttributeResults();
        break;
    case "4":
        getGoodResults();
        break;
    case "5":
        getBadResults();
        break;

}
$result = $conn->query($sqlQuery);
$out=array();
$out=$result->fetch_all(MYSQLI_ASSOC);
$myjson=json_encode($out);
echo $myjson;
?>