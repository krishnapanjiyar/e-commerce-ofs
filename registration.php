<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Registration page">
  <meta name="author" content="Hoai An Nguyen">

  <title>Organic Food Store - Registration</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <img src="pic/logogrape.png" alt="OFS Store logo" style="width:5%; padding: 3px 5px 3px 3px;">
      <a class="navbar-brand" href="homepage.html">Organic Food Store</a>

      <!-- Search -->
      <form class="form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>

      <!-- Navigaton tabs -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="homepage.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active" data-toggle="dropdown" href="account.html">Account</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="login.html">Log In</a>
              <a class="dropdown-item active" href="registration.html">Register</a>
              <a class="dropdown-item" href="account.html">My Account</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.html">Shopping Cart</a>
          </li>
        </ul>
    </div>
  </nav>
  <hr>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <div class="card mt-4">
          <div class="card-body">
            <div style="padding: 20px 20px 10px 40px">
              <h2>Register</h2>
            </div>

            <div style="padding: 0px 80px 40px 60px">
              <div class="Mycontainer">
                <form action="/process.php" class="needs-validation" novalidate method = "post">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4" class="control-label">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="bob@example.com" name="email" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Email is not valid.</div>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="password" placeholder="******" name="password" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                  </div>


                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="fname" class="control-label">First Name</label>
                      <input type="text" class="form-control" id="fname"  placeholder="First Name" name="firstname" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="lname" class="control-label">Last Name</label>
                      <input type="text" class="form-control" id="lname"  placeholder="Last Name" name="lastname" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="address" class="control-label">Address</label>
                    <input type="text" class="form-control" id="address"  placeholder="Street, apartment, studio, or floor" name="street" required>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity" class="control-label">City</label>
                      <input type="text" class="form-control" id="city" placeholder="San Jose" name="city" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="inputState" class="control-label">State</label>
                      <input type="text" class="form-control" id="state" placeholder="CA" name="state" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group col-md-2">
                      <label for="inputZip" class="control-label">Zip</label>
                      <input type="text" class="form-control" id="zip" placeholder="99999" name="zipcode" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="terms" required> I agree with Terms and Conditions
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Agree with Terms and Conditions</div>
                      </label>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-success">Register</button>
                </form>
              </div>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-12 -->

      <div class="col-lg-4">

      </div>
      <!-- /.col-lg-4 -->
    </div>

  </div>
  <!-- /.container -->
  <hr>
  <!-- Footer -->
  <footer class="py-2 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Organic Food Store 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    // Disable form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>

</body>

</html>
