<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
func();

function func()
{
	//echo "string";
	$to      = 'nihalnakade7@gmail.com';
$subject = ' sendmail test';
$message = 'If we can read this, it means that our fake Sendmail setup works!';
	if(mail($to, $subject, $message))
	{
		echo "email sent";
	}
	else
	{
		echo "error not aent";
	}
}

 ?>
</body>
</html>