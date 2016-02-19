<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php 
		$labelID = $_GET["labelID"];
		$orderNo = $_GET["orderNo"];

		$GlobalSQLink = mysqli_connect("mysqlv103", "1_02c7fb8_6", "r3Ij5nSKDY")
        or die("Could not connect");

        mysqli_select_db($GlobalSQLink, "1_02c7fb8_6")
        or die("Could not select database");
				
		$deleteItem ="delete from label WHERE labelID='".$labelID."'";
				
		$result = mysqli_query($GlobalSQLink, $deleteItem) or die(mysqli_error($GlobalSQLink));
		
		 $indx = 1;
		 
				$query ="SELECT * from label WHERE orderNo='".$orderNo."'";
				
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
						$lab[$indx]["index"] = $row["index"]; 
						if($lab[$indx]["ID"] < $labelID)
						{
							$lab[$indx]["index1"] = $lab[$indx]["index"];
						}else
						{      			
							$lab[$indx]["index1"] = (int)$lab[$indx]["index"] -1;
						}
						echo $lab[$indx]["index1"];
						include ("color.php");
						$indx++;
						
											
						}
						
						mysqli_free_result( $result );
		}
		
		for ($m = 1; $m < $indx; $m++)
		{
			$updateItem = "UPDATE label SET `index` =  '".$lab[$m]["index1"]."' WHERE labelID = '".$lab[$m]["ID"]."'"; 
			echo $updateItem;
			$result = mysqli_query($GlobalSQLink, $updateItem) or die(mysqli_error($GlobalSQLink));
		}
		
		
?>
