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
    $tableName=str_replace(' ','',$tableName);
    //delete previously created temporary table
    $sqlDroppTable="drop table if exists ".$tableName." ";
    $conn->query($sqlDroppTable);

    $sqlFetchRecords="select * from reviews where collegeName='".$_SESSION['collegeName']."'";
    $resultsOfRecords=$conn->query($sqlFetchRecords);
    //loopthrough each record
    //create temp table
    $sqlCreateTable2="create table ".$tableName." (id int(11),fbid varchar(50),reviews text,measure int(11))";
    $conn->query($sqlCreateTable2);


    $combinedInsert="INSERT INTO ".$tableName." VALUES";

    while($row=$resultsOfRecords->fetch_assoc())
    {


      //SentimentAnalysis
      $row1=$row['fbid'];
      $row2=$row['reviews'];

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
      //updating the query for batch updates
      $combinedInsert=$combinedInsert."('".$row['id']."','".$row1."','".$row2."',".$measure."),";

    }
    //batch update $query
    $combinedInsert=rtrim($combinedInsert,',');
    $conn->query($combinedInsert);
    $sqlQuery="SELECT fbid,reviews,measure from ".$tableName."  ORDER BY measure DESC";
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
