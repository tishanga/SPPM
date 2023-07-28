<?php
require_once "config.php";

$name = $cat = $price = "";
$name_err = $cat_err = $price_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image_dir = "resourses/";

    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $input_name)) {
        $name_err = "Please enter a valid name.";
    } else {
        $name = $input_name;
    }

    $input_cat = trim($_POST["cat"]);
    if (empty($input_cat)) {
        $cat_err = "Please enter a category.";
    } else {
        $cat = $input_cat;
    }

    $input_price = trim($_POST["price"]);
    if (empty($input_price)) {
        $price_err = "Please enter the amount.";
    } elseif (!ctype_digit($input_price)) {
        $price_err = "Please enter a positive integer value.";
    } else {
        $price = $input_price;
    }

    if (empty($name_err) && empty($cat_err) && empty($price_err)) {
        if (!empty($_FILES["image"]["name"])) {
            if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
                $temp_name = $_FILES["image"]["tmp_name"];
                $image_name = basename($_FILES["image"]["name"]);
                $target_path = $image_dir . $image_name;

                if (move_uploaded_file($temp_name, $target_path)) {
                    $sql = "INSERT INTO products (`P_Name`, `P_Category`, `P_Price`, `P_Picture`) VALUES (?, ?, ?, ?)";
                    if ($stmt = mysqli_prepare($link, $sql)) {
                        mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_cat, $param_price, $param_image);
                        $param_name = $name;
                        $param_cat = $cat;
                        $param_price = $price;
                        $param_image = $target_path;

                        if (mysqli_stmt_execute($stmt)) {
                            header("location: index.php");
                            exit();
                        } else {
                            echo "Oops! Something went wrong. Please try again later.";
                        }
                    }
                    mysqli_stmt_close($stmt);
                } else {
                    echo "Error uploading the image.";
                }
            } else {
                echo "Error uploading the image.";
            }
        } else {
            echo "Please select an image.";
        }
    }
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Add Products</h2>
                    <p>Please fill this form and submit to add a product record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Product Category</label>
                            <select name="cat" id="languages" class="form-control <?php echo (!empty($cat_err)) ? 'is-invalid' : ''; ?>">
                                <option value="">...</option>
                                <option value="Cream">Cream</option>
                                <option value="Face Pack">Face Pack</option>
                            </select>
                            <span class="invalid-feedback"><?php echo $cat_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control <?php echo (!empty($price_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $price; ?>">
                            <span class="invalid-feedback"><?php echo $price_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Select an Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
