<?php
  //if (isset($_GET['ID'])) {
    // create connection
    $conn = mysqli_connect("localhost", "root", "", "ofs");
    // check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    //$sql = "SELECT * FROM productDetail where productCategory = 'meat'";
    $sql = "SELECT * FROM `productdetail` WHERE productID ='$ID' ";
    $result = mysqli_query($conn, $sql) or die ("Bad Query: $sql");
    $row = mysqli_fetch_array($result);

    $productName = $row['productName'];
    $price = $row['price'];
    $imageurl = $row['URL_image'];

  //}
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="item page">
  <meta name="author" content="Hoai An Nguyen">

  <title>Organic Food Store - Organic Bananas</title>

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
          <li class="nav-item active">
            <a class="nav-link" href="homepage.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="account.html">Account</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="login.html">Log In</a>
              <a class="dropdown-item" href="registration.html">Register</a>
              <a class="dropdown-item" href="account.html">Account</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
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

      <div class="col-lg-8">

        <div class="card mt-4">

          <img class="card-img-top" src="<?php echo $imageurl; ?>" alt="" style="width:60%; margin-left: auto; margin-right: auto;">
          <div class="card-body">
            <h3 class="card-title"><?php  echo $productName;  ?></h3>
            <p class="card-text"><?php  echo $productName; ?>, a 100% organic food.
            <img class="img-fluid" src="https://drive.google.com/thumbnail?id=1l11r091LAfDqBLT6TOtNMakWGi6EKRpI" alt="" style="width:70%; margin-left: auto; margin-right: auto;">
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Reviews
          </div>
          <div class="card-body">
            <p>Great Value!</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Taste great. They are a little green when they arrive, but ripen in couple days.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Seem fresh.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

      <div class="col-lg-4">
        <div style="padding: 20px">
          <p><h4><?php echo $productName; ?></h4></p>
          <h4>$<?php echo $price; ?></h4>
          <p><span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
          4.0 stars</p>
          <h5>Quantity</h5>
          <form action="/action_page.php">
             <select name="quantity" class="custom-select mb-3">
               <option selected>1</option>
               <option value="1">2</option>
               <option value="2">3</option>
               <option value="3">4</option>
             </select>
             <form action="" method="post">
               <button type="submit" class="btn btn-success" id="myBtn">Add To Cart</button>
             </form>
             <div class="toast mt-3">
              <div class="toast-header">
                Success!
              </div>
              <div class="toast-body">
                Item was successfully added to the cart.
              </div>
             </div>
           </form>
        </div>
      </div>
      <!-- /.col-lg-3 -->
    </div>

  </div>
  <!-- /.container -->

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
  $(document).ready(function(){
    $('#myBtn').click(function(){
      $('.toast').toast({delay: 4000});
      $('.toast').toast('show');
    });
  });
  </script>
</body>

</html>
