<!DOCTYPE html>
<style>

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
width: 450px;
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
<html>
<head>
    <link class="include" rel="stylesheet" type="text/css" href="../jquery.jqplot.min.css" />
    <link rel="stylesheet" type="text/css" href="examples.min.css" />
    <link type="text/css" rel="stylesheet" href="syntaxhighlighter/styles/shCoreDefault.min.css" />
    <link type="text/css" rel="stylesheet" href="syntaxhighlighter/styles/shThemejqPlot.min.css" />
  <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="../excanvas.js"></script><![endif]-->
    <script class="include" type="text/javascript" src="../jquery.min.js"></script>
</head>
<body>
<div align="center"><a href="index.php"><h2>Atslēgties no paneļa</h2></a></div>
<div class="leftbot">
<div id="globals" style="height:300px; width:600px;"></div>
</div>
<div class="rightbot">
<iframe src="a_list.php" frameborder="no" width="450px" height="500px" border="0px">
  <p>Your browser does not support iframes.</p>
</iframe>
</div>



<?php
$con = mysql_connect("localhost","davis","5921340318davis");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("nandu_j", $con);
$data = array();
$result = mysql_query("SELECT * FROM jos_atsauksmes ORDER BY date");
while($row = mysql_fetch_array($result))
  {
   $start = $row['date'];
   $val = $row['1'] + $row['2'] + $row['3'] + $row['4'] + $row['5'] + $row['6'] + $row['7'] + $row['8'] + $row['9'];
   $val = $val/9;
   array_push($data, $start.'\','.$val);
  }
	foreach($data as $value){
	$temp = $temp . '[\''.$value.'],';
	}
$datastream = '['. $temp. ']';
$ymax = '5';
?>

<script class="code" type="text/javascript">
$(document).ready(function(){
var ymax = <?php echo $ymax ?>;
 var line1=<?php echo $datastream ?>;
 var plot1 = $.jqplot('globals', [line1], {

      title:'"Karlīn\'s Pica" atsauksmju globālā statistika',
      axes:{
        xaxis:{
          renderer:$.jqplot.DateAxisRenderer,
          tickOptions:{
            formatString:'%b&nbsp;%#d'
          } 
        },
        yaxis:{min:0, max:ymax}
      },
      highlighter: {
        show: true,
        sizeAdjust: 7.5
      },
      cursor: {
        show: false
      }
  });
});
</script>
  


<!-- End example scripts -->

<!-- Don't touch this! -->


    <script class="include" type="text/javascript" src="../jquery.jqplot.min.js"></script>
<!-- End Don't touch this! -->

<!-- Additional plugins go here -->

    <script class="include" language="javascript" type="text/javascript" src="../plugins/jqplot.highlighter.min.js"></script>
    <script class="include" language="javascript" type="text/javascript" src="../plugins/jqplot.cursor.min.js"></script>
    <script class="include" language="javascript" type="text/javascript" src="../plugins/jqplot.dateAxisRenderer.min.js"></script>

</body>


</html>