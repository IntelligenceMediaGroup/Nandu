<?php
//This script is created by hotwebtools.com
//You can remain use this free service as long as you retain the credit link
//As we had spent hours on building this script for you, please respect our effort
//Thank you --- David Ausman 'Hotwebtools.com'

$mymail = 'nandu@inbox.lv';
$cc = 'Form submitted from your website';
$BoDy = ' ';
$FrOm = 'FROM:' .$_POST['t1'];
$FrOm .= 'Reply-To:' .$_POST['t1'];
$FrOm .= 'X-MAILER: PHP'.phpversion();
$BoDy .= 'Tavs vârds: ';
$BoDy .= $_POST['t1'];
$BoDy .= "\n";
$BoDy .= 'E-pasts: ';
$BoDy .= $_POST['t2'];
$BoDy .= "\n";
$BoDy .= 'Telefona numurs: ';
$BoDy .= $_POST['t3'];
$BoDy .= "\n";
$BoDy .= 'Tava mîïâkâ pica: ';
$BoDy .= $_POST['t4'];
$BoDy .= "\n";
$BoDy .= 'Biezums: ';
$BoDy .= $_POST['t5'];
$BoDy .= "\n";
$BoDy .= 'Garðas nianses: ';
$BoDy .= $_POST['t6'];
$BoDy .= "\n";
$BoDy .= 'Piegâde: ';
$BoDy .= $_POST['t7'];
$BoDy .= "\n";
$BoDy .= ': ';
$BoDy .= $_POST['t8'];
$BoDy .= "\n";
$send = mail("$mymail", "$cc", "$BoDy", "$FrOm");
///Redirect user to your homepage....
if($send)
{
echo '<html><head>';
echo '<meta http-equiv="refresh" content="0;URL=index.php">';
echo '</head><body>Email send....';
echo '</body></html>';
}
?>
