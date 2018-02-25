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
    $sqlQuery="SELECT * FROM reviews where fbid IN (\"".implode("\",\"",$_SESSION['allFriends'])."\") AND collegeName='".$_SESSION['collegeName']."'";
}
function getLocationResults()
{
    global $conn,$sqlQuery;
    $latitude=floor($_SESSION['latitude']);
    $longitude=floor($_SESSION['longitude']);
    $query="select Name from districts where latitude=".$latitude." AND longitude=".$longitude;
    $districtResult=$conn->query($query);
    $resultARRAY=$districtResult->fetch_assoc();
    $districtName=$resultARRAY['Name'];
    $sqlQuery="SELECT * FROM reviews where district='".$districtName."' AND collegeName='".$_SESSION['collegeName']."'";
}
function getAttributeResults()
{
    global $conn,$sqlQuery;
    $sqlQuery="SELECT * FROM reviews where attribute='".$_SESSION['attributeValue']."' AND collegeName='".$_SESSION['collegeName']."'";
}
function getGoodResults()
{
    global $conn,$sqlQuery;
    $sqlQuery="SELECT * FROM reviews where goodOrBad='0' AND collegeName='".$_SESSION['collegeName']."'";
}
function getBadResults()
{
    global $conn,$sqlQuery;
    $sqlQuery="SELECT * FROM reviews where goodOrBad='1' AND collegeName='".$_SESSION['collegeName']."'";
}
function getAggregatedResults()
{
    global $conn,$sqlQuery;
    $tableName=$_SESSION['userData'];
    //create temporary table
    $tableName=str_replace(' ','',$tableName);
    //drop table if exist
    $sqlDropTable="drop table if exists ".$tableName;
    $conn->query($sqlDropTable);

    $sqlCreateTable="create table ".$tableName." AS SELECT id,fbid,collegeName,reviews,latitude,longitude,attribute,factor,goodOrBad,district from reviews where collegeName='".$_SESSION['collegeName']."'";
    $conn->query($sqlCreateTable);
    //add a column to the table created
    $sqlAddColumn="alter table ".$tableName." add measure int(11)";
    $conn->query($sqlAddColumn);
    //echo "<script>console.log($sqlAddColumn);</script>";
    //fetch records from mysql table
    $sqlFetchRecords="select * from ".$tableName;
    $resultsOfRecords=$conn->query($sqlFetchRecords);
    //loopthrough each record
    while($row=$resultsOfRecords->fetch_assoc())
    {
      //SentimentAnalysis
      $measure=0;
      $measure+=abs(round($row["factor"]*10));
      //friends
      if(in_array($row['fbid'],$_SESSION['allFriends']))
      $measure+=5;
      //attributes
      switch($row['attribute'])
      {
          case "Studies":
              $measure+=5;
              break;
          case "Sports":
              $measure+=3;
              break;
          case "Discipline":
              $measure+=4;
              break;
          case "Food":
              $measure+=2;
              break;
          case "Transport":
              $measure+=1;
              break;
      }
      //location
      if((round($_SESSION['latitude'])==round($row['latitude']))&&(round($_SESSION['longitude'])==round($row['longitude'])))
      $measure+=3;
      //insert measure value onto db
      $sqlMeasureUpdate="update ".$tableName." set measure=".$measure." where id=".$row['id'];
      $conn->query($sqlMeasureUpdate);
    }
    $sqlQuery="SELECT * from ".$tableName." where collegeName='".$_SESSION['collegeName']."' ORDER BY measure DESC";
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
    case "6":
        getAggregatedResults();
        break;
}
$result = $conn->query($sqlQuery);
$out=array();
$out=$result->fetch_all(MYSQLI_ASSOC);
$myjson=json_encode($out);
echo $myjson;
?>
