<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
if($_POST['title_lv']==''){
die('Šāda tipa ierakstu pievienot aizliegts');
}
$title_lv = $_POST['title_lv'];
$title_ru = $_POST['title_ru'];
$img = $_POST['img'];
$category = $_POST['category'];
$descr_lv = $_POST['descr_lv'];
$descr_ru = $_POST['descr_ru'];
$size =  $_POST['size'];
$weight = $_POST['weight'];
$price = $_POST['price'];
$size2 = $_POST['size2'];
$weight2 = $_POST['weight2'];
$price2 = $_POST['price2'];
$title_lv = htmlspecialchars($title_lv, ENT_QUOTES);
$title_ru = htmlspecialchars($title_ru, ENT_QUOTES);
$descr_lv = htmlspecialchars($descr_lv, ENT_QUOTES);
$descr_ru = htmlspecialchars($descr_ru, ENT_QUOTES);
echo $title_lv;
$con = mysql_connect("localhost","davis","5921340318davis");
mysql_set_charset('utf8',$con);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("nandu_j", $con);

mysql_query("INSERT INTO jos_piza SET title_lv = '$title_lv', title_ru='$title_ru', category='$category', img='$img', descr_lv='$descr_lv', descr_ru='$descr_ru', size='$size', weight='$weight', price='$price', size2='$size2', weight2='$weight2', price2='$price2'");
echo 'done';
mysql_close($con);
   header( 'Location: index.php?option=com_karlinspica#' ) ;
?>