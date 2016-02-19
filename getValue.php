<?php 

		$GlobalSQLink = mysqli_connect("mysqlv103", "1_02c7fb8_6", "r3Ij5nSKDY")
        or die("Could not connect");

        mysqli_select_db($GlobalSQLink, "1_02c7fb8_6")
        or die("Could not select database");
	
			$queryItem ="SELECT * from label WHERE labelID='".$labelID."'";
			//echo $queryItem;
				
				//echo $query;
				$result = mysqli_query($GlobalSQLink, $queryItem) or die(mysqli_error($GlobalSQLink));
				if ($result && $row = mysqli_fetch_assoc($result)) {
						
								$labelID	= $row["labelID"];       			
								$orderNo	= $row["orderNo"];       			
								$sidemark	= $row["sidemark"];       			
								$PO      	= $row["PO"]; 
								$lab[$indx]["blinds"] = $blinds     = $row["blinds"];   
								$qty      	= $row["qty"]; 
								//echo $qty;
								$type       = $row["type"];   
								$valwidth	= $row["valwidth"];   
								$lab[$indx]["valheight"] = $valheight  = $row["valheight"];
								include("slat.php");   
								$vwidth     = $row["vwidth"]; 
								$mt         = $row["mt"];   
								$rtn        = $row["rtn"]; 
								if($vwidth == "" || $vwidth == 0)
								{
									if($mt == "IB")
									{
										if($rtn > 0)
										{
											$vwidth = (float)$valwidth + 0.5;
										}else{
											$vwidth = $valwidth;
										}
								
									}
									if($mt == "OB")
									{
										$vwidth = (float)$valwidth + 1.5;
									}
								}else{
									$vwidth = $vwidth;
								}

								$size       = $row["size"];   
								$lab[$indx]["color"] = $color      = $row["color"];   
								$tilt1      = $row["tilt1"];   
								$lilt1      = $row["lilt1"];   
								$control    = $row["control"];   
								$customer   = $row["customer"];   
								$index      = $row["index"];   
								$date       = $row["date"];   
								$strdate = explode('-', $date);
       			        		$date = $strdate[1]."/".$strdate[2]."/".$strdate[0];
								
								//echo $lab[$indx]["color"]; 
								include ("color.php");
						
														
						mysqli_free_result( $result );
				  }
		
		
		$queryTotal = "SELECT * FROM label WHERE orderNo = '".$orderNo."'";
		$result = mysqli_query($GlobalSQLink, $queryTotal) or die(mysqli_error($GlobalSQLink));
		$idxt = 1;
			if ( $result ) {
						while ($row = mysqli_fetch_array($result)) {
						$total[$idxt]["qty"] = $row["qty"];       			
							$idxt++;
					
						}
						
						mysqli_free_result( $result );
		}
		
		     
		if (strpos($valwidth, '.') !== FALSE){
			$temp = explode('.', $valwidth);
			$temp1 = "0.".$temp[1];
			$temp1 = (float)$temp1;
			$valwidth = $temp[0]." ".float2rat($temp1);
			//echo $valwidth;
		}else
		{
			$valwidth = $valwidth;
		}
		

		if (strpos($valheight, '.') !== FALSE){
			$temp = explode('.', $valheight);
			$temp1 = "0.".$temp[1];
			$temp1 = (float)$temp1;
			$valheight = $temp[0]." ".float2rat($temp1);
			//echo $valwidth;
		}else
		{
			$valheight = $valheight;
		}
		
		//echo "<br>idxt=".$idxt."<br>";
		$l = 0;
		for($n = 1; $n < $idxt; $n++)
		{
			//echo "n=".$total[$n]["qty"]."<br>"; 
			$l = $l + $total[$n]["qty"];
			
		}
		
		//echo "l=".$l;
		//if ($result && $row = mysqli_fetch_assoc($result)) {
			//$total 	= $row["COUNT(labelID)"];       			
		//}
		
		if ($blinds == "2quote; Faux Blinds") {
     		$blinds = '2" Faux Blinds';
			$size = '3-1/4" Crown';
		}

		if ($blinds == "2quote; Basswood Blinds") {
     		$blinds = '2" Basswood Blinds';
			$size = '3-1/2" Colonial';
		}

		if ($blinds == "2-1/2quote; Basswood Blinds") {
     		$blinds = '2-1/2" Basswood Blinds';
			$size = '3-1/2" Colonial';
		}

		if ($blinds == "2-1/2quote; Faux Blinds") {
     		$blinds = '2-1/2" Faux Blinds';
			$size = '3-1/4" Crown';
		}
		
		
?>			
