<?php  
/*
//copyright 2018 SumitGitt.

//connection string
include 'connecttoaws.php';

// Create a unique bucket name
$bucket = uniqid("acloudguru", true);

// Create our bucket using our unique bucket name
$result = $client->createBucket(array(
    'Bucket' => $bucket
));

//HTML to Create our webpage
echo "<h1 align=\"center\">Hello Cloud Guru!</h1>";
echo "<div align = \"center\"><img src=\"https://acloud.guru/images/logo-small-optimised.png\"></img></div>";
echo "<h2 align=\"center\">You have successfully created a bucket called {$bucket}</h2>";
echo "<div align=\"center\"><a href=\"createfile.php?bucket=$bucket\">Click Here to Continue</a></div>";

*/
?>


<?php
//copyright SumitGitt 2018

//connection string
include 'connecttoaws.php';

//create a bucket name
    $bucketname= uniqid("testid", true);

//create bucket using bucket name
    $bucket= $client->createBucket(array(
        'Bucket'=> $bucketname));
        
 //Html page
echo "<h1 align=\"center\">Hello Guys</h1>";
echo "<div align=\"center\"><img src=\"https://scontent-bom1-1.xx.fbcdn.net/v/t1.0-9/14225511_1070192283077863_5437397168006365130_n.jpg?_nc_cat=0&oh=9fb8ca5ab7b32c2e41e3b354053fdfd1&oe=5B305F88\"></img></div>";
echo "<h2 align=\"center\"> You have successfully created the bucket {$bucketname}</h2>";
echo "<h2 align=\"center\"><a href=\"createfile.php?bucket=$bucketname\">Click here to continue</a></h2>";
