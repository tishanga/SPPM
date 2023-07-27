<?php

@include 'config.php';

session_start();

?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Glossy</title>
  <!-- MDB icon -->
  <link rel="icon" href="./includes/website logo.png" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<?php require_once "includes/Header.php";?>

<body>
  <section>
      <!-- Jumbotron -->
  <div class="bg-primary text-white py-5">
    <div class="container py-5">
      <h1>
        Best products & <br />
        brands in our store
      </h1>
      <p>
        Trendy Products, Factory Prices, Excellent Service
      </p>
      <button type="button" class="btn btn-outline-light">
        Learn more
      </button>
      <button type="button" class="btn btn-light shadow-0 text-primary pt-2 border border-white">
        <span class="pt-1">Purchase now</span>
      </button>
    </div>
  </div>
  <!-- Jumbotron -->
    <div class="container my-5">
      <header class="mb-4">
        <h3>New products</h3>
      </header>
      <div class="row">
      <?php
        //Assuming you have a database connection established

        // Query to retrieve product information from the database
          $query = "SELECT p_name, p_price, p_picture, p_count FROM product LIMIT 12";
          $result = mysqli_query($conn, $query);
          //
          // Loop through the result set
          // if ($result) {
            // Initialize a counter
            // while ($row = mysqli_fetch_assoc($result) && $count < 12) {
              for ($i=0; $i < 12 ; $i++) {
                $row = mysqli_fetch_assoc($result);
            
                $productName = $row['p_name'];
                $price = $row['p_price'];
                $productImage = $row['p_picture'];

                // Display the product information
                
                echo "<div class='col-lg-3 col-md-6 col-sm-6 d-flex'>";
                echo "<div class='card w-100 my-2 shadow-2-strong'>";
                echo "<img src='./includes/Product img/$productImage' class='card-img-top' style='aspect-ratio: 1 / 1' />";
                echo "<div class='card-body d-flex flex-column'>";
                echo "<h5 class='card-title'>$productName</h5>";
                echo "<p class='card-text'>Rs. $price/-</p>";
                echo "<div class='card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto'>";
                echo "<a href='#' class='btn btn-primary shadow-0 me-1'>Add to cart</a>";
                echo "<a href='#' class='btn btn-light border px-2 pt-2 icon-hover'><i class='fas fa-heart fa-lg text-secondary px-1'></i></a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>"; 
              }
            

              // Increment the counter
            
          //}
        

        // Close the database connection
          mysqli_close($conn);
      ?>
          <!-- will be replace with above code snippet -->
        <!-- <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="./includes/Product img/P (1).jpeg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">product name</h5>
              <p class="card-text">$00.00</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="./includes/Product img/P (2).jpeg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">product name</h5>
              <p class="card-text">$00.00</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="./includes/Product img/P (3).jpeg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">product name</h5>
              <p class="card-text">$00.00</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="./includes/Product img/P (4).jpeg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">product name</h5>
              <p class="card-text">$00.00</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="./includes/Product img/P (5).jpeg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">product name</h5>
              <p class="card-text">$00.00</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="./includes/Product img/P (6).jpeg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">product name</h5>
              <p class="card-text">$00.00</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="./includes/Product img/P (7).jpeg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">product name</h5>
              <p class="card-text">$00.00</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="./includes/Product img/P (8).jpeg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">product name</h5>
              <p class="card-text">$00.00</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div> -->
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      </div>
    </div>
  </section>
  <!-- Products -->
  
  <?php require_once "includes/whychooseus.php";?>

 <?php require_once "includes/Footer.php";?> 
</body>

</html>