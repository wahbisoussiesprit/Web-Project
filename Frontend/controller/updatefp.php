<?php
// Include the db.php file to establish the database connection
require_once __DIR__ . '/../config/db.php';

// Initialize variables
$id = $_GET['id'] ?? '';
$name = $price = $image_url = '';
$error = '';

// Fetch product details from the database based on the provided ID
if ($id) {
    $query = "SELECT * FROM front_products WHERE idf_p = '$id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        $name = $product['namef_p'];
        $price = $product['pricef_p'];
        $image_url = $product['image_url'];
    }
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    // Validate inputs (You should add proper validation here)
    if (empty($name) || empty($price) || empty($image_url)) {
        $error = 'All fields are required.';
    } else {
        // Update the product in the database
        $update_query = "UPDATE front_products SET namef_p = '$name', pricef_p = '$price', image_url = '$image_url' WHERE idf_p = '$id'";
        if ($conn->query($update_query)) {
            header('Location: viewadmin.php'); // Redirect after successful update
            exit();
        } else {
            $error = 'Error updating data in the database.';
        }
    }
}

// Close the database connection
$conn->close();
?>

<!-- HTML form for updating the product -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags and CSS links here -->
</head>
<body>
    <h2 align="center">Update Product</h2>
    <?php if (!empty($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post" align="center">
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>" required><br>
        
        <label for="price">Product Price:</label>
        <input type="text" name="price" id="price" value="<?php echo $price; ?>" required><br>
        
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url" value="<?php echo $image_url; ?>" required><br>
        
        <button type="submit">Update Product</button>
    </form>
</body>
</html>