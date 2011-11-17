<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript">
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
xmlhttp.open("GET","rem_ad.php?q="+str,true);
xmlhttp.send();
//location.reload(true);
}
</script>
<?php
					$con = mysql_connect("localhost","davis","5921340318davis");
					mysql_set_charset('utf8',$con);
					mysql_select_db("nandu_j", $con);
					$result = mysql_query("SELECT * FROM jos_rotator ORDER BY id DESC");
					while($row = mysql_fetch_array($result))
					  {
					  echo '<div id="existing_ads">';
					  echo '<img src="'.$row['img'].'" width="200px" height="80px" style="margin-right: 6px;" align="left"/>';
					  echo '<strong>'.$row['title'].'</strong><br>';
					  echo $row['description'];
					  echo '<br>URL: ' .$row['link'] . '</div><br>';
					  echo '<div id="rem"><a onclick="advRem(\''.$row['id'].'\')"><img src="rem.png" alt="Remove"></a></div>';
					  }
?>