<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script language="javascript"> 
<!--
var state = 'none';

function showhide(layer_ref) {

if (state == 'block') { 
state = 'none'; 
} 
else { 
state = 'block'; 
} 
if (document.all) { //IS IE 4 or 5 (or 6 beta) 
eval( "document.all." + layer_ref + ".style.display = state"); 
} 
if (document.layers) { //IS NETSCAPE 4 or below 
document.layers[layer_ref].display = state; 
} 
if (document.getElementById &&!document.all) { 
hza = document.getElementById(layer_ref); 
hza.style.display = state; 
} 
} 
//--> 
</script> 
<script type="text/javascript">
function editProd(str)
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
xmlhttp.open("GET","edit_prod.php?q="+str,true);
xmlhttp.send();
}
function remProd(str)
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
	location.reload(true);
    }
  }
xmlhttp.open("GET","rem_prod.php?q="+str,true);
xmlhttp.send();

}
</script>
<style>
#leftside{
float: left;
width: 500px;
border: 1px solid #ccc;
padding: 10px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -khtml-border-radius: 3px;
    border-radius: 3px;
}
#rightside{
width: 500px;
border: 1px solid #ccc;
padding: 10px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -khtml-border-radius: 3px;
    border-radius: 3px;
float: left;
margin-left: 20px;
}
.sexy_line { 
    margin: 0px 0;
    height: 1px;
    border: 0;
    background: black;
    background: -webkit-gradient(linear, 0 0, 100% 0, from(white), to(white), color-stop(50%, grey));
}
#button{
border: 1px solid #B94B00;
background-color: #EE8225;
background-image: url('images/bg.png');
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -khtml-border-radius: 4px;
    border-radius: 4px;
	padding: 3px;
	color: #fff;
	font-weigt: bold;
	width: 60px;
	margin: 5px;
	float: left;

}
#button a:hover{
cursor:default;
}
h3{
color: #EE8225;
}
h5{
color: #1d1d1d;
}
.head{
background-color: #ccc;
background-image: url('images/kp.jpg');
width: 450px;
height: 100px;
margin-bottom: 10px;
}
.textInput{
    font-family: Arial, Verdana;
    font-size: 15px;
    padding: 5px;
    border: 1px solid #b9bdc1;
    width: 300px;
    color: #797979;
	border: 1px solid #ccc;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -khtml-border-radius: 3px;
    border-radius: 3px;
    }
	.buttonz{
border: 1px solid #B94B00;
background-color: #EE8225;
background-image: url('images/bg.png');
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -khtml-border-radius: 4px;
    border-radius: 4px;
	padding: 3px;
	color: #fff;
	font-weigt: bold;
	width: 60px;
	margin: 5px;
	float: left;

}
.buttonz a:hover{
cursor:default;
}
</style>
<?php
defined('_JEXEC') or die('Restricted access');
JToolBarHelper::title(JText::_('Karlins Pica'), 'generic.png');
?>
<?php
$con = mysql_connect("localhost","davis","5921340318davis");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("nandu_j", $con);
?>
<div class="head"></div>
<?php
echo '<div id="leftside">';
echo '<h3>Picas</h3><hr class="sexy_line" />';
$result = mysql_query("SELECT * FROM jos_piza where category = 1");

while($row = mysql_fetch_array($result))
  {
   echo '<a href="#" onclick="showhide(\''.$row['id'].'\');"><h5>'.$row['title_lv'].'</h5></a>'; 
	echo '<div style="display: block; width: 100%; border: 1px solid #e0e0e0;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -khtml-border-radius: 3px;
    border-radius: 3px;
		height: 104px;
	display: none;"
	id="'.$row['id'].'">';
	echo '<img src="'.$row['img'].'" width="95px" height="95px" align="left" style="padding: 4px;">';
	echo $row['descr_lv']."<br><br> Izmers L: ".$row['size'].' Svars L: '.$row['weight'].' Cena L: '.$row['price'];
	echo "<br> Izmers M: ".$row['size2'].' Svars M:'.$row['weight2'].' Cena M: '.$row['price2'];
	echo '<div align="right"><div id="button" align="center"><a onclick="editProd('.$row['id'].')">Labot</a></div><div id="button" align="center"><a onclick="remProd('.$row['id'].')">Dzēst</a></div></div>';
	echo '</div>';
  }
 echo '<h3>Uzkodas</h3><hr class="sexy_line" />';
$result = mysql_query("SELECT * FROM jos_piza where category = 2");

while($row = mysql_fetch_array($result))
  {
   echo '<a href="#" onclick="showhide(\''.$row['id'].'\');"><h5>'.$row['title_lv'].'</h5></a>'; 
	echo '<div style="display: block; width: 100%; border: 1px solid #e0e0e0;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -khtml-border-radius: 3px;
    border-radius: 3px;
		height: 104px;
	display: none;"
	id="'.$row['id'].'">';
	echo '<img src="'.$row['img'].'" width="95px" height="95px" align="left" style="padding: 4px;">';
	echo $row['descr_lv']."<br> Izmers L: ".$row['size'].' Svars L: '.$row['weight'].' Cena L: '.$row['price'];
	echo '<br>';
	echo "<br> Izmers M: ".$row['size2'].' Svars M: '.$row['weight2'].' Cena M: '.$row['price2'];
		echo '<div align="right"><div id="button" align="center"><a onclick="editProd('.$row['id'].')">Labot</a></div><div id="button" align="center"><a onclick="remProd('.$row['id'].')">Dzēst</a></div></div>';
		echo '</div>';
  }
  echo '<h3>Dzerieni</h3><hr class="sexy_line" />';
$result = mysql_query("SELECT * FROM jos_piza where category = 3");

while($row = mysql_fetch_array($result))
  {
   echo '<a href="#" onclick="showhide(\''.$row['id'].'\');"><h5>'.$row['title_lv'].'</h5></a>'; 
	echo '<div style="display: block; width: 100%; border: 1px solid #e0e0e0;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -khtml-border-radius: 3px;
    border-radius: 3px;
		height: 104px;
	display: none;"
	id="'.$row['id'].'">';
	echo '<img src="'.$row['img'].'" width="95px" height="95px" align="left" style="padding: 4px;">';
	echo $row['descr_lv']."<br> Izmers L: ".$row['size'].' Svars L: '.$row['weight'].' Cena L: '.$row['price'];
	echo '<br>';
	echo "<br> Izmers M: ".$row['size2'].' Svars M: '.$row['weight2'].' Cena M: '.$row['price2'];
		echo '<div align="right"><div id="button" align="center"><a onclick="editProd('.$row['id'].')">Labot</a></div><div id="button" align="center"><a onclick="remProd('.$row['id'].')">Dzēst</a></div></div>';
		echo '</div>';
  }
 echo '</div>';
?>
<div id="rightside">
<div id="txtHint">
<?php
  echo '<form name="input" action="add_product.php" method="post">';
  echo 'Virsraksts (Latviski) :<br /><input type="text" name="title_lv" class="textInput" value=""/><br />';
  echo 'Virsraksts (Krieviski) :<br /><input type="text" name="title_ru" class="textInput" value=""/><br />';
  echo 'Attēls :<br /><input type="text" name="img" class="textInput" value=""/><br />';
  echo 'Apraksts (Latviski) :<br /><textarea name="descr_lu" class="textInput" rows="5" cols="30"></textarea><br />';
  echo 'Apraksts (Krieviski) :<br /><textarea name="descr_ru" class="textInput" rows="5" cols="30"></textarea><br />';
  echo 'Kategorija<br>
	<select class="textInput" name="category">
  <option value="1">pica</option>
  <option value="2">uzkoda</option>
  <option value="3">dzeriens</option>
	</select><br>';
  echo '<br><fieldset>
		<legend>Lielais</legend>';
  echo 'Izmērs :<br /><input type="text" class="textInput" name="size" value=""/><br />';
  echo 'Svars :<br /><input type="text" class="textInput" name="weight" value=""/><br />';
  echo 'Cena :<br /><input type="text" class="textInput" name="price" value=""/><br />';
  echo '</fieldset><fieldset>
<legend>Mazais</legend>';
  echo 'Izmērs :<br /><input type="text" class="textInput" name="size2" value=""/><br />';
  echo 'Svars :<br /><input type="text" class="textInput" name="weight2" value=""/><br />';
  echo 'Cena :<br /><input type="text" class="textInput" name="price2" value=""/><br />';
  echo '</fieldset>';
  echo '<br><input type="submit" class="buttonz" value="Saglabāt" />
</form>';
?>
</div>
</div>