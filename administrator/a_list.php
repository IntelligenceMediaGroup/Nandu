<style>
body{
font-size: 12px;
}
.leftbot{
float: left;
width: 628px;
border: 1px solid #ccc;
padding: 10px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -khtml-border-radius: 3px;
    border-radius: 3px;
}
.rightbot{
width: 400px;
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
width: 250px;
height: 100px;
margin-bottom: 10px;
}
.textInput{
    font-family: Arial, Verdana;
    font-size: 15px;
    padding: 5px;
    border: 1px solid #b9bdc1;
    width: 200px;
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




.openDiv {
width:370px;    
border: 1px solid #ccc;
padding: 10px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -khtml-border-radius: 3px;
    border-radius: 3px;
float: left;
margin-left: 3px;
margin-bottom: 5px;

   }
   .open {
   


   }
 

   

   

</style>

<script type="text/javascript">

   function show($id)
   {
    var
     $elements = document.getElementsByTagName('div'),
     $i;

    for ($i = 0; $i < $elements.length; $i++){
     if ($elements[$i].className === 'open') {
      $elements[$i].style.display = ($elements[$i].id == $id && $elements[$i].style.display != 'block') ? 'block' : 'none';
     }
    }
   }

  </script>
  <?php
$con = mysql_connect("localhost","davis","5921340318davis");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
					mysql_set_charset('utf8',$con);
mysql_select_db("nandu_j", $con);

$result = mysql_query("SELECT * FROM jos_atsauksmes ORDER BY id DESC");
while($row = mysql_fetch_array($result))
  {
  echo '<div class="openDiv">';
  $piza = $row['milpic'];
  echo '<div href="#" onclick="show('.$row['id'].');">'.$row['vards'].'</div>';
  echo '<div class="open" id="'.$row['id'].'">E-Pasts: '.$row['epasts'].'<br>Tel. Nr: '. $row['telnr'] . '<br>';
			$result2 = mysql_query("SELECT * FROM jos_piza WHERE id='$piza'");
					  while($row2 = mysql_fetch_array($result2))
						{
					   echo 'Mīļākā pica: ' .$row2['title_lv'].'<br><br>';
						}
				echo '<h4>Klientu apkalpošana</h4>';
				$i = 0;
					while($i<=$row['1']){
									echo '<img src="star.jpg" alt="novertejums" align="left" />';
									$i=$i+1;
									}
									echo '<br>';
				echo '<h4>Papildus piedāvājumi</h4>';
								$i = 0;
					while($i<=$row['2']){
									echo '<img src="star.jpg" alt="novertejums" align="left" />';
									$i=$i+1;
									}
									echo '<br>';
				echo '<h4>Piegāde</h4>';
								$i = 0;
					while($i<=$row['3']){
									echo '<img src="star.jpg" alt="novertejums" align="left" />';
									$i=$i+1;
									}
									echo '<br>';
				echo '<h4>Vizuālais izskats</h4>';
								$i = 0;
					while($i<=$row['4']){
									echo '<img src="star.jpg" alt="novertejums" align="left" />';
									$i=$i+1;
									}
									echo '<br>';
				echo '<h4>Smarža</h4>';
								$i = 0;
					while($i<=$row['5']){
									echo '<img src="star.jpg" alt="novertejums" align="left" />';
									$i=$i+1;
									}
									echo '<br>';
				echo '<h4>Garšvielas</h4>';
								$i = 0;
					while($i<=$row['6']){
									echo '<img src="star.jpg" alt="novertejums" align="left" />';
									$i=$i+1;
									}
									echo '<br>';
				echo '<h4>Sulīgums</h4>';
								$i = 0;
					while($i<=$row['7']){
									echo '<img src="star.jpg" alt="novertejums" align="left" />';
									$i=$i+1;
									}
									echo '<br>';
				echo '<h4>Biezums</h4>';
								$i = 0;
					while($i<=$row['8']){
									echo '<img src="star.jpg" alt="novertejums" align="left" />';
									$i=$i+1;
									}
									echo '<br>';
				echo '<h4>Sastāvdaļas</h4>';
								$i = 0;
					while($i<=$row['9']){
									echo '<img src="star.jpg" alt="novertejums" align="left" />';
									$i=$i+1;
									}
									echo '<br>';
				
  echo '</div></div>';
  }
?><script type="text/javascript">show('');</script>