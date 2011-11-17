<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<style>
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
<body>
<b>Gatavs labošanai</b>
<br>
<?php
$uid =  $_GET['q'];
$con = mysql_connect("localhost","davis","5921340318davis");
mysql_set_charset('utf8',$con); 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("nandu_j", $con);
$result = mysql_query("SELECT * FROM jos_piza WHERE id='$uid'");

while($row = mysql_fetch_array($result))
  {
  echo '<form name="input" action="update_piza.php" method="post">';
  echo '<input type="hidden" name="id" value="'.$row['id'].'"/><br />';
  echo 'Virsraksts (Latviski) :<br /><input type="text" name="title_lv" class="textInput" value="'.$row['title_lv'].'"/><br />';
  echo 'Virsraksts (Krieviski) :<br /><input type="text" name="title_ru" class="textInput" value="'.$row['title_ru'].'"/><br />';
  echo 'Attēls :<br /><input type="text" name="img" class="textInput" value="'.$row['img'].'"/><br />';
  echo 'Apraksts (Latviski) :<br /><textarea name="descr_lv" class="textInput" rows="5" cols="30">'.$row['descr_lv'].'</textarea><br />';
  echo 'Apraksts (Krieviski) :<br /><textarea name="descr_ru" class="textInput" rows="5" cols="30">'.$row['descr_ru'].'</textarea><br />';
  echo 'Kategorija<br>
	<select class="textInput" name="category">
	';
	if($row['category']!=''){
		if($row['category']=='1'){
			echo'
		  <option value="1" selected>pica</option>
		  <option value="2">uzkoda</option>
		  <option value="3">dzeriens</option>
			';}
		else if($row['category']=='2'){
			echo'
		  <option value="1">pica</option>
		  <option value="2" selected>uzkoda</option>
		  <option value="3">dzeriens</option>
			';}
		else{
			echo'
		  <option value="1">pica</option>
		  <option value="2">uzkoda</option>
		  <option value="3" selected>dzeriens</option>
  ';
		}
	}
	else{
	echo'
		  <option value="1">pica</option>
		  <option value="2">uzkoda</option>
		  <option value="3">dzeriens</option>
  ';}
  
  
  echo '</select><br>';
  echo '<br><fieldset>
		<legend>Lielais</legend>';
  echo 'Izmērs :<br /><input type="text" class="textInput" name="size" value="'.$row['size'].'"/><br />';
  echo 'Svars :<br /><input type="text" class="textInput" name="weight" value="'.$row['weight'].'"/><br />';
  echo 'Cena :<br /><input type="text" class="textInput" name="price" value="'.$row['price'].'"/><br />';
  echo '</fieldset><fieldset>
<legend>Mazais</legend>';
  echo 'Izmērs :<br /><input type="text" class="textInput" name="size2" value="'.$row['size2'].'"/><br />';
  echo 'Svars :<br /><input type="text" class="textInput" name="weight2" value="'.$row['weight2'].'"/><br />';
  echo 'Cena :<br /><input type="text" class="textInput" name="price2" value="'.$row['price2'].'"/><br />';
  echo '</fieldset>';
  echo '<br><input type="submit" class="buttonz" value="Saglabāt" />
</form>';
  }
?>
</body>