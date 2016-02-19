<?php

$labelID = $_GET["labelID"];
$objID   = $_GET["objID"];
echo $objID;
$objValue = $_GET["objValue"];
$obj = substr($objID, 0, -1);

        $GlobalSQLink = mysqli_connect("205.178.146.105", "1_02c7fb8_8", "FhSIPeKJNY")
        or die("Could not connect");

        mysqli_select_db($GlobalSQLink, "1_02c7fb8_8")
        or die("Could not select database");
		
		$query ="UPDATE label SET ".$obj."='".$objValue."' WHERE labelID=".$labelID;
		echo $query;
		
		$result = mysqli_query($GlobalSQLink, $query) or die(mysqli_error($GlobalSQLink));
		

?>

