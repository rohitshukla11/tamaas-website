<?php

$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
if($details->country=='IN')
	header("location: $_SERVER['REQUEST_URI']/eng.php");
elseif ($details->country == 'PAK') {
	header("location: $_SERVER['REQUEST_URI']/phasto.php");
}
elseif ($details->country == 'AF') {
	header("location: $_SERVER['REQUEST_URI']/dari.php");
}

?>