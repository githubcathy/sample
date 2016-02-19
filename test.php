<html>
<script type="text/javascript">
function sendData(){
if(window.XMLHttpRequest){
xmlhttp=new XMLHttpRequest();
}else{
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){
var Ymax=document.getElementById('Ymax').value;
alert("Ymax=" + Ymax);
result=xmlhttp.responseText;
//in the html element <div id="forResult"></div>
//will be writen what you write with "echo" in your php file
//in this example, "Thank you for submiting Ymax"
document.getElementById('forResult').innerHTML=result;
}
}

xmlhttp.open("GET","testdate.php?Ymax="+Ymax,true);
xmlhttp.send();
}
</script>
<body>
Ymax: <input type="text" id="Ymax" size="15"><br>
<input type="button" value="Submit" onClick="sendData()">
<div id="forResult"></div>
</body>
</html>