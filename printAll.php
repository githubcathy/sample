<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.center
{
  font-size:20px; 
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
								if($vwidth !== "")
								{
									$vwidth = $vwidth;
								}else{
								    $temp = explode(' ', $valwidth);
									$temp1 = explode('/', $temp[1]);
									$vwidth = (float)$temp[0] + ((float)$temp1[0]/(float)$temp1[1]) + 0.5;
								}
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
<p>&nbsp;<?php echo $sidemark; ?> &nbsp;&nbsp; <?php echo date("m/d/y") ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $PO; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $orderNo; ?></p>
<p>&nbsp;Val Width:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $vwidth;  ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mt:&nbsp;<strong><?php echo $mt;  ?></strong></p>
<p>&nbsp;<?php echo $size;; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $color; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RTN: <?php  echo $rtn; ?></p>
<p>&nbsp;<strong><?php echo $blinds; ?></strong></p>
<table width="531" border="0" class="center">
  <tr>
    <td width="270"><strong><?php echo $customer; ?></strong></td>
    <td width="251">Order&nbsp;&nbsp;&nbsp; <?php echo $index; ?> &nbsp;&nbsp;&nbsp;of&nbsp; &nbsp;&nbsp; <?php echo $total; ?> &nbsp; &nbsp;&nbsp;VAL</td>
  </tr>
</table>
</div>
<br />
<br />
<br />
<br />
<br />
<div class="center">
<p>&nbsp;<?php echo $sidemark; ?> &nbsp;&nbsp; <?php echo date("m/d/y") ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $PO; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $orderNo; ?></p>
<p>&nbsp;w: <?php echo $valwidth;  ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h: <?php echo $valheight; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mt:&nbsp;<?php echo $mt;  ?></p>
<p>&nbsp;slat: slat#:<?php echo $lab[$indx]["slat"];  ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $color; ?></p>
<p>&nbsp;<strong><?php echo $blinds; ?></strong> </p>
<table width="515" border="0" class="center">
  <tr>
    <td width="224"><strong><?php echo $customer; ?></strong></td>
    <td width="198">Order&nbsp;&nbsp;&nbsp; <?php echo $index; ?> &nbsp;&nbsp;&nbsp;of&nbsp; &nbsp;&nbsp; <?php echo $total; ?> &nbsp; &nbsp;&nbsp;SL</td>
  </tr>
</table>
</div>
<br />
<br />
<br />
<br />
<br />
<div class="center">
<p>&nbsp;<?php echo $sidemark; ?> &nbsp;&nbsp; <?php echo date("m/d/y") ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $PO; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $orderNo; ?></p>
<p>&nbsp;w: <?php echo $valwidth;  ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h: <?php echo $valheight; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mt:&nbsp;<strong><?php echo $mt;  ?></strong></p>
<p>&nbsp;<strong><?php echo $blinds; ?></strong> &nbsp;&nbsp;&nbsp; &nbsp;<?php echo $color;  ?></p>
<table width="527" border="0" class="center">
  <tr>
    <td width="224"><strong><?php echo $customer; ?></strong></td>
    <td width="198">Order&nbsp;&nbsp;&nbsp; <?php echo $index; ?> &nbsp;&nbsp;&nbsp;of&nbsp; &nbsp;&nbsp; <?php echo $total; ?> &nbsp; &nbsp;&nbsp;SP</td>
  </tr>
</table>
</div>
<br />
<br />
<br />
<div class="center">
<p>&nbsp;<?php echo $sidemark; ?> &nbsp;&nbsp; <?php echo date("m/d/y") ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $PO; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $orderNo; ?></p>
<p>&nbsp;w: <?php echo $valwidth;  ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h: <?php echo $valheight; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mt:&nbsp;<strong><?php echo $mt;  ?></strong></p>
<p>&nbsp;slat: slat#:<?php echo $lab[$indx]["slat"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $color; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $control; ?></p>
<p>&nbsp;Tilt:
  <?php  echo $tilt1; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lab[$indx]["cordcolor"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;
  Headrail:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lab[$indx]["headrail"]; ?></p>
<p>&nbsp;Lift:&nbsp;<?php echo $lilt1; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lab[$indx]["cordcolor"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ladder:&nbsp;&nbsp;&nbsp;<?php echo $lab[$indx]["ladder"]; ?></p>
<p>&nbsp;<strong><?php echo $blinds; ?></strong> &nbsp;&nbsp;&nbsp; &nbsp;<?php echo $type;   ?></p>
<table width="520" border="0" class="center">
  <tr>
    <td width="224"><strong><?php echo $customer; ?></strong></td>
    <td width="198">Order&nbsp;&nbsp;&nbsp; <?php echo $index; ?> &nbsp;&nbsp;&nbsp;of&nbsp; &nbsp;&nbsp; <?php echo $total; ?> &nbsp; &nbsp;&nbsp;HH</td>
  </tr>
</table>
</div>
</body>
</html>