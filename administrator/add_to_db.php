<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
$title = $_GET['t_name'];
$descr = $_GET['descr'];
$img =  $_GET['image'];
$url =  $_GET['url'];
$con = mysql_connect("localhost","davis","5921340318davis");
mysql_set_charset('utf8',$con);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("nandu_j", $con);
$title = htmlspecialchars($title, ENT_QUOTES);
$descr = htmlspecialchars($descr, ENT_QUOTES);
$img = htmlspecialchars($img, ENT_QUOTES);
echo $descr;
mysql_query("INSERT INTO `jos_rotator` (`title`, `description`, `img`, `link`) VALUES ('$title', '$descr', '$img', '$url')");
mysql_close($con);
?>