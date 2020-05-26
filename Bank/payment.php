<?php 
session_start();
$con = new mysqli("localhost","root","","bank");
$cardno = $_POST["cardno"];
$exdate = $_POST["exdate"];
$cvv = $_POST["cvv"];
$password = $_POST["password"];
$location_from_user = $_POST["location"];
$_SESSION["userlocation"] = $location_from_user;
$query_bank = "SELECT * FROM bank_user WHERE cardno = '$cardno' and expiry_date = '$exdate' and  cvv = '$cvv' and password = '$password'";
$data_bank = $con->query($query_bank);
$result_bank = mysqli_num_rows($data_bank);
$rows_bank = $data_bank->fetch_assoc();
$verified = $rows_bank["verified"];
$loc_counter = 0;
		
	
		if ($result_bank == 1) 
		{

			/* Fetch data to calculate  average*/

				$id = $rows_bank["id"];
				$_SESSION["bankid"] = $id;
				$query= "SELECT * FROM transactions WHERE id = '$id' ORDER BY transaction_date DESC LIMIT 5";
				$avg = 0;
				$result = $con->query($query);
				$total = $_SESSION["totalpay"];
				$email = $_SESSION["useremail"];
				
				while($data = $result->fetch_assoc())
				{
					$avg = $avg + $data["amount"];
				}

				$avg = $avg/5;


				/* Fetch data for location */

				$query1 = "SELECT * FROM transactions WHERE id = '$id' ORDER BY transaction_date DESC ";
				$result1 = $con->query($query1);
				
				
				while ( $data_transaction = $result1->fetch_assoc()	 ) 
				{
					$location_from_db = $data_transaction["location"];
					if ($location_from_db == $location_from_user ) 
					{
						$loc_counter = $loc_counter + 1;
					}
				}


			/*If User Have purchased more than average send mail*/

				if (($total > ($avg + 5000)) || ($loc_counter == 0) ) 
				{
			
						$token = time().$email;
						$token = md5($token); 
						$query_varify = "UPDATE bank_user SET token = '$token' WHERE id = '$id'";
						$result_verify = $con->query($query_varify);

						if ($result_verify) 
						{
							$to      = 'nihalnakade7@gmail.com';
							$subject = 'Security ';
							$message = 'Please click the Link Below To Complete Your Payment http://localhost/Bank/verification.php?sectoken='.$token;

							if(mail($to, $subject, $message))
							{
								$query1 = "UPDATE bank_user SET verified = 0 WHERE id = '$id'";
								$result1 = $con->query($query1);
?>						
								<!DOCTYPE html>
								<html>
								<head>
									<title></title>
								</head>
								<body style="background-color: silver">
									<center><h1 style="margin-top: 300px;">We have sent an Email to you.Please Check Your Inbox</h1></center>
								
<?php
							}


							else
							{
?>
									<center>

										<h1 style="margin-top: 300px;">Something Went Wrong Please Make Payment Again</h1>

									</center>
								</body>
								</html>
<?php
							}
						}
				}

			/*Purchased In Normal Range*/

				else
				{
					echo '<script>window.location="payment_success.php"</script>';
				}

		}


		/* Card Details Are Invalid */

		else
		{
			echo '<script>alert("Invalid Card Details or Password")</script>';
			 echo '<script>window.location="payment_gateway.php"</script>';
		}
	

 ?>