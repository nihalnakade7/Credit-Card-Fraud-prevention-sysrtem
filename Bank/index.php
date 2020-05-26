  <?php
session_start();
$con  = new mysqli("localhost","root","","bank");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index_style.css" rel="stylesheet">

  </head>
  <body>

  	<nav class="navbar">
  		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      
		      <form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control searchf" placeholder="Search For Products,Brands and more..">
		        </div>
		      </form>

		      <ul class="nav navbar-nav navbar-right">
		        <?php 
		            if (isset($_SESSION["useremail"]) && !empty($_SESSION['useremail'])) 
		            {
		         ?>
		        <li><a href="checkout.php">checkout</a></li>
		        <li><a href="logout.php">Log Out</a></ li>
		          <?php 
		            }
		            else
		            { 
		          ?>
		         <li><a href="login.php">Login</a></li>
		         <li><a href="register.php">Register</a></li>
		          <?php 
		              } 
		          ?>
      		</ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
	</nav>

<!--  Second Navigation Bar -->
	<nav class="navbar  secnav">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      </ul>
	      <ul class="nav navbar-nav navbar-right">   
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<!-- Banner Section Stats -->

	<div class="container">

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/banner1.png" class="bannerimg">
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/banner1.png" class="bannerimg" >
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/banner1.png" class="bannerimg" >
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div>
		    ...
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

	</div>

	<!-- Banner Section Ends -->


<div class="container products">

<?php 
  
$query = "SELECT * FROM PRODUCTS ORDER BY id";
$result = $con->query($query); 
if (mysqli_num_rows($result) > 0) 
{
    while ($data =  $result->fetch_assoc()) 
    {
?>
<div class="col-md-3">
  <form method="post" action="additem.php?action=add&id=<?php echo $data["id"]; ?>">
    
    <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height: 400px; width: 300px;" align="center">  

        <div style="height: 200px; width: 200px; border:1px solid #333;"><img style="height: 195px;" src="<?php echo $data["image"]; ?>" class="img-responsive" /></div><br />  
        <h4 class="text-info"><?php echo $data["name"]; ?></h4>  
        <h4 class="text-danger">RS <?php echo $data["price"]; ?></h4>  
        <input type="text" name="quantity" class="form-control" value="1" />  
        <input type="hidden" name="hidden_name" value="<?php echo $data["name"]; ?>" />  
        <input type="hidden" name="hidden_price" value="<?php echo $data["price"]; ?>" />  
        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  

    </div> 

  </form>
</div>
<?php 
    }
}
?>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>