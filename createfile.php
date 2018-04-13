<?php
//Copyright 2018 SumitAWS

//Connection string
include 'connecttoaws.php';

//get the bucket name
$bucket1 = $_GET["bucket1"];
$bucket2=  $_GET["bucket2"];

//create the file name
$key1 = 'index.html';
$key2 = 'home.html';

//put the file and data in our bucket
$result1 = $client->putObject(array(
    'Bucket' => $bucket1,
    'Key'    => $key1,
    'Body'   => "Hello Guys!--This is bucket1 content"
));

$result2 = $client->putObject(array(
    'Bucket' => $bucket2,
    'Key' => $key2,
    'Body' => "Hey Guys!!--This is bucket2 content"
    ));

//HTML to create our webpage
echo "<h2 align=\"center\">File - $key has been successfully uploaded to $bucket1 and $bucket2 </h2>";
echo "<div align = \"center\" width=\"40\" height=\"20\"><img src=\"http://www.pmindia.gov.in/wp-content/uploads/2014/06/High1.jpg\"></img></div>";
echo "<div align = \"center\"><a href=\"readfile.php?bucket1=$bucket1&key1=$key1&bucket2=$bucket2&key2=$key2\">Click Here To Read Your File of both the bucket</a></div>";
?>
