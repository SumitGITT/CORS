<?php
//connection string
include 'connecttoaws.php';

//code to get our bucket and key names
$bucket1 = $_GET["bucket1"];
$bucket2 = $_GET["bucket2"];

$key1= $_GET["key1"];
$key2 = $_GET["key2"];

//code to read the file on S3
$result = $client->getObject(array(
    'Bucket' => $bucket1,
    'Key'    => $key1
));
$data = $result['Body'];

//HTML to create our webpage
echo "<h2 align=\"center\">The Bucket is $bucket</h2>";
echo "<h2 align=\"center\">The Object's name is $key</h2>";
echo "<h2 align=\"center\">The Data in the object is $data</h2>";
echo "<div align = \"center\"><a href=\"cleanup.php?bucket=$bucket&key=$key\">Click Here To Remove Files & Bucket</a></div>";
?>
