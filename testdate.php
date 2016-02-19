<?php
$Ymax=$_REQUEST["Ymax"];
echo $Ymax;

        $GlobalSQLink = mysqli_connect("205.178.146.105", "1_02c7fb8_8", "FhSIPeKJNY")
        or die("Could not connect");

        mysqli_select_db($GlobalSQLink, "1_02c7fb8_8")
        or die("Could not select database");
		
		$query ="UPDATE label SET valwidth = 100 where labelID=".$Ymax;
		
		$result = mysqli_query($GlobalSQLink, $query) or die(mysqli_error($GlobalSQLink));
		

echo "Thank you for submiting Ymax";
?>