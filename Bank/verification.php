<?php 
session_start();
$con = new mysqli("localhost","root","","bank");
$token = $_GET["sectoken"];
$id  = $_SESSION["bankid"];
$query = "SELECT * FROM bank_user WHERE id = '$id' ";
$result = $con->query($query);
$data = $result->fetch_assoc();
$original_token = $data["token"];
/*echo "$original_token";
echo "<br>";
echo "$token";*/
if ($token == $original_token) 
{
	$query1 = "UPDATE bank_user SET verified = 1 WHERE id = '$id'";
	$result1 = $con->query($query1);
	echo '<script>alert("Veified Successfully")</script>';
	echo '<script>window.location="payment_success.php"</script>';
}
else
{
	echo '<script>alert("Token Might be expired")</script>';
	echo '<script>window.location="payment.php"</script>';
}

 ?>