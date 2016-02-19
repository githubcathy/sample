<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
   function printItem()
   {
		var d = new Date();
		var time = d.getTime();
		var t = document.getElementById("t").value;
		var orderNo = document.getElementById("orderNo1").value;
		//alert("t=" + t);
		var j=0;
		URL = "print.php?t="+time;
		for(var i=1; i<=t; i++)
		{
			j++;
			var ckvhh = document.getElementById("checkhh"+i).checked;
			var ckvhhval = document.getElementById("checkhh"+i).value;
			URL += "&hh" +i + "=" + ckvhh + "&hhval" + i + "=" + ckvhhval;
			var ckvsp = document.getElementById("checksp"+i).checked;
			var ckvspval = document.getElementById("checksp"+i).value;
			URL += "&sp" + i + "=" + ckvsp;
			var ckvsl = document.getElementById("checksl"+i).checked;
			var ckvslval = document.getElementById("checksl"+i).value;
			URL += "&sl" + i + "=" + ckvsl;
			var ckvval = document.getElementById("checkval"+i).checked;
			var ckvvalval = document.getElementById("checkval"+i).value;
			URL += "&val" + i + "=" + ckvval;
		}
		URL += "&j=" + j + "&orderNo=" + orderNo;
		window.open (URL, "_blank");
   }
   
   checked = false;
   
   function checkedAll()
   {
	   if (checked == false){checked = true}else{checked = false}
       for (var n = 0; n < document.getElementById('myform').elements.length; n++) {
         document.getElementById('myform').elements[n].checked = checked;
       }
   
   }

   function checkedHH()
   {
	   	if (checked == false){checked = true}else{checked = false}
	   for (var n = 0; n < document.getElementById('myform').elements.length; n++) {
		   var frmID = document.getElementById('myform').elements[n].id;
			   //alert(frmID);
			   var result = frmID.search("checkhh");
			   //alert(result);
			   if(result == 0)
			   {
				   document.getElementById('myform').elements[n].checked = checked;
			   }
	
		}
   
   }

   function checkedSP()
   {
	   	if (checked == false){checked = true}else{checked = false}
	   for (var n = 0; n < document.getElementById('myform').elements.length; n++) {
		   var frmID = document.getElementById('myform').elements[n].id;
			   //alert(frmID);
			   var result = frmID.search("checksp");
			   //alert(result);
			   if(result == 0)
			   {
				   document.getElementById('myform').elements[n].checked = checked;
			   }
	
		}
   
   }


   function checkedSL()
   {
	   	if (checked == false){checked = true}else{checked = false}
	   for (var n = 0; n < document.getElementById('myform').elements.length; n++) {
		   var frmID = document.getElementById('myform').elements[n].id;
			   //alert(frmID);
			   var result = frmID.search("checksl");
			   //alert(result);
			   if(result == 0)
			   {
				   document.getElementById('myform').elements[n].checked = checked;
			   }
	
		}
   
   }

   function checkedVAL()
   {
	   	if (checked == false){checked = true}else{checked = false}
	   for (var n = 0; n < document.getElementById('myform').elements.length; n++) {
		   var frmID = document.getElementById('myform').elements[n].id;
			   //alert(frmID);
			   var result = frmID.search("checkval");
			   //alert(result);
			   if(result == 0)
			   {
				   document.getElementById('myform').elements[n].checked = checked;
			   }
	
		}
   
   }
</script>
<style type="text/css">
.title {
	background-color:#4D4D4D;
	color: white;
	font-weight:bold;
}
.checkall {
	font-size: 20px;
}
</style>
</head>
<body>
<?php 
		$url=$_SERVER['REQUEST_URI'];
		$j = $_GET["j"];
		$orderNo1 = $_GET["orderNo"];
		//echo $url."<br>";
		$u = explode("&",$url);
				//$orderNo1 = $_GET['orderNo'];

		$GlobalSQLink = mysqli_connect("mysqlv103", "1_02c7fb8_6", "r3Ij5nSKDY")
        or die("Could not connect");

        mysqli_select_db($GlobalSQLink, "1_02c7fb8_6")
        or die("Could not select database");


?>
<h1 style='color: #800000;'>Select Labels to Generate</h1>
<input type="text" id="t" name="t" value="<?php echo $j; ?>" style="visibility:hidden; "/>
<input type="text" id="orderNo1" name="orderNo1" value="<?php echo $orderNo1; ?>" style="visibility:hidden; "/>
<form id="myform">
<table width="720" border="1" style="font-size: 20px;">
  <tr class="title">
    <td width="26">&nbsp;</td>
    <td width="140">Label</td>
    <td width="47">Order</td>
    <td width="69">LabelID</td>
  </tr>
   <?php for($l = 1; $l <= $j; $l++)
		{
			$labelID = $u[$l];
   ?>
  <tr>
    <td><input type='checkbox' id="<?php echo "checkhh".$l; ?>" value="<?php echo $labelID; ?>" /></td>
    <td>BBN Horizontal Headrail Label&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $orderNo1; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $labelID; ?></td>
  </tr>
  <tr>
    <td><input type='checkbox' id="<?php echo "checksp".$l; ?>" value="<?php echo $labelID; ?>" /></td>
    <td>BBN Shiping Label&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $orderNo1; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $labelID; ?></td>
  </tr>
  <tr>
    <td><input type='checkbox' id="<?php echo "checksl".$l; ?>" value="<?php echo $labelID; ?>" /></td>
    <td>BBN Slat Label&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $orderNo1; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $labelID; ?></td>
  </tr>
  <tr>
    <td><input type='checkbox' id="<?php echo "checkval".$l; ?>" value="<?php echo $labelID; ?>" /></td>
    <td>BBN Valance Label&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $orderNo1; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $labelID; ?></td>
  </tr>
  
  <?php } ?>

</table>
</form>
 <table width="720" height="55" border="0">
    <tr>
      <td align="right">Check HH:
        <input type='checkbox' name='checkHH' onclick='checkedHH();'  />
        CheckSP:
        <input type='checkbox' name='checkSP' onclick='checkedSP();'  />
        CheckSL:
        <input type='checkbox' name='checkSL' onclick='checkedSL();'  />
        CheckVAL:
        <input type='checkbox' name='checkVAL' onclick='checkedVAL();'  />
      Check all:<input type='checkbox' name='checkall' onclick='checkedAll();' >&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" id="print" onclick="printItem();" size="10" value="Continue" style="background-color:#4D4D4D; color:white; font-size: 16px;" /></td>
    </tr>
</table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</body>
</html>