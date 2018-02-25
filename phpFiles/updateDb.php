<?php
session_start();
$conn = new mysqli("localhost", "root", "", "srs");
$sqlQuery="";

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
}

if($_SESSION['customizedValue']=='0')
{
    getAggregatedResults();

}



 ?>
