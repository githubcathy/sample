<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.center
{
  font-size:24px; 
  font-family:Arial, Helvetica, sans-serif;
  heigth: 12px;
}

.center p
{
   height:2px;
}
</style>
</head>

<body onload="window.print()">
<?php 
    $labelID = $_GET["labelID"];
		$GlobalSQLink = mysqli_connect("205.178.146.105", "1_02c7fb8_8", "FhSIPeKJNY")
        or die("Could not connect");

        mysqli_select_db($GlobalSQLink, "1_02c7fb8_8")
        or die("Could not select database");
		

			$queryItem ="SELECT * from label WHERE labelID='".$labelID."'";
				
				//echo $query;
				$result = mysqli_query($GlobalSQLink, $queryItem) or die(mysqli_error($GlobalSQLink));
				if ($result && $row = mysqli_fetch_assoc($result)) {
						
								$labelID	= $row["labelID"];       			
								$orderNo	= $row["orderNo"];       			
								$sidemark	= $row["sidemark"];       			
								$PO      	= $row["PO"]; 
								$lab[$indx]["blinds"] = $blinds     = $row["blinds"];   
								$type       = $row["type"];   
								$valwidth	= $row["valwidth"];   
								$lab[$indx]["valheight"] = $valheight  = $row["valheight"];
								include("slat.php");   
								$vwidth     = $row["vwidth"];   
								$mt         = $row["mt"];   
								$size       = $row["size"];   
								$lab[$indx]["color"] = $color      = $row["color"];   
								$rtn        = $row["rtn"];   
								$tilt1      = $row["tilt1"];   
								$lilt1      = $row["lilt1"];   
								$control    = $row["control"];   
								$customer   = $row["customer"];   
								$index      = $row["index"];   
								$date       = $row["date"];   
								$strdate = explode('-', $date);
       			        		$date = $strdate[1]."/".$strdate[2]."/".$strdate[0];
								
								include ("color.php");
						
														
						mysqli_free_result( $result );
				  }
		
		
		$queryTotal = "SELECT COUNT(labelID) FROM label WHERE orderNo = '".$orderNo."'";
		//echo $queryTotal;
		$result = mysqli_query($GlobalSQLink, $queryTotal) or die(mysqli_error($GlobalSQLink));
		if ($result && $row = mysqli_fetch_assoc($result)) {
			$total 	= $row["COUNT(labelID)"];       			
		}
		
		
		if (strpos($blinds,'quote') !== false) {
       $blinds = str_replace("quote","&rdquo",$blinds);
		}



 ?>

<div class="center">
<p>&nbsp;<?php echo $sidemark; ?> &nbsp;&nbsp; <?php echo date("m/d/y") ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $PO; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $orderNo; ?></p>
<p>&nbsp;w: <?php echo $valwidth;  ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h: <?php echo $valheight; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mt:&nbsp;<?php echo $mt;  ?></p>
<p>&nbsp;slat: slat#:<?php echo $lab[$indx]["slat"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $color; ?></p>
<p>&nbsp;<strong><?php echo $blinds; ?></strong> </p>
<table width="658" border="0" class="center">
  <tr>
    <td width="224"><strong><?php echo $customer; ?></strong></td>
    <td width="198">Order&nbsp;&nbsp;&nbsp; <?php echo $index; ?> &nbsp;&nbsp;&nbsp;of&nbsp; &nbsp;&nbsp; <?php echo $total; ?> &nbsp; &nbsp;&nbsp;SL</td>
  </tr>
</table>
</div>
</body>
</html>
