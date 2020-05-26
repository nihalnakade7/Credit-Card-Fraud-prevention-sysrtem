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
    <link href="css/ass2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>


    <div class="container">
         <div>
          <img src="img/logo.jpg" class="img-responsive logo">
        </div>

        <nav class="navbar navbar-default">
          <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
          </div>

          <!-- navbar -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li ><a href="#">Services</a></li>
                <li><a href="#">SBI Anywhere</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Corporate Website</a></li>
                <li><a href="#">SBMOPS</a></li>
                <li><a href="#">SB collect</a></li>
                <li><a href="#">Electora; Bond</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">mCASH</a></li>
                <li><a href="#">NPS</a></li>
                <li><a href="#">Bill Pay</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
         </nav>

         <!--  -->

         <div class="jumbotron">
            <h2>Personal Login</h2>
            
            <p><a class="btn btn-primary btn-md" href="login.php" role="button">Login</a></p>
            <p>SBI's internet banking portal provides personal banking services that gives you complete control over all your banking demands online.</p>

            <p>Don't have an account</p>
            <p><a class="btn btn-primary btn-md" href="register.php" role="button">Sign In</a></p>
        </div>

        <!-- Slider -->

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          </ol>

  <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img/banner1.jpg" class="img-responsive">
              <div class="carousel-caption">
                ...
              </div>
            </div>

            <div class="item">
              <img src="img/banner2.jpg" class="img-responsive">
              <div class="carousel-caption">
                ...
              </div>
            </div>

            <div class="item">
              <img src="img/banner5.jpg" class="img-responsive">
              <div class="carousel-caption">
                ...
              </div>
            </div>
            <div class="item">
              <img src="img/banner4.jpg" class="img-responsive">
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
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>