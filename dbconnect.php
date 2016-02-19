<?php

		$GlobalSQLink = mysqli_connect("mysqlv103", "1_02c7fb8_6", "r3Ij5nSKDY")
        or die("Could not connect");

        mysqli_select_db($GlobalSQLink, "1_02c7fb8_6")
        or die("Could not select database");
		
?>