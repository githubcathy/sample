<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">

function print()
{
	var d = new Date();
	var time = d.getTime();
	//var ckv = new array();
	var t = document.getElementById("t").value;
    var orderNo = document.getElementById("dorder").value;
	var j=0;
	URL = "printpage.php?t="+time;
	for(var i=1; i<=t; i++)
	{
		var ckv = document.getElementById("check"+i).checked;
		if(ckv==true)
		{
			j++; 
			var ckn = document.getElementById("check"+i).value;
			URL += "&" + ckn;
		}
	}
	URL += "&j="+j+"&orderNo="+orderNo;
	window.open (URL, "_blank");
}

function cloneorder(Object)
{
	var cloneNo = Object.name;
	var username = document.getElementById("username").value;
	URL = "label.php?clone=true&orderNo1="+cloneNo+"&username="+username;
	location.href = URL;	
}
function createorder()
{
	var d = new Date();
	var time = d.getTime();
	//var ckv = new array();
	var t = document.getElementById("t").value;
    var orderNo = document.getElementById("dorder").value;
	var j=0;
	URL = "createorder.php?t="+time;
    for(var i=1; i<=t; i++)
	{
		var ckv = document.getElementById("check"+i).checked;
		if(ckv==true)
		{
			j++; 
			var ckn = document.getElementById("check"+i).value;
			//alert("ckn=" + ckn);
			URL += "&" + ckn;
		}
	}
	URL += "&j="+j+"&orderNo="+orderNo;
	//alert(URL);
	window.open (URL, "_blank");
}

function deleteblinds(Object)
{
		var username = document.getElementById("username").value;
	    var objID = Object.name;
		var orderNo = Object.id;
		var details = document.getElementById("details").checked;  
		//alert("objID=" + objID);
		confirm("Do you really want to delete this record?");
	    
		var xmlhttp=new XMLHttpRequest();
		if(orderNo == "")
		{
			alert("Please input orderNo");
		}else{

   		URL = "deletepage.php?labelID="+objID+"&orderNo="+orderNo;

		xmlhttp.onreadystatechange=function()
	 	{
	  	if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
	  	}
	  
	 // window.open(URL);
		xmlhttp.open("GET",URL,true);
		xmlhttp.send();
	
		URL = "label.php?orderNo1="+orderNo+"&flag="+details + "&username=" + username;
		setTimeout("location.href = URL",500)

	}

}

function addblinds()
{
	    var username = document.getElementById("username").value;
		var sidemark = document.getElementById("sidemark").value;
		var PO = document.getElementById("PO").value;
		var orderNo = document.getElementById("orderNo").value;
		var valwidth = document.getElementById("valwidth").value;
		var valheight = document.getElementById("valheight").value;
     	var vwidth = document.getElementById("vwidth").value;
     	var qty = document.getElementById("qty").value;
     	var price = document.getElementById("price").value;
		var m = document.getElementById("mt");
		var mt = m.options[m.selectedIndex].value;
    	var sz = document.getElementById("size");
		var size = sz.options[sz.selectedIndex].value;
		var rtn = document.getElementById("rtn").value;
    	var c = document.getElementById("color");
		var color = c.options[c.selectedIndex].value;
    	var tl1 = document.getElementById("tilt1");
		var tilt1 = tl1.options[tl1.selectedIndex].value;
    	var lt1 = document.getElementById("lilt1");
		var lilt1 = lt1.options[lt1.selectedIndex].value;
    	var con = document.getElementById("control");
		var control = con.options[con.selectedIndex].value;
   	 	var b = document.getElementById("blinds");
		var blinds = b.options[b.selectedIndex].value;
    	var t = document.getElementById("type");
		var type = t.options[t.selectedIndex].value;
		var customer = document.getElementById("customer").value;
		
	var xmlhttp=new XMLHttpRequest();
	if(orderNo == "")
	{
			alert("Please input orderNo");
	}else{

	URL = "labeladd.php?sidemark1="+sidemark+"&PO1="+PO+"&orderNo1="+orderNo+"&valwidth1="+valwidth+"&valheight1="+valheight+"&qty1="+qty+"&vwidth1="+vwidth+"&mt1="+mt+"&size1="+size+"&rtn1="+rtn+"&color1="+color+"&tilt11="+tilt1;
	URL+= "&lilt11="+lilt1+"&control1="+control+"&blinds1="+blinds+"&type1="+type+"&customer1="+customer+"&price1="+price;

	//window.open(URL);
	xmlhttp.open("GET",URL,true);
	xmlhttp.send();
	
	URL = "label.php?orderNo1="+orderNo +　"&username=" + username;
	setTimeout("location.href = URL",500)

	}
}


 	function valueChange(str)
	{
		var username = document.getElementById("username").value;
		var objID = str.id;
		var labelID = str.name;
		var objValue = str.value;
		var orderNo = document.getElementById("orderNo1").value;
		var details = document.getElementById("details").checked;  

		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    		{
    			document.getElementById("txtHint1").innerHTML=xmlhttp.responseText;
   		 	}
  		}
  
  		URL = "labelupdate.php?labelID="+labelID+"&objID="+objID+"&objValue="+objValue;
        //alert(URL);
		//window.open(URL);
		xmlhttp.open("GET",URL,true);
		xmlhttp.send();
		URL = "label.php?orderNo1="+orderNo+"&flag="+details + "&username=" + username;
		setTimeout("location.href = URL",500)
		
   
	}


function search()
{
   var username = document.getElementById("username").value;
   var orderNo2 = document.getElementById("orderNo2").value;
   URL = "label.php?orderNo1="+orderNo2 + "&username=" + username;
   document.location = URL;


}

	checked = false;

   function checkedAll()
   {
	   if (checked == false){checked = true}else{checked = false}
       for (var n = 0; n < document.getElementById('myform').elements.length; n++) {
         document.getElementById('myform').elements[n].checked = checked;
       }
   
   }
   
   function details()
   {
	    var username = document.getElementById("username").value;
		var details = document.getElementById("details").checked;  
		//alert("details=" + details); 
		var orderNo = document.getElementById("dorder").value;
		
		if(details == true)
		{
			URL = "label.php?orderNo1="+orderNo+"&flag=true" + "&username=" + username;
   			document.location = URL;
		}else
		{
			URL = "label.php?orderNo1="+orderNo+"&flag=false" + "&username=" + username;
   			document.location = URL;
			
		}
   }


</script>

<style type="text/css">
body p {
	font-size: 14px;
}
body p {
	font-size: 16px;
}

.title {
	background-color:#666;
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

$username = $_GET["username"];

?>

<input type="text" id="username" value="<?php echo $username; ?>"  style="visibility: hidden; "/>

<?php
		$GlobalSQLink = mysqli_connect("mysqlv103", "1_02c7fb8_6", "r3Ij5nSKDY")
        or die("Could not connect");

        mysqli_select_db($GlobalSQLink, "1_02c7fb8_6")
        or die("Could not select database");
		
session_start();
$sidemark1 = $_GET["sidemark1"];
$PO1 = $_GET["PO1"];
$orderNo1 = $_GET["orderNo1"];
$valwidth1 = $_GET["valwidth1"];
$valheight1 = $_GET["valheight1"];
$vwidth1    = $_GET["vwidth1"];
$mt1        = $_GET["mt1"];
$slat1      = $_GET["slat1"];
$size1      = $_GET["size1"];
$rtn1       = $_GET["rtn1"];
$color1     = $_GET["color1"];
$lilt11     = $_GET["lilt1"];
$tilt11     = $_GET["tilt11"];
$control1   = $_GET["control1"];
$blinds1    = $_GET["blinds1"];
$type1      = $_GET["type1"];
$customer1  = $_GET["customer1"];
$flag       = $_GET["flag"];

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
$clone = $_GET["clone"];
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


		

		$queryTotal = "SELECT COUNT(labelID) FROM label WHERE orderNo = '".$orderNo1."'";
		//echo $queryTotal;
		$result = mysqli_query($GlobalSQLink, $queryTotal) or die(mysqli_error($GlobalSQLink));
		if ($result && $row = mysqli_fetch_assoc($result)) {
			$total 	= $row["COUNT(labelID)"];       			
		}

        $indx = 1;
		
				$query ="SELECT * from label WHERE orderNo='".$orderNo1."' ORDER BY valwidth";
				
				//echo $query;
				$result = mysqli_query($GlobalSQLink, $query) or die(mysqli_error($GlobalSQLink));
				if ( $result ) {
						while ($row = mysqli_fetch_array($result)) {
						$lab[$indx]["ID"] = $row["labelID"]; 
						$orderNo = $lab[$indx]["orderNo"] = $row["orderNo"];       			
						$sidemark = $lab[$indx]["sidemark"] = $row["sidemark"];       			
						$PO = $lab[$indx]["PO"] = $row["PO"];       			
						$lab[$indx]["blinds"] = $row["blinds"];       			
						$lab[$indx]["qty"] = $row["qty"];       			
						$lab[$indx]["type"] = $row["type"];       			
						$lab[$indx]["valwidth"] = $row["valwidth"]; 
						$lab[$indx]["valheight"] = $row["valheight"];
						$lab[$indx]["mt"] = $row["mt"];       			
						$lab[$indx]["rtn"] = $row["rtn"];       			
                        include("slat.php");
						//echo "slat=".$lab[$indx]["slat"];
						$lab[$indx]["vwidth"] = $row["vwidth"];
						if($lab[$indx]["vwidth"] == "" || $lab[$indx]["vwidth"] == 0)
						{
							if($lab[$indx]["mt"] == "IB")
							{
									if($lab[$indx]["rtn"] > 0)
									{
										$lab[$indx]["vwidth"] = (float)$lab[$indx]["valwidth"] + 0.5;
									}else{
										$lab[$indx]["vwidth"] = $lab[$indx]["valwidth"];
									}
								
							}
							if($lab[$indx]["mt"] == "OB")
							{
									$lab[$indx]["vwidth"] = (float)$lab[$indx]["valwidth"] + 1.5;
							}
						}else{
							$lab[$indx]["vwidth"] = $lab[$indx]["vwidth"];
						}
						
						
						$lab[$indx]["size"] = $row["size"];       			
						$lab[$indx]["color"] = $row["color"];       			
						$lab[$indx]["tilt1"] = $row["tilt1"];       			
						$lab[$indx]["lilt1"] = $row["lilt1"];       			
						$lab[$indx]["control"] = $row["control"];       			
						$lab[$indx]["price"] = $row["price"];       			
						$customer = $lab[$indx]["customer"] = $row["customer"];       			
						$lab[$indx]["index"] = $row["index"];       			
						$lab[$indx]["date"] = $row["date"];
						$strdate = explode('-', $lab[$indx]["date"]);
       			        $lab[$indx]["date1"] = $strdate[1]."/".$strdate[2]."/".$strdate[0];
						include ("color.php");
						
						if ($lab[$indx]["blinds"] == "2quote; Faux Blinds") {
     							$lab[$indx]["blinds"] = '2" Faux Blinds';
							}

						if ($lab[$indx]["blinds"] == "2quote; Basswood Blinds") {
     							$lab[$indx]["blinds"] = '2" Basswood Blinds';
							}

						if ($lab[$indx]["blinds"] == "2-1/2quote; Basswood Blinds") {
     							$lab[$indx]["blinds"] = '2-1/2" Basswood Blinds';
							}

						if ($lab[$indx]["blinds"] == "2-1/2quote; Faux Blinds") {
     							$lab[$indx]["blinds"] = '2-1/2" Faux Blinds';
						   }
		
						if ($lab[$indx]["size"] == "3-1/4quote Crown") {
     							$lab[$indx]["size"] = '3-1/4" Crown';
							}
		
						if ($lab[$indx]["size"] == "3-1/2quote Colonial") {
     							$lab[$indx]["size"] = '3-1/2" Colonial';
							}

							$indx++;
				
						
						}
						
						mysqli_free_result( $result );
		}
		
//echo $lab[1]["ID"]." ".$lab[2]["ID"];


?>

<h1><font color="#800000">Print Labels</font></h1>

<strong>Please input the orderNo: </strong><input type="text" id="orderNo2" name="orderNo2"  /> <input type="button" id="search" name="search" value="Search" onclick="search()" style="background-color:#4D4D4D; color:white;"/>
<br />
<br />
<form>
<table width="759" border="1" style="border-color:#E2E2E2; background-color:#FAFAFA;">
  <tr>
    <td><table width="759" border="1" style="border-color:#E2E2E2;">
      <tr>
        <td width="277" align="left">OrderNo:&nbsp;&nbsp;<input type="text" id="orderNo" name="orderNo"  size="20" maxlength="50"  value="<?php 
			if($clone == "true")
			{
				echo $orderNo;
			}else
			{
				echo "";
			}
		?>"/></td>
        <td width="357">Sidemark:&nbsp;&nbsp;<input type="text" id="sidemark" name="sidemark"  size="20" maxlength="50"  value="<?php
			if($clone == "true")
			{
				echo $sidemark;
			}else
			{
				echo "";
			}
		?>
        "/></td>
      </tr>
    </table>
    <table width="759" border="1" style="border-color:#E2E2E2;">
      <tr>
        <td width="277" align="left">PONo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="PO" name="PO"  size="20" maxlength="50" value="<?php
			if($clone == "true")
			{
				echo $PO;
			}else
			{
				echo "";
			}
		?>
        "/></td>
        <td width="357"><?php echo date("m/d/y") ?></td> 
      </tr>
    </table>

    <table width="759" border="1" style="border-color:#E2E2E2;">
        <tr>
          <td width="234"><select name="blinds" id="blinds" >
            <option value="">--Select--</option>
            <option value="2quote; Basswood Blinds" >2&quot; Basswood Blinds</option>
            <option value="2quote; Faux Blinds" >2&quot; Faux Blinds</option>
            <option value="2-1/2quote; Basswood Blinds"  >2-1/2&quot; Basswood Blinds</option>
            <option value="2-1/2quote; Faux Blinds" >2-1/2&quot; Faux Blinds</option>
          </select></td>
          <td width="209"><select name="type" id="type" >
            <option value="">--Select--</option>
            <option value="Standard Lift" >Standard Lift</option>
            <option value="Two on One Headrail"  >Two on One Headrail</option>
            <option value="Three on One Headrail"  >Three on One Headrail</option>
          </select></td>
          <td width="584">Quantity: <input type="text" id="qty" name="qty" size="4"/></td>
        </tr>
      </table>
      <table width="759" border="1" style="border-color:#E2E2E2;">
        <tr>
          <td width="32"><strong>w:</strong></td>
          <td width="90"><input type="text" id="valwidth" name="valwidth"  size="10" /> </td>
          <td width="30"><strong>h:</strong></td>
          <td width="111"><input type="text" id="valheight" name="valheight"  size="10" /> </td>
          <td width="49"><strong>mt:</strong></td>
          <td width="407"><select name="mt" id="mt">
            <option value="">--Select--</option>
            <option value="IB" >IB</option>
            <option value="OB" >OB</option>
          </select></td>
        </tr>
      </table>
      <table width="759" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="117"><strong>Val Width:</strong></td>
          <td width="168"><input type="text" id="vwidth" name="vwidth"  size="10" /></td>
          <td width="343">Color:
            <select name="color" id="color" >
              <option value="">--Select--</option>
              <option value="Alab.Texture" >Alab.Texture</option>
              <option value="Alabaster"  >Alabaster</option>
              <option value="Almond" >Almond</option>
              <option value="Rosewood" >Rosewood</option>
              <option value="Chestnut" >Chestnut</option>
              <option value="Eggshell" >Eggshell</option>
              <option value="Natural Maple" >Natural Maple</option>
              <option value="Pearl Texture" >Pearl Texture</option>
              <option value="Pecan" >Pecan</option>
              <option value="Snow Texture" >Snow Texture</option>
              <option value="Teak" >Teak</option>
              <option value="Cherry" >Cherry</option>
              <option value="Mahogany" >Mahogany</option>
              <option value="Dark Mahogany" >Dark Mahogany</option>
              <option value="Pearl" >Pearl</option>
              <option value="Maple" >Maple</option>
              <option value="White" >White</option>
              <option value="Snow White" >Snow White</option>
              <option value="Bright White" >Bright White</option>
              <option value="Almost White" >Almost White</option>
              <option value="Golden Oak" >Golden Oak</option>
              <option value="Cloud" >Cloud</option>
              <option value="Oyster" >Oyster</option>
              <option value="Espresso">Espresso</option>
              <option value="Black" >Black</option>
              <option value="Bourbon" >Bourbon</option>
              <option value="Chocolate" >Chocolate</option>
              <option value="Walnut">Walnut</option>
              <option value="Medium Oak">Medium Oak</option>
            </select></td>
        </tr>
      </table>
      <table width="759" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="54">Tilt:</td>
          <td width="195"><select name="tilt1" id="tilt1" >
            <option value="">--Select--</option>
            <option value="Cord"  >Cord</option>
            <option value="Wand"  >Wand</option>
            <option value="Motor Infrared"  >Motor Infrared</option>
            <option value="Motor RF" >Motor RF</option>
          </select></td>
          <td width="51">Lift:</td>
          <td width="112"><select name="lilt1" id="lilt1" >
            <option value="Cord">Cord</option>
          </select></td>
          <td width="147">Valance Type:</td>
          <td width="160"><select name="size" id="size" >
            <option value="">--Select--</option>
            <option value="3-1/4quote Crown"  $select1 >3-1/4&quot; Crown</option>
            <option value="3-1/2quote Colonial" $select2 >3-1/2&quot; Colonial</option>
            <option value="none" >none</option>
          </select></td>
        </tr>
      </table>
      <table width="759" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="91">Control:</td>
          <td width="208"><select name="control" id="control" >
            <option value="">--Select--</option>
            <option value="L:R T:L"  >Lift Right/Tilt Left</option>
            <option value="L:L T:R"  >Lift Left/Tilt Right</option>
            <option value="L:R T:R"  >Lift Right/Tilt Right</option>
            <option value="L:L T:L"  >Lift Left/Tilt Left</option>
            <option value="Loop-Left"  >Loop-Left</option>
            <option value="Loop-Right"  >Loop-Right</option>
          </select></td>

          <td width="118">RTN Width:</td>
          <td width="314"><input type="text" id="rtn" name="rtn"  size="10" /></td>
        </tr>
      </table>

      <table width="759" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="264">Customer: <input type="text" id="customer" name="customer"  size="30" value="<?php
			 if($clone == "true")
			 {
				echo $customer;
			 }else
			 {
				echo "";
			 }
		  ?>
          "/></td>
          <td width="264">Price: <input type="text" id="price" name="price"  size="10" /></td>
        </tr>
      </table>
      <table width="759" height="59" border="0">
        <tr>
          <td width="14.3%" align="center"><input type="button" id="add" name="add" onclick="addblinds();" size="10" value="Add Blinds" style="background-color:#4D4D4D; color:white;"/></td>
        </tr>
    </table></td>
  </tr>
</table>
</form>
<br />
<br />
 <input type="text" id="t" name="t" value="<?php echo $total; ?>" style="visibility: hidden; "/>
 <input type="text" id="dorder" name="dorder" value="<?php echo $orderNo1; ?>"  style="visibility: hidden; "/>
 
<?php if( strlen($orderNo1) > 0 )
{
	
?>
 <form id="myform">
<table width="759" height="83" border="1" style="border-color:#E2E2E2; background-color:#FAFAFA;">
  <tr class="title">
    <td>&nbsp;</td>
    <td>LabelID</td>
    <td>Qty.</td>
    <td>Descriptin</td>
    <td>Price</td>
  </tr>
  
  <?php for ($i = 1; $i < $indx; $i++) { 
     // echo $lab[$i]["ID"]; 
	 
   ?>
  <tr>
    <td><input type="checkbox" name="<?php echo $lab[$i]["ID"]; ?>" id="<?php echo "check".$i; ?>" value="<?php echo $lab[$i]["ID"]; ?>"/></td>
    <td><?php echo $lab[$i]["ID"]; ?></td>
    <td><?php echo $lab[$i]["qty"]; ?></td>
    <td><?php echo $lab[$i]["blinds"]." ".$lab[$i]["type"]." ".$lab[$i]["valwidth"]." ".$lab[$i]["valheight"]." ". $lab[$i]["mt"]." ".$lab[$i]["color"]." ".$lab[$i]["control"]; ?></td>
    <td><?php echo $lab[$i]["price"]; ?></td>
   </tr>
  
  <?php } ?>
</table>
</form>
<table width="759" height="55" border="0">
    <tr>
      <td align="right">Check all:<input type='checkbox' name='checkall' onclick='checkedAll();'>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" id="clone" name="<?php echo $orderNo; ?>" onclick="cloneorder(this);" size="10" value="Clone" style="background-color:#4D4D4D; color:white;"/>&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="button" id="createorder" name="<?php echo $orderNo; ?>" onclick="createorder();" size="10" value="Create Order" style="background-color:#4D4D4D; color:white;"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" id="print" name="<?php echo $orderNo; ?>" onclick="print();" size="10" value="Print" style="background-color:#4D4D4D; color:white;"/>
      </td>
    </tr>
</table>

  <?php   } 
 ?>

<br />
<br /> 
<?php

if(strlen($orderNo1) > 0)
{
 if($flag == "true") $checked = "checked"; ?>
<input type="checkbox" id="details" name="details" value="Details" onclick="details()"  <?php echo $checked; ?> />Details
<br />
<br />


  <?php 
       
	   if($flag == "true")
	   {
  
  		for ($i = 1; $i < $indx; $i++) { 
        //echo $lab[$i]["ID"]; 
		//echo $lab[$i]["blinds"];
			 
   ?> 
 
 <table width="759" border="1" style="border-color:#E2E2E2; background-color:#FAFAFA;">
  <tr>
    <td><table width="759" border="1" style="border-color:#E2E2E2;">
      <tr>
        <td width="277" align="left">OrderNo:&nbsp;&nbsp;<input type="text" id="orderNo1" name="<?php echo $lab[$i]["ID"]; ?>"  size="20" maxlength="50" value="<?php echo $lab[$i]["orderNo"] ?>" /></td>
        <td width="357">Sidemark:&nbsp;&nbsp;<input type="text" id="sidemark1" name="<?php echo $lab[$i]["ID"]; ?>"  size="20" maxlength="50" value="<?php echo $lab[$i]["sidemark"]; ?>" onchange="valueChange(this)"/></td>
      </tr>
    </table>
    <table width="759" border="1" style="border-color:#E2E2E2;">
      <tr>
        <td width="277" align="left">PONo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="PO1" name="<?php echo $lab[$i]["ID"]; ?>"  size="20" maxlength="50" value="<?php echo $lab[$i]["PO"] ?>" onchange="valueChange(this)"/></td>
        <td width="357"><?php echo $lab[$i]["date1"]; ?></td> 
      </tr>
    </table>

    <table width="759" border="1" style="border-color:#E2E2E2;">
        <tr>
        <?php
		
				if($lab[$i]["blinds"] == '2" Basswood Blinds')
				{
					$lab[$i]["blinds"] = "2quote; Basswood Blinds";	
				}

				if($lab[$i]["blinds"] == '2" Faux Blinds')
				{
					$lab[$i]["blinds"] = "2quote; Faux Blinds";	
				}
				
				if($lab[$i]["blinds"] == '2-1/2" Basswood Blinds')
				{
					$lab[$i]["blinds"] = "2-1/2quote; Basswood Blinds";	
				}

				if($lab[$i]["blinds"] == '2-1/2" Faux Blinds')
				{
					$lab[$i]["blinds"] = "2-1/2quote; Faux Blinds";	
				}
		?>
				
          <td width="269"><select name="<?php echo $lab[$i]["ID"]; ?>" id="blinds1" onchange="valueChange(this)">
            <option value="">--Select--</option>
            <option value="2quote; Basswood Blinds" <?=$lab[$i]["blinds"] == "2quote; Basswood Blinds" ? ' selected="selected"' : ''?> >2&quot; Basswood Blinds</option>
            <option value="2quote; Faux Blinds" <?=$lab[$i]["blinds"]== "2quote; Faux Blinds" ? ' selected="selected"' : ''?> >2&quot; Faux Blinds</option>
            <option value="2-1/2quote; Basswood Blinds" <?=$lab[$i]["blinds"] == "2-1/2quote; Basswood Blinds" ? ' selected="selected"' : ''?> >2-1/2&quot; Basswood Blinds</option>
            <option value="2-1/2quote; Faux Blinds" <?=$lab[$i]["blinds"] == "2-1/2quote; Faux Blinds" ? ' selected="selected"' : ''?> >2-1/2&quot; Faux Blinds</option>
          </select></td>
          <td width="365"><select name="<?php echo $lab[$i]["ID"]; ?>" id="type1" onchange="valueChange(this)" >
            <option value="">--Select--</option>
            <option value="Standard Lift" <?=$lab[$i]["type"]  == "Standard Lift" ? ' selected="selected"' : ''?> >Standard Lift</option>
            <option value="Two on One Headrail" <?=$lab[$i]["type"]  == "Two on One Headrail" ? ' selected="selected"' : ''?> >Two on One Headrail</option>
            <option value="Three on One Headrail" <?=$lab[$i]["type"]  == "Three on One Headrail" ? ' selected="selected"' : ''?> >Three on One Headrail</option>
          </select></td>
        </tr>
      </table>
      <table width="759" border="1" style="border-color:#E2E2E2;">
        <tr>
          <td width="27"><strong>w:</strong></td>
          <td width="74"><input type="text" id="valwidth1" name="<?php echo $lab[$i]["ID"]; ?>"  size="10" value="<?php echo $lab[$i]["valwidth"]; ?>" onchange="valueChange(this)" /></td>
          <td width="19"><strong>h:</strong></td>
          <td width="115"><input type="text" id="valheight1" name="<?php echo $lab[$i]["ID"]; ?>"  size="10" value="<?php echo $lab[$i]["valheight"]; ?>"  onchange="valueChange(this)"/></td>
          <td width="98"><strong>Val Width:</strong></td>
          <td width="107"><input type="text" id="vwidth1" name="<?php echo $lab[$i]["ID"]; ?>"  size="10" value="<?php echo $lab[$i]["vwidth"]; ?>" onchange="valueChange(this)" /></td>
          <td width="36"><strong>mt:</strong></td>
          <td width="122"><select name="<?php echo $lab[$i]["ID"]; ?>" id="mt1" onchange="valueChange(this)">
            <option value="">--Select--</option>
            <option value="IB" <?=$lab[$i]["mt"] == "IB" ? ' selected="selected"' : ''?> >IB</option>
            <option value="OB" <?=$lab[$i]["mt"] == "OB" ? ' selected="selected"' : ''?>>OB</option>
          </select></td>
        </tr>
      </table>
      <table width="759" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="144">Slat: Slat#: <?php echo $lab[$i]["slat"]; ?></td>
          <td width="242">Color:
            <select name="<?php echo $lab[$i]["ID"]; ?>" id="color1" onchange="valueChange(this)">
              <option value="">--Select--</option>
              <option value="Alab.Texture" <?=$lab[$i]["color"] == "Alab.Texture" ? ' selected="selected"' : ''?> >Alab.Texture</option>
              <option value="Alabaster" <?=$lab[$i]["color"] == "Alabaster" ? ' selected="selected"' : ''?> >Alabaster</option>
              <option value="Almond" <?=$lab[$i]["color"] == "Almond" ? ' selected="selected"' : ''?>>Almond</option>
              <option value="Rosewood" <?=$lab[$i]["color"] == "Rosewood" ? ' selected="selected"' : ''?>>Rosewood</option>
              <option value="Chestnut" <?=$lab[$i]["color"] == "Chestnut" ? ' selected="selected"' : ''?>>Chestnut</option>
              <option value="Eggshell" <?=$lab[$i]["color"] == "Eggshell" ? ' selected="selected"' : ''?>>Eggshell</option>
              <option value="Natural Maple" <?=$lab[$i]["color"] == "Natural Maple" ? ' selected="selected"' : ''?>>Natural Maple</option>
              <option value="Pearl Texture" <?=$lab[$i]["color"] == "Pearl Texture" ? ' selected="selected"' : ''?>>Pearl Texture</option>
              <option value="Pecan" <?=$lab[$i]["color"] == "Pecan" ? ' selected="selected"' : ''?>>Pecan</option>
              <option value="Snow Texture" <?=$lab[$i]["color"] == "Snow Texture" ? ' selected="selected"' : ''?>>Snow Texture</option>
              <option value="Teak" <?=$lab[$i]["color"] == "Teak" ? ' selected="selected"' : ''?>>Teak</option>
              <option value="Cherry" <?=$lab[$i]["color"] == "Cherry" ? ' selected="selected"' : ''?>>Cherry</option>
              <option value="Mahogany" <?=$lab[$i]["color"] == "Mahogany" ? ' selected="selected"' : ''?>>Mahogany</option>
              <option value="Dark Mahogany" <?=$lab[$i]["color"] == "Dark Mahogany" ? ' selected="selected"' : ''?>>Dark Mahogany</option>
              <option value="Pearl" <?=$lab[$i]["color"] == "Pearl" ? ' selected="selected"' : ''?>>Pearl</option>
              <option value="Maple" <?=$lab[$i]["color"] == "Maple" ? ' selected="selected"' : ''?>>Maple</option>
              <option value="White" <?=$lab[$i]["color"] == "White" ? ' selected="selected"' : ''?>>White</option>
              <option value="Snow White" <?=$lab[$i]["color"] == "Snow White" ? ' selected="selected"' : ''?>>Snow White</option>
              <option value="Bright White" <?=$lab[$i]["color"] == "Bright White" ? ' selected="selected"' : ''?>>Bright White</option>
              <option value="Almost White" <?=$lab[$i]["color"] == "Almost White" ? ' selected="selected"' : ''?>>Almost White</option>
              <option value="Golden Oak" <?=$lab[$i]["color"] == "Golden Oak" ? ' selected="selected"' : ''?>>Golden Oak</option>
              <option value="Cloud" <?=$lab[$i]["color"] == "Cloud" ? ' selected="selected"' : ''?>>Cloud</option>
              <option value="Oyster" <?=$lab[$i]["color"] == "Oyster" ? ' selected="selected"' : ''?>>Oyster</option>
              <option value="Espresso" <?=$lab[$i]["color"] == "Espresso" ? ' selected="selected"' : ''?>>Espresso</option>
              <option value="Black" <?=$lab[$i]["color"] == "Black" ? ' selected="selected"' : ''?>>Black</option>
              <option value="Bourbon" <?=$lab[$i]["color"] == "Bourbon" ? ' selected="selected"' : ''?>>Bourbon</option>
              <option value="Chocolate" <?=$lab[$i]["color"] == "Chocolate" ? ' selected="selected"' : ''?>>Chocolate</option>
              <option value="Walnut" <?=$lab[$i]["color"] == "Walnut" ? ' selected="selected"' : ''?>>Walnut</option>
              <option value="Medium Oak" <?=$lab[$i]["color"] == "Medium Oak" ? ' selected="selected"' : ''?>>Medium Oak</option>
            </select></td>
          <td width="287">
            Quantity:
            <input type="text" id="qty1" name="<?php echo $lab[$i]["ID"]; ?>"  size="4" value="<?php echo $lab[$i]["qty"]; ?>" onchange="valueChange(this)" /></td>
        </tr>
      </table>
      <table width="759" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="138">Valance Type:</td>
          <?php
		      if( ($lab[$i]["blinds"] == "2quote; Basswood Blinds") || ($lab[$i]["blinds"] == "2quote; Basswood Blinds")){
			  		$select2 = "selected";
			  		$select1 = "";

			  }
			  
			  if( ($lab[$i]["blinds"] == "2quote; Faux Blinds") || ($lab[$i]["blinds"] == "2quote; Faux Blinds")){
			  		$select1 = "selected";
			  		$select2 = "";

			  }
		  ?>
          <td width="197"><select name="<?php echo $lab[$i]["ID"]; ?>" id="size1" onchange="valueChange(this)" >
            <option value="">--Select--</option>
            <option value="3-1/4quote Crown" <?php echo $select1; ?> >3-1/4&quot; Crown</option>
            <option value="3-1/2quote Colonial" <?php echo $select2; ?> >3-1/2&quot; Colonial</option>
            <option value="none" <?=$lab[$i]["size"] == "none" ? ' selected="selected"' : ''?> >none</option>
          </select></td>
          <td width="119">RTN Width:</td>
          <td width="168"><input name="<?php echo $lab[$i]["ID"]; ?>" id="rtn1" size="15" onchange="valueChange(this)" value="<?php echo $lab[$i]["rtn"]; ?>">
          </td>
        </tr>
      </table>
      <table width="759" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="38">Tilt:</td>
          <td width="157"><select name="<?php echo $lab[$i]["ID"]; ?>" id="tilt11" onchange="valueChange(this)" >
            <option value="">--Select--</option>
            <option value="Cord" <?=$lab[$i]["tilt1"] == "Cord" ? ' selected="selected"' : ''?> >Cord</option>
            <option value="Wand" <?=$lab[$i]["tilt1"] == "Wand" ? ' selected="selected"' : ''?> >Wand</option>
            <option value="Motor Infrared" <?=$lab[$i]["tilt1"] == "Motor Infrared" ? ' selected="selected"' : ''?> >Motor Infrared</option>
            <option value="Motor RF" <?=$lab[$i]["tilt1"] == "Motor RF" ? ' selected="selected"' : ''?> >Motor RF</option>
          </select></td>
          <td width="58"> Color:</td>
          <td width="157"><input type="text" id="tcolor1" name="<?php echo $lab[$i]["ID"]; ?>" value="<?php echo $lab[$i]["cordcolor"]; ?>" /></td>
          <td width="82">Headrail:</td>
          <td width="118"><input type="text" id="headrail1" name="<?php echo $lab[$i]["ID"]; ?>" value="<?php echo $lab[$i]["headrail"]; ?>" /></td>
        </tr>
      </table>
      <table width="759" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="38">Lift:</td>
          <td width="157"><select name="<?php echo $lab[$i]["ID"]; ?>" id="lilt11" onchange="valueChange(this)">
            <option value="Cord">Cord</option>
          </select></td>
          <td width="58"> Color:</td>
          <td width="157"><input type="text" id="lcolor1" name="<?php echo $lab[$i]["ID"]; ?>" value="<?php echo $lab[$i]["cordcolor"]; ?>" /></td>
          <td width="82">Ladder:</td>
          <td width="118"><input type="text" id="ladder1" name="<?php echo $lab[$i]["ID"]; ?>" value="<?php echo  $lab[$i]["ladder"]; ?>" /></td>
        </tr>
      </table>
      <table width="759" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="74">Control:</td>
          <td width="213"><select name="<?php echo $lab[$i]["ID"]; ?>" id="control1" onchange="valueChange(this)">
            <option value="">--Select--</option>
            <option value="L:R T:L" <?=$lab[$i]["control"] == "L:R T:L" ? ' selected="selected"' : ''?> >Lift Right/Tilt Left</option>
            <option value="L:L T:R" <?=$lab[$i]["control"] == "L:L T:R" ? ' selected="selected"' : ''?> >Lift Left/Tilt Right</option>
            <option value="L:R T:R" <?=$lab[$i]["control"] == "L:R T:R" ? ' selected="selected"' : ''?> >Lift Right/Tilt Right</option>
            <option value="L:L T:L" <?=$lab[$i]["control"] == "L:L T:L" ? ' selected="selected"' : ''?> >Lift Left/Tilt Left</option>
            <option value="Loop-Left" <?=$lab[$i]["control"] == "Loop-Left" ? ' selected="selected"' : ''?> >Loop-Left</option>
            <option value="Loop-Right" <?=$lab[$i]["control"] == "Loop-Right" ? ' selected="selected"' : ''?> >Loop-Right</option>
          </select></td>
          <td width="339">Price:
            <input type="text" id="price1" name="<?php echo $lab[$i]["ID"]; ?>"  size="10" value="<?php echo $lab[$i]["price"]; ?>"onchange="valueChange(this)"/></td>
        </tr>
      </table>
      <table width="759" border="1" style="border-color:#E2E2E2; font-weight: bold;">
        <tr>
          <td width="264"><input type="text" id="customer1" name="<?php echo $lab[$i]["ID"]; ?>"  size="30" value="<?php echo $lab[$i]["customer"]; ?>" onchange="valueChange(this)"/></td>
          <td width="62">Order</td>
          <td width="63"> <input type="text" id="index" name="<?php echo $lab[$i]["ID"]; ?>" value="<?php echo $lab[$i]["index"]; ?>"  size="3"  style="border: 0px;"/>
           </td>
          <td width="88">&nbsp;&nbsp;&nbsp;&nbsp;of</td>
          <td width="139"><input type="text" id="total" name="<?php echo $lab[$i]["ID"]; ?>" value="<?php echo $total; ?>"  size="3" style="border: 0px;"/></td>
        </tr>
      </table>
      <table width="759" border="1" style="border-color:#E2E2E2; font-weight: bold;">
	<tr>
    	<td align="right"><input type="button" id="<?php echo $lab[$i]["orderNo"] ?>" name="<?php echo $lab[$i]["ID"]; ?>" onclick="deleteblinds(this)" value="Delete" style="background-color:#4D4D4D; color:white;"/></td>
    </tr>
</table>

    </td>
  </tr>
</table>
<br />
  <?php 
			}
		}
	}
 ?>

</p>
<p></p>
<p>&nbsp;</p>
</body>
</html>
