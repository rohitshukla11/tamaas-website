<?php
$config = include('config.php');
$oname = $_POST['owner_name'];
$buisness_name = $_POST['buisness_name'];
$products =$_POST['products'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dbHost = $config["db_host"]; 
$dbName= $config["db_name"];
$dbUser = $config["db_user"];
$dbPwd = $config["db_pass"];
$con = mysqli_connect("$dbHost","$dbUser","$dbPwd","$dbName");
$lang = $_POST['lang'];

if($lang == 'en')
 $msg = 'Thank you for Registering with Tamaaas. We will text you about our launch!';
else if($lang == 'pa')
	$msg = 'د تماس سره د ثبت كولو لپاره مننه . موژ ستاسو لپاره پيام را لي گو، خپل د شروع كولو';
else if($lang =='da')
	$msg = 'تشكر ميكنيم براي ثبت نام در تماس. ما براي شما پيام رسال مي !كنيم در باره شروع كردن' ;

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($oname) && isset($buisness_name) && isset($products) && isset($email) && isset($phone))
{
	$sql = "INSERT INTO partners (owner_name, buisness_name, products, email, phone )
	VALUES ('$oname', '$buisness_name' , '$products' ,'$email', '$phone' )";

	if (mysqli_query($con, $sql)) {
		if($lang == 'en') {
 		$msg = 'Thank you for Pre-registering with Tamaaas. We will text you about our launch!';
 	    echo "<script>alert('$msg');location.replace('http://tamaaas.com/index.html?f=1')</script>";
 	}
		else if($lang == 'pa') {
		$msg = 'د تماس سره د ثبت كولو لپاره مننه . موژ ستاسو لپاره پيام را لي گو، خپل د شروع كولو';
		echo "<script>alert('$msg');location.replace('http://tamaaas.com/Tamaaas_1_phasto.html?f=1')</script>";
	}
		else if($lang =='da') {
		$msg = 'تشكر ميكنيم براي ثبت نام در تماس. ما براي شما پيام رسال مي !كنيم در باره شروع كردن' ;
	    echo "<script>alert('$msg');location.replace('http://tamaaas.com/Tamaaas_1_dari.html?f=1')</script>";
	  }
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	mysqli_close($con);
}
?>
