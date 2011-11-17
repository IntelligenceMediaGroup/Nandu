<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="preview.css"/>
	<link rel="stylesheet" type="text/css" href="wt-rotator.css"/>
	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.wt-rotator.min.js"></script>    
	<script type="text/javascript" src="js/preview.min.js"></script>
    <!--[if lt IE 9]>
  	<style>
    	.panel {
	    	border-left:1px solid #444;
			border-right:1px solid #444;
        }
    </style>
    <![endif]-->    
</head>
<body>
 	<div class="container">
        <div class="wt-rotator">
            <div class="screen">
                <noscript><img src="images/triworks_abstract17.jpg"/></noscript>
            </div>
            <div class="c-panel">
                <div class="thumbnails">
	
                    <ul>
					<?php
					$con = mysql_connect("localhost","davis","5921340318davis");
						if (!$con)
						  {
						  die('Could not connect: ' . mysql_error());
						  }
					mysql_set_charset('utf8',$con); 
					mysql_select_db("nandu_j", $con);
					
					$result = mysql_query("SELECT * FROM jos_rotator ORDER BY id DESC LIMIT 5");
					while($row = mysql_fetch_array($result))
					  {
					  if($row['link']=='http://'){
					  echo '<li>
                            <a href="'.$row['img'].'" title="'.$row['title'].'"><img src="'.$row['img'].'"/></a>
                      
                            <div style="left:5px; top:94px; width:336px; height:0;"> 
                            	<h1>'. $row["title"] . '</h1>
                                '. $row["description"] . ' </div>
                        </li>';
					  }
					  else{
					  echo '<li>
                            <a href="'.$row['img'].'" title="'.$row['title'].'"><img src="'.$row['img'].'"/></a>
                            <a href="'. $row["link"] . '" target="_blank"></a>                        
                            <div style="left:5px; top:94px; width:336px; height:0;"> 
                            	<h1>'. $row["title"] . '</h1>
                                '. $row["description"] . ' </div>
                        </li>';
						}
					  }
					?>

                    </ul>

                </div>     
            </div>
        </div>	
</body>    
</html>
