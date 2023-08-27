<?php
// Include the db.php file to establish the database connection
require_once __DIR__ . '/../config/db.php';

// Initialize variables
$name = $price = $image_url = '';
$error = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    // Validate inputs (You should add proper validation here)
    if (empty($name) || empty($price) || empty($image_url)) {
        $error = 'All fields are required.';
    } else {
        // Insert the new product into the database
        $insert_query = "INSERT INTO front_products (namef_p, pricef_p, image_url) VALUES ('$name', '$price', '$image_url')";
        if ($conn->query($insert_query)) {
            header('Location: viewadmin.php'); // Redirect after successful insertion
            exit();
        } else {
            $error = 'Error inserting data into the database.';
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Product Addition</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<div class="col-lg-3" align="center">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo1.png" alt=""></a>
                    </div>
                </div>
    
    <h2 align="center">Add New Product</h2>
    <?php if (!empty($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post" align="center">
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" required><br>
        
        <label for="price">Product Price:</label>
        <input type="text" name="price" id="price" required><br>
        
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url" required><br>
        
        <button type="submit">Add Product</button>
    </form>
</body>
</html>