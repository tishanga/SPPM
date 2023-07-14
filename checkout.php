<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
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

    
  
    
    .step-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .step-number {
      width: 30px;
      height: 30px;
      background-color: #4CAF50;
      color: #fff;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-weight: bold;
    }
    
    .step-title {
      font-weight: bold;
    }
    
    .step-content {
      display: none;
    }
    
    .step-content.show {
      display: block;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 5px;
      color: #333;
      font-weight: bold;
    }
    
    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    .button-row {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      margin-top: 30px;
    }
    
    .button-row button {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }
    
    .button-row button:hover {
      background-color: #45a049;
    }
.checkout-container {
  max-width: 1200px;
  margin: 20px auto;
  padding: 20px;
}

h1 {
  margin-top: 0;
}

form {
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.cart-total {
  text-align: right;
  margin-bottom: 20px;
}

.checkout-button {
  padding: 10px 20px;
  background-color: #f44336;
  color: #fff;
  border: none;
  cursor: pointer;
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


    </style>
    <script>
    function showStep(step) {
      var steps = document.getElementsByClassName('step-content');
      var stepHeaders = document.getElementsByClassName('step-header');
      for (var i = 0; i < steps.length; i++) {
        steps[i].classList.remove('show');
        stepHeaders[i].classList.remove('current');
      }
      steps[step - 1].classList.add('show');
      stepHeaders[step - 1].classList.add('current');
    }
  </script>
  </head>
    
<?php require_once "includes/Header.php";?>
    
  <body>
    
    <!-- Jumbotron -->
      <div class="bg-primary text-white py-5">
        <div class="container py-5">
          <h1>
            Checkout
          </h1>
          
        </div>
      </div>
      <!-- Jumbotron -->
    <!---- Checkout Body --->

  <div class="checkout-container">
    <table>
      <tr>
          <th>Image</th>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>
      <tr>
          <td><img src="./includes/Product img/P (1).jpeg" width="100px"></td>
        <td>Product 1</td>
        <td>$10.00</td>
        <td>2</td>
        <td>$20.00</td>
      </tr>
      <tr>
          <td><img src="./includes/Product img/P (2).jpeg" width="100px"></td>
        <td>Product 2</td>
        <td>$15.00</td>
        <td>1</td>
        <td>$15.00</td>
      </tr>
    </table>
       <div class="cart-total">
        <span>Total:</span>
        <span>$35.00</span>
      </div>
    <form>
      <div class="step-header current" onclick="showStep(1)">
      <div class="step-number">1</div>
      <div class="step-title">Billing Information</div>
    </div>
    <div class="step-header" onclick="showStep(2)">
      <div class="step-number">2</div>
      <div class="step-title">Shipping Information</div>
    </div>
    <div class="step-header" onclick="showStep(3)">
      <div class="step-number">3</div>
      <div class="step-title">Payment Information</div>
    </div>
    <form>
      <div class="step-content show">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="button-row">
          <button type="button" onclick="showStep(2)">Next</button>
        </div>
      </div>
      <div class="step-content">
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
          <label for="city">City:</label>
          <input type="text" id="city" name="city" required>
        </div>
        <div class="button-row">
          <button type="button" onclick="showStep(1)">Previous</button>
          <button type="button" onclick="showStep(3)">Next</button>
        </div>
      </div>
      <div class="step-content">
        <div class="form-group">
          <label for="card">Card Number:</label>
          <input type="text" id="card" name="card" required>
        </div>
        <div class="form-group">
          <label for="expiry">Expiry Date:</label>
          <input type="text" id="expiry" name="expiry" required>
        </div>
        <div class="form-group">
          <label for="cvv">CVV:</label>
          <input type="text" id="cvv" name="cvv" required>
        </div>
          <div class="cart-total">
        <span>Total:</span>
        <span>$35.00</span>
      </div>
        <div class="button-row">
          <button type="button" onclick="showStep(2)">Previous</button>
          <button type="submit">Place Order</button>
        </div>
      </div>
    </form>
      
     
    </form>
  </div>
<!---- Checkout Body --->



      
<?php require_once "includes/Footer.php";?>
  </body>
</html>
