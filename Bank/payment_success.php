<?php 

session_start();
$total = $_SESSION["totalpay"];
$id = $_SESSION["bankid"];
$location = $_SESSION["userlocation"];
$con = new mysqli("localhost","root","","bank");
$date = date('Y/m/d');
$query = "INSERT INTO transactions VALUES('$id','$date','$total','$location',0)";
$result = $con->query($query);	
/*echo "string";*/		

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<center>
 		<h2>One More Step...</h2><br><br>
 		<h1><?php echo "$total"; ?></h1>
 		<button onclick="payfunc()" style="width: 100px; height: 40px; background-color: green; border-color: green; font-size: 20px;"><b>PAY</b></button>
 	</center>

 	<script type="text/javascript">
 		function payfunc()
 		{
 			alert("Transaction Sucessful");
 			window.location = "index.php";
 		}
 		 			
 		 
 	</script>
 </body>
 </html>