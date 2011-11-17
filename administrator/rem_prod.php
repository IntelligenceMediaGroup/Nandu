<?php
$uid =  $_GET['q'];
$con = mysql_connect("localhost","davis","5921340318davis");
mysql_set_charset('utf8',$con);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("nandu_j", $con);
mysql_query("DELETE FROM jos_piza WHERE id='$uid'");
mysql_close($con);
echo 'Produkts dzēsts';

?>