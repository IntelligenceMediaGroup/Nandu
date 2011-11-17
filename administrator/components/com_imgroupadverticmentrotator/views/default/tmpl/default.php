<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> 
<?php
include('db_solo.php');
?>
<style>
#existing_ads{
height: 80px;
width: 650px;
border: 1px solid #e0e0e0;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    border-radius: 2px;
}
#ex_ads{
float: left;
border: 1px solid #e0e0e0;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    border-radius: 2px;
	padding: 10px;
margin-right: 10px;
margin-left: 10px;
}
.new_ad{
border: 1px solid #e0e0e0;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    border-radius: 2px;
	float: right;
	width: 480px;
	padding: 10px;
}
#rem{
position: relative;
left: -10px;
top: -102px;
}
</style>
<h1>Intelligence Media Group Reklāmu rotācijas panelis</h1>
<br>
<center><h1><a href="index.php">Atgriesties panelī</a></h1></center>

<div align="center" id="txtHint"></div>
<div id="ex_ads"><center>Tiek ielādēti dati no servera...<br>Lūdzu uzgaidiet.</center></div>
<div class="new_ad">
<h3>Pievienot jaunu reklāmu.</h3>
<form>
<strong>Reklāmas virsraksts</strong><br>
 <input type="text" name="t_name" size="60"/><br>
<strong>Īss apraksts</strong><br>
<textarea name="descr" rows="5" cols="60"></textarea><br>
<strong>Bildes URL</strong><br>
 <input type="text" name="image" size="60"/><br>
<strong>Adresāts</strong><br>
 <input type="text" name="url" value="http://"size="60"/><br>
 <br>
 <input type="button" onclick="showUser(t_name.value, descr.value, image.value, url.value)" value="Publicēt" />
 </form>
</div>
<script type="text/javascript">
function showUser(str, str2, str3, str4)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","add_to_db.php?t_name="+str+"&descr="+str2+"&image="+str3+"&url="+str4,true);
xmlhttp.send();
}

function advRem(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","rem_ad.php?id="+str,true);
xmlhttp.send();
location.reload(true);

}
</script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#ex_ads').load('ads.php').fadeIn("slow");
}, 1500); // refresh every 10000 milliseconds
</script>