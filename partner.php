<?php
$oname = $_POST['owner_name'];
$buisness_name = $_POST['buisness_name'];
$products =$_POST['products'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$con = mysqli_connect("localhost","root","","tamaas");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($oname) && isset($buisness_name) && isset($products) && isset($email) && isset($phone))
{
	$sql = "INSERT INTO partner (owner_name, buisness_name, products, email, phone )
	VALUES ('$oname', '$buisness_name' , '$products' ,'$email', '$phone' )";

	if (mysqli_query($con, $sql)) {
	    echo "<script>alert('Thank you');location.replace('Tamaaas_1.html#')</script>";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	mysqli_close($con);
}
?>
