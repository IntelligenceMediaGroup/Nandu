<?php
$aResponse['error'] = false;
$aResponse['message'] = '';

// ONLY FOR THE DEMO, YOU CAN REMOVE THIS VAR
	$aResponse['server'] = ''; 
// END ONLY FOR DEMO
	
	
if(isset($_POST['action']))
{
	if(htmlentities($_POST['action'], ENT_QUOTES, 'UTF-8') == 'rating')
	{
		/*
		* vars
		*/
		$id = intval($_POST['idBox']);
		$rate = floatval($_POST['rate']);
		
		// YOUR MYSQL REQUEST HERE or other thing :)
		/*
		*
		*/
		
		// if request successful
		$success = true;
		// else $success = false;
		
		
		// json datas send to the js file
		if($success)
		{
			
			$aResponse['message'] = 'Your rate has been successfuly recorded. Thanks for your rate :)';
			
			// ONLY FOR THE DEMO, YOU CAN REMOVE THE CODE UNDER
				$aResponse['server'] = '<strong>Success answer :</strong> Success : Your rate has been recorded. Thanks for your rate :)<br />';
				$aResponse['server'] .= '<strong>Rate received :</strong> '.$rate.'<br />';
				$aResponse['server'] .= '<strong>ID to update :</strong> '.$id;
			// END ONLY FOR DEMO
				
			
			echo json_encode($aResponse);
			insertDB($rate, $id);
		}
		else
		{
			$aResponse['error'] = true;
			$aResponse['message'] = 'An error occured during the request. Please retry';
			
			// ONLY FOR THE DEMO, YOU CAN REMOVE THE CODE UNDER
				$aResponse['server'] = '<strong>ERROR :</strong> Your error if the request crash !';
			// END ONLY FOR DEMO
			
			
			echo json_encode($aResponse);
		}
	}
	else
	{
		$aResponse['error'] = true;
		$aResponse['message'] = '"action" post data not equal to \'rating\'';
		
		// ONLY FOR THE DEMO, YOU CAN REMOVE THE CODE UNDER
			$aResponse['server'] = '<strong>ERROR :</strong> "action" post data not equal to \'rating\'';
		// END ONLY FOR DEMO
			
		
		echo json_encode($aResponse);
	}
}
else
{
	$aResponse['error'] = true;
	$aResponse['message'] = '$_POST[\'action\'] not found';
	
	// ONLY FOR THE DEMO, YOU CAN REMOVE THE CODE UNDER
		$aResponse['server'] = '<strong>ERROR :</strong> $_POST[\'action\'] not found';
	// END ONLY FOR DEMO
	
	
	echo json_encode($aResponse);
}
function insertDB($rate, $piza_id){
$con = mysql_connect("localhost","davis","5921340318davis");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("nandu_j", $con);
	
if($piza_id == '1' || $piza_id == '2' || $piza_id == '3' || $piza_id == '4' || $piza_id == '5' || $piza_id == '6' || $piza_id == '7' || $piza_id == '8' || $piza_id == '9'){
							$result2 = mysql_query("SELECT * FROM jos_atsauksmes ORDER BY id DESC LIMIT 0,1");
							while($row2 = mysql_fetch_array($result2))
							  {
							  $lastid = $row2['id'];
							  }
			mysql_query("UPDATE `jos_atsauksmes` SET `$piza_id`='$rate' WHERE id = '$lastid'");
			}
else{
			if(isset($_COOKIE["piza_vote"])&& $_COOKIE["piza_vote"]==$piza_id){
			}
			else{
			mysql_query("INSERT INTO jos_rate (pid, rate)VALUES ('$piza_id', '$rate')");
			}
		$expire=time()+60*60*24;
		setcookie("piza_vote", $piza_id, $expire);
}
mysql_close($con);
}