<html>
<head>
<script>
function showHint(str)
{
	
		var objID = str.id;
		var labelID = str.name;
		var objValue = str.value;
		alert(objID + " " +labelID + " " +objValue);
		
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  
  		URL = "labelupdate.php?labelID="+labelID+"&objID="+objID+"&objValue="+objValue;

xmlhttp.open("GET",URL,true);
xmlhttp.send();
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
      <table width="650" border="1" style="border-color:#E2E2E2;">
        <tr>
          <td width="27"><strong>w:</strong></td>
          <td width="74"><input type="text" id="valwidth1" name="8"  size="20" value="<?php echo $lab[$i]["valwidth"]; ?>" onkeyup="showHint(this)" /></td>
          <td width="19"><strong>h:</strong></td>
          <td width="115"><input type="text" id="valheight1" name="<?php echo $lab[$i]["ID"]; ?>"  size="10" value="<?php echo $lab[$i]["valheight"]; ?>"  onChange="javascript:valueChange(this)"/></td>
          <td width="98"><strong>Val Width:</strong></td>
          <td width="107"><input type="text" id="vwidth1" name="<?php echo $lab[$i]["ID"]; ?>"  size="10" value="<?php echo $lab[$i]["vwidth"]; ?>" onChange="javascript:valueChange(this)"/></td>
          <td width="36"><strong>mt:</strong></td>
          <td width="122"><select name="<?php echo $lab[$i]["ID"]; ?>" id="mt1" onChange="javascript:valueChange(this)">
            <option value="">--Select--</option>
            <option value="IB" <?=$lab[$i]["mt"] == "IB" ? ' selected="selected"' : ''?> >IB</option>
            <option value="OB" <?=$lab[$i]["mt"] == "OB" ? ' selected="selected"' : ''?>>OB</option>
          </select></td>
        </tr>
      </table>

</form>
<p>Suggestions: <span id="txtHint"></span></p>

</body>
</html>