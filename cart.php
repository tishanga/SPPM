<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="./includes/website logo.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.cart-container {
  max-width: 1200px;
  margin: 20px auto;
  padding: 20px;
}

h1 {
  margin-top: 0;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

.remove-button {
  padding: 5px 10px;
  background-color: #ff0000;
  color: #fff;
  border: none;
  cursor: pointer;
}

.cart-total {
  text-align: right;
  margin-bottom: 20px;
}

.cart-buttons {
  text-align: right;
}

.continue-shopping-button,
.checkout-button {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  cursor: pointer;
  margin-left: 10px;
}

.checkout-button {
  background-color: #f44336;
}

    </style>
  </head>
    
<?php require_once "includes/Header.php";?>
    
  <body>
    
    <!-- Jumbotron -->
      <div class="bg-primary text-white py-5">
        <div class="container py-5">
          <h1>
            Shopping Cart
          </h1>
          
        </div>
      </div>
      <!-- Jumbotron -->
    <!---- Cart Body --->

  <div class="cart-container">
    
    <table>
      <tr>
        <th>Image</th>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
        <th>Actions</th>
      </tr>
      <tr>
        <td><img src="./includes/Product img/P (1).jpeg" width="100px"></td>
        <td>Product 1</td>
        <td>$10.00</td>
        <td>2</td>
        <td>$20.00</td>
        <td>
          <button class="remove-button">Remove</button>
        </td>
      </tr>
      <tr>
        <td><img src="./includes/Product img/P (3).jpeg" width="100px"></td>
        <td>Product 2</td>
        <td>$15.00</td>
        <td>1</td>
        <td>$15.00</td>
        <td>
          <button class="remove-button">Remove</button>
        </td>
      </tr>
    </table>
    
    <div class="cart-total">
      <span>Total:</span>
      <span>$35.00</span>
    </div>
    
    <div class="cart-buttons">
      <button class="continue-shopping-button">Continue Shopping</button>
      <button class="checkout-button">Checkout</button>
    </div>
  </div>
<!---- Cart Body --->



      
<?php require_once "includes/Footer.php";?>
  </body>
</html>
