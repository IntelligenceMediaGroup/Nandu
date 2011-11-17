<?php
$id = $_GET['q'];
$con = mysql_connect("localhost","davis","5921340318davis");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("nandu_j", $con);
mysql_query("DELETE FROM jos_rotator WHERE id='$id'");
mysql_close($con);
?>