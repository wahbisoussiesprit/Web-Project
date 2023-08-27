<?php
// Include the db.php file to establish the database connection
require_once __DIR__ . '/../config/db.php';

if (isset($_GET['search_query'])) {
    // Get the search query
    $searchQuery = $_GET['search_query'];
    
    // Construct the query to search for products by name
    $query = "SELECT idf_p, namef_p, pricef_p, image_url FROM front_products 
              WHERE namef_p LIKE '%$searchQuery%'";
    
    // Execute the query
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        echo '<ul>';
        while ($row = $result->fetch_assoc()) {
            echo '<li>';
            echo '<h3>' . $row['namef_p'] . '</h3>';
            echo '<p>Price: $' . $row['pricef_p'] . '</p>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'No matching products found.';
    }
    
    // Close the result set
    $result->close();
} else {
    echo 'Please enter a search query.';
}

// Close the database connection
$conn->close();
?>