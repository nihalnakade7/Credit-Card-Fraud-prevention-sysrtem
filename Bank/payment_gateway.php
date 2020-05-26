
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Payment Gateway
  </title>
  <!-- CSS Files -->
  <link href="css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="bg-default">
  <div class="main-content">
  
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Make Payment Here!</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            
            <div class="card-body px-lg-5 py-lg-5">
              
              <form role="form" action="payment.php" method="post">

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <input class="form-control" placeholder="Card No" type="number" name="cardno">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <input class="form-control" placeholder="Expiry Date" type="number" name="exdate">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <input class="form-control" placeholder="CVV" type="number" name="cvv">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <input class="form-control" placeholder="Password" type="password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                   Location: <select name="location">
                      <option >Select City</option>
                      <option value="Nagpur">Nagpur</option>
                      <option value="Mumbai">Mumbai</option>
                      <option value="Pune">Pune</option>
                      <option value="Chandrapur">Chandrapur</option>
                      <option value="Amravati">Amravati</option>
                    </select>
                  </div>
                </div>         
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Pay</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  </div>
  <!--   Core   -->
  <script src="assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
 
</body>

</html>