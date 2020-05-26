	<?php 

$email = $_POST['email'];
$name = $_POST['name'];
$mo_no = $_POST['mo_no'];
$gender = $_POST['gender'];
$password = $_POST['password'];

$con = new mysqli("localhost","root","","bank");
$query = "INSERT INTO user VALUES(NULL,'$email','$mo_no','$name','$gender','$password')";
if($con->query($query))
{
	header("location:login.php");
}
else
{
	echo mysqli_error($con);
}

 ?>