<?php
require_once "config.php";

$name = $cat = $price = "";
$name_err = $cat_err = $price_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($name_err) && empty($cat_err) && empty($price_err)) {
        $id = $_POST["id"];

        if (!empty($_FILES["image"]["name"])) {
            if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
                $temp_name = $_FILES["image"]["tmp_name"];
                $image_name = basename($_FILES["image"]["name"]);
                $target_path = $image_dir . $image_name;

                if (move_uploaded_file($temp_name, $target_path)) {
                    $sql = "UPDATE products SET P_Name=?, P_Category=?, P_Price=?, P_Picture=? WHERE ProductID=?";
                    if ($stmt = mysqli_prepare($link, $sql)) {
                        mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_cat, $param_price, $param_image, $param_id);
                        $param_name = $name;
                        $param_cat = $cat;
                        $param_price = $price;
                        $param_image = $target_path;
                        $param_id = $id;

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
} else {
    if (isset($_GET["ProductID"]) && !empty(trim($_GET["ProductID"]))) {
        $id =  trim($_GET["ProductID"]);
        $sql = "SELECT * FROM products WHERE ProductID = ?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            $param_id = $id;
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $name = $row["P_Name"];
                    $cat = $row["P_Category"];
                    $price = $row["P_Price"];
                    $imageDisplay = $row["P_Picture"];
                } else {
                    header("location: error.php");
                    exit();
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);
    } else {
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
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
                    <h2 class="mt-5">View Record</h2>
                    <p>Please edit the input values and submit to update the Product record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name" readonly
                                class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>"
                                value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Product Category</label>
                            <input type="text" name="cat" readonly
                                class="form-control "   value="<?php echo $cat; ?>">
                           
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" readonly
                                class="form-control <?php echo (!empty($price_err)) ? 'is-invalid' : ''; ?>"
                                value="<?php echo $price; ?>">
                            <span class="invalid-feedback"><?php echo $price_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <div>
                                <img style="width: 200px; height: 200px;" src="<?php echo $imageDisplay; ?>" alt="Product Image">
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />

                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
