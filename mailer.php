<style>
body{
background-color: #f2f2f2;
color: #1d1d1d;
font-size: 11px;
}
</style>
<?php session_start();
if(isset($_POST['Submit'])) {   if( $_SESSION['chapcha_code'] == $_POST['chapcha_code'] && !empty($_SESSION['chapcha_code'] ) ) {
$youremail = 'stegmanis@gmail.com';
$fromsubject = 'Nandu Centrs Web';
$title = $_POST['title'];
$fname = $_POST['fname'];
$mail = $_POST['mail'];
$subject = $_POST['subject']; 
$message = $_POST['message']; 
	$to = $youremail; 
	$mailsubject = 'Masage recived from'.$fromsubject.' Contact Page';
	$body = $fromsubject.'
	
	The person that contacted you is  '.$fname.'
	 E-mail: '.$mail.'
	 Subject: '.$subject.'
	
	 Message: 
	 '.$message.'
	
	|---------END MESSAGE----------|'; 
echo "<center>Paldies Jūsu ziņa ir nosūtīta. Ar jums sazināsies tuvākajā laikā uz norādīto epasta adresi.<br/>Doties atpakaļ uz mājaslapu <a href='index.php'>Nandu Centrs</a></center>"; 
								mail($to, $subject, $body);
		unset($_SESSION['chapcha_code']);
   } else {
		echo 'Sorry, you have provided an invalid security code';
   }
 } else { 
echo "You must write a message. </br> Please go to <a href='/contact.php'>Contact Page</a>"; 
}
?> 