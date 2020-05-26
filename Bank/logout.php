<?php 

session_start();
session_unset($_SESSION['useremail']);
session_unset($_SESSION['userid']);
session_unset($_SESSION['totalpay']);
session_destroy();
header("location:login.php");

 ?>