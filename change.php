<?php

        $GlobalSQLink = mysqli_connect("205.178.146.105", "1_02c7fb8_8", "FhSIPeKJNY")
        or die("Could not connect");

        mysqli_select_db($GlobalSQLink, "1_02c7fb8_8")
        or die("Could not select database");
		
		$query ="SELECT * FROM label";
		$result = mysqli_query($GlobalSQLink, $query) or die(mysqli_error($GlobalSQLink));
		if ($result && $row = mysqli_fetch_assoc($result)) {
					
			  $labelID 	= $row["labelID"];       			
			  $sidemark = $row["sidemark"];       			
						
		      echo "labelID=".$labelID.",sidemark=".$sidemark;
		      mysqli_free_result( $result );
		}


?>