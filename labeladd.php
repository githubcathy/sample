<?php

$sidemark1 = $_GET["sidemark1"];
$PO1 = $_GET["PO1"];
$orderNo1 = $_GET["orderNo1"];
$valwidth1 = $_GET["valwidth1"];
$valheight1 = $_GET["valheight1"];
$qty1 = $_GET["qty1"];
$vwidth1    = $_GET["vwidth1"];
$mt1        = $_GET["mt1"];
$slat1      = $_GET["slat1"];
$size1      = $_GET["size1"];
$rtn1       = $_GET["rtn1"];
$color1     = $_GET["color1"];
$lilt11     = $_GET["lilt1"];
$tilt11     = $_GET["tilt11"];
$lilt11     = $_GET["lilt11"];
$control1   = $_GET["control1"];
$blinds1    = $_GET["blinds1"];
$type1      = $_GET["type1"];
$customer1  = $_GET["customer1"];
$price1  	= $_GET["price1"];

$labelID    = $_GET["labelID"];
$sidemark2  = $_GET["sidemark2"];
$PO2        = $_GET["PO2"];
$orderNo2   = $_GET["orderNo2"];
$valwidth2  = $_GET["valwidth2"];
$valheight2 = $_GET["valheight2"];
$vwidth2    = $_GET["vwidth2"];
$mt2        = $_GET["mt2"];
$slat2      = $_GET["slat2"];
$size2      = $_GET["size2"];
$rtn2       = $_GET["rtn2"];
$color2     = $_GET["color2"];
$tilt12     = $_GET["tilt12"];
$control2   = $_GET["control2"];
$blinds2    = $_GET["blinds2"];
$type2      = $_GET["type2"];
$customer2  = $_GET["customer2"];


$orderNo2 = $_GET["orderNo2"];
$index   = $_GET["index"];
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$temp = explode('?', $url);
$temp1 = explode('=', $temp[1]);
$temp2 = explode('&', $temp1[1]);
if($temp1[0] !== "")
{
	$objName = $temp1[0];
}

if($temp2[0] !== "")
{
	$objValue = $temp2[0];
}

   
		$GlobalSQLink = mysqli_connect("mysqlv103", "1_02c7fb8_6", "r3Ij5nSKDY")
        or die("Could not connect");

        mysqli_select_db($GlobalSQLink, "1_02c7fb8_6")
        or die("Could not select database");
		
		$queryIndex = "SELECT MAX(labelID)+1 FROM label";
		$result = mysqli_query($GlobalSQLink, $queryIndex) or die(mysqli_error($GlobalSQLink));
		if ($result && $row = mysqli_fetch_assoc($result)) {
			$maxID 	= $row["MAX(labelID)+1"];       			
		}
		
		$queryIndex = "SELECT COUNT(labelID) FROM label WHERE orderNo = '".$orderNo1."'";
		//echo $queryTotal;
		$result = mysqli_query($GlobalSQLink, $queryIndex) or die(mysqli_error($GlobalSQLink));
		if ($result && $row = mysqli_fetch_assoc($result)) {
			$orderIdx 	= $row["COUNT(labelID)"];       			
		}
        
		$orderIdx = (int)$orderIdx + 1;

        $indx = 1;
		
				$query ="SELECT * from label WHERE orderNo='".$orderNo1."'";
				
				//echo $query;
				$result = mysqli_query($GlobalSQLink, $query) or die(mysqli_error($GlobalSQLink));
				if ( $result ) {
						while ($row = mysqli_fetch_array($result)) {
						$lab[$indx]["ID"] = $row["labelID"]; 
						$_SESSION[$indx]['ID']= $lab[$indx]["ID"];
						$lab[$indx]["orderNo"] = $row["orderNo"];       			
						$lab[$indx]["sidemark"] = $row["sidemark"];       			
						$lab[$indx]["PO"] = $row["PO"];       			
						$lab[$indx]["blinds"] = $row["blinds"];       			
						$lab[$indx]["qty"] = $row["qty"];       			
						$lab[$indx]["type"] = $row["type"];       			
						$lab[$indx]["valwidth"] = $row["valwidth"];       			
						$lab[$indx]["valheight"] = $row["valheight"]; 
						$lab[$indx]["vwidth"] = $row["vwidth"]; 
						$lab[$indx]["mt"] = $row["mt"];       			
						$lab[$indx]["size"] = $row["size"];       			
						$lab[$indx]["color"] = $row["color"];       			
						$lab[$indx]["rtn"] = $row["rtn"];       			
						$lab[$indx]["tilt1"] = $row["tilt1"];       			
						$lab[$indx]["lilt1"] = $row["lilt1"];       			
						$lab[$indx]["control"] = $row["control"];       			
						$lab[$indx]["customer"] = $row["customer"];       			
						$lab[$indx]["price"] = $row["price"];       			
						include ("color.php");
						$indx++;
						
						
						
						}
						
						mysqli_free_result( $result );
		}
		
        if(strlen($orderNo1)>0)
		{
			$query2 ="insert into label values('".$maxID."', '".$orderNo1."', '".$sidemark1."', '".$PO1."', '".$blinds1."', '".$qty1."', '".$type1."', '".$valwidth1."', '".$valheight1."', '".$mt1."', '".$rtn1."', '".$vwidth1."', '".$size1."', '".$color1."', '".$tilt11."', '".$lilt11."', '".$control1."', '".$price1."', '".$customer1."', '".$orderIdx."', CURDATE())";
			echo $query2;
			$result = mysqli_query($GlobalSQLink, $query2) or die(mysqli_error($GlobalSQLink));

		}



?>
