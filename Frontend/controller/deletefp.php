<?php
// Include the db.php file to establish the database connection
require_once __DIR__ . '/../config/db.php';

// Check if the product ID is provided as a query parameter
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Delete the product from the front_products table
    $delete_query = "DELETE FROM front_products WHERE idf_p = '$product_id'";
    if ($conn->query($delete_query)) {
        header('Location: viewadmin.php'); // Redirect after successful deletion
        exit();
    } else {
        echo 'Error deleting the product.';
    }
} else {
    echo 'Product ID not provided.';
}

// Close the database connection
$conn->close();
?>





