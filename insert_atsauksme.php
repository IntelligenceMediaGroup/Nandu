<?php
$vards=$_GET["q1"];
$epasts=$_GET["q2"];
$telnr=$_GET["q3"];
$mpic =$_GET["q4"];
$date = date('Y-m-d');
$con = mysql_connect('localhost', 'davis', '5921340318davis');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("nandu_j", $con);
mysql_query("INSERT INTO jos_atsauksmes (vards, epasts, telnr, milpic, date)VALUES ('$vards', '$epasts', '$telnr', '$mpic', '$date')");
mysql_close($con);
?>