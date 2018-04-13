
<?php
//copyright SumitGitt 2018

//connection string
include 'connecttoaws.php';

//create a bucket name
    $bucketname1= uniqid("Corstestid1", true);
    $bucketname2= uniqid("Corstestid2", true);

//create bucket using bucket name
    $bucket1= $client->createBucket(array('Bucket'=> $bucketname1));
    $bucket2= $client->createBucket(array('Bucket'=> $bucketname2));
        
 //Html page
echo "<h1 align=\"center\">Hello Guys</h1>";
echo "<div align=\"center\" width=\"40\" height=\"20\"><img src=\"https://scontent-bom1-1.xx.fbcdn.net/v/t1.0-9/14225511_1070192283077863_5437397168006365130_n.jpg?_nc_cat=0&oh=9fb8ca5ab7b32c2e41e3b354053fdfd1&oe=5B305F88\"></img></div>";
echo "<h2 align=\"center\"> You have successfully created the bucket {$bucketname1} and {$bucketname2} </h2>";
echo "<h2 align=\"center\"><a href=\"createfile.php?bucket1=$bucketname1 & bucket2=$bucketname2\">Click here to create file</a></h2>";

?>
