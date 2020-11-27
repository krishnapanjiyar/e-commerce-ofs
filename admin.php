<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Log in page">
    <meta name="author" content="Hoai An Nguyen">

    <title>Organic Food Store - Log In</title>

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
                <a class="dropdown-item active" href="login.html">Log In</a>
                <a class="dropdown-item" href="registration.html">Register</a>
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
              <div style="padding: 20px 20px 10px 40px ">
                <h2>Admin Panel</h2>
              </div>
              <div style="padding: 0px 80px 60px 60px">
                <form action="/admin.php" method="post">
                  <input type="text" name="email">
                  <input type="password" name="password">
                  <input type="submit">
                </form>
                <button class="collapsible">User Information</button>
                <div class="content">
                  <table id="t01">
                    <thead>
                      <tr>
                        <th>userid</th>
                        <th>userType</th>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>password</th>
                        <th>email</th>
                        <th>streetname</th>
                        <th>city</th>
                        <th>state</th>
                        <th>zipcode</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      if ($logged_in && $results) {
                        while ($row = mysqli_fetch_assoc($results)) {
                          echo "<tr>";
                          echo "<td>" . $row["userid"] . "</td>";
                          echo "<td>" . $row["userType"] . "</td>";
                          echo "<td>" . $row["firstname"] . "</td>";
                          echo "<td>" . $row["lastname"] . "</td>";
                          echo "<td>" . $row["password"] . "</td>";
                          echo "<td>" . $row["email"] . "</td>";
                          echo "<td>" . $row["streetname"] . "</td>";
                          echo "<td>" . $row["city"] . "</td>";
                          echo "<td>" . $row["state"] . "</td>";
                          echo "<td>" . $row["zipcode"] . "</td>";
                          echo "</tr>";
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>


                <button class="collapsible">Inventory</button>
                <div class="content">
                  <table id="t01">
                    <thead>
                      <tr>
                        <th>inventoryID</th>
                        <th>productTypeID</th>
                        <th>productID</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      if ($logged_in && $results) {
                        while ($row = mysqli_fetch_assoc($results)) {
                          echo "<tr>";
                          echo "<td>" . $row["inventoryID"] . "</td>";
                          echo "<td>" . $row["productTypeID"] . "</td>";
                          echo "<td>" . $row["productID"] . "</td>";
                          echo "</tr>";
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>

                <button class="collapsible">Order Details</button>
                <div class="content">
                  <table id="t01">
                    <thead>
                      <tr>
                        <th>orderID</th>
                        <th>productID</th>
                        <th>userID</th>
                        <th>quantity</th>
                        <th>price</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      if ($logged_in && $results) {
                        while ($row = mysqli_fetch_assoc($results)) {
                          echo "<tr>";
                          echo "<td>" . $row["orderID"] . "</td>";
                          echo "<td>" . $row["productID"] . "</td>";
                          echo "<td>" . $row["userID"] . "</td>";
                          echo "<td>" . $row["quantity"] . "</td>";
                          echo "<td>" . $row["price"] . "</td>";
                          echo "</tr>";
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>

                <button class="collapsible">Order Status</button>
                <div class="content">
                  <table id="t01">
                    <thead>
                      <tr>
                        <th>orderID</th>
                        <th>userID</th>
                        <th>number_items</th>
                        <th>orderStatus</th>
                        <th>orderDate</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      if ($logged_in && $results) {
                        while ($row = mysqli_fetch_assoc($results)) {
                          echo "<tr>";
                          echo "<td>" . $row["orderID"] . "</td>";
                          echo "<td>" . $row["userID"] . "</td>";
                          echo "<td>" . $row["number_items"] . "</td>";
                          echo "<td>" . $row["orderStatus"] . "</td>";
                          echo "<td>" . $row["orderDate"] . "</td>";
                          echo "</tr>";
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>

                <button class="collapsible">Products Deatil</button>
                <div class="content">
                  <table id="t01">
                    <thead>
                      <tr>
                        <th>productID</th>
                        <th>categoryID</th>
                        <th>productName</th>
                        <th>price</th>
                        <th>quantity</th>
                        <th>inventoryDate</th>
                        <th>URL_image</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      if ($logged_in && $results) {
                        while ($row = mysqli_fetch_assoc($results)) {
                          echo "<tr>";
                          echo "<td>" . $row["productID"] . "</td>";
                          echo "<td>" . $row["categoryID"] . "</td>";
                          echo "<td>" . $row["productName"] . "</td>";
                          echo "<td>" . $row["price"] . "</td>";
                          echo "<td>" . $row["quantity"] . "</td>";
                          echo "<td>" . $row["inventoryDate"] . "</td>";
                          echo "<td>" . $row["URL_image"] . "</td>";
                          echo "</tr>";
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
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

      // Collabsible Tables
      var coll = document.getElementsByClassName("collapsible");
      var i;

      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var content = this.nextElementSibling;
          if (content.style.display === "block") {
            content.style.display = "none";
          } else {
            content.style.display = "block";
          }
        });
      }

      </script>

  </body>

</html>
