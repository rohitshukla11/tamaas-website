<?php
$config = include('config.php');
$phone = $_POST['phone-full'];
$phonen = $_POST['pre_phone'];
$phone = '+'.$phone.$phonen ;
$dbHost = $config["db_host"]; 
$dbName= $config["db_name"];
$dbUser = $config["db_user"];
$dbPwd = $config["db_pass"];
$con = mysqli_connect("$dbHost","$dbUser","$dbPwd","dbName");
$lang = $_POST['lang'];


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($phone))
{
	$sql = "SELECT id FROM pre_register WHERE phone='$phone'";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) {
		if($lang == 'en') {
		echo "<script>alert('Thank You! You are already registered.');location.replace('http://tamaaas.com/index.html?f=1')</script>";
		}
		else if($lang == 'pa') {
		$msg1 = 'له تاسو مننه! تاسو لا دمخه ثبت شوی یاست.';
 	    echo "<script>alert('$msg1');location.replace('http://tamaaas.com/Tamaaas_1_phasto.html?f=1')</script>";
 	}
     else if($lang =='da') {
		$msg1 = 'متشکرم! شما قبلا ثبت نام کرده اید' ;
	    echo "<script>alert('$msg1');location.replace('http://tamaaas.com/Tamaaas_1_dari.html?f=1')</script>";
	  }
	}

    else {
	$sql1 = "INSERT INTO pre_register (phone )
	VALUES ('$phone' )";

	if (mysqli_query($con, $sql1)) {
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
}
else
echo "nooo";
?>
