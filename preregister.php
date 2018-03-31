<?php
$phone = $_POST['phone-full'];
$phonen = $_POST['pre_phone'];
$phone = '+'.$phone.$phonen ;
$con = mysqli_connect("localhost","root","","tamaas");
$lang = $_POST['lang'];
if($lang == 'en')
 $msg = 'Thank you for Pre-registering with Tamaaas. We will text you about our launch!';
else if($lang == 'pa')
	$msg = 'د تماس سره د ثبت كولو لپاره مننه . موژ ستاسو
لپاره پيام را لي گو، خپل د شروع كولو';
else if($lang='da')
	$msg = 'تشكر ميكنيم براي ثبت نام در تماس. ما براي شما پيام ارسال مي
!كنيم در باره شروع كردن' ;
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($phone))
{
	$sql = "INSERT INTO pre_register (phone )
	VALUES ('$phone' )";

	if (mysqli_query($con, $sql)) {
	    echo "<script>alert('$msg');location.replace('Tamaaas_1.html#')</script>";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	mysqli_close($con);
}
else
echo "nooo";
?>
