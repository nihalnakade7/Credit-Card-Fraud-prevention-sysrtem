<?php 

$email = $_POST['email'];
$password = $_POST['password'];

$con = new mysqli("localhost","root","","bank");

$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
$result = $con->query($query);
$data = mysqli_num_rows($result);
$mulrows = $result->fetch_assoc();
$id = $mulrows['id'];
$entry = $mulrows['entry'];

if($data == 1)
{
	
	session_start();
	$_SESSION["userid"] = $id;
	$_SESSION["useremail"] = $email;
	/*echo "session set";*/
	header("location:index.php");
	
	
}
else
{
   echo "Invalid username and Password"; 
}
 ?>
