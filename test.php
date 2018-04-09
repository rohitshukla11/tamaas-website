
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
 if($details->country=='IN')
 	header("location:/index.php");
 elseif ($details->country == 'PAK') {
 	header("location:/phasto.php");
 }
 elseif ($details->country == 'AF'|| $details->country =='IRN') {
 	header("location:/dari.php");
 }
 else
 	header("location: /eng.php");
?>
