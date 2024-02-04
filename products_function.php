<?php
include 'db_connection.php'; // Include database connection

// Function to add a product to the database
function addProduct($name, $category, $price, $quantity_in_stock, $manufacturer_id) {
    global $conn;
    $name = mysqli_real_escape_string($conn, $name);
    $category = mysqli_real_escape_string($conn, $category);
    // Validate other inputs as needed

    // SQL query to insert the product into the database
    $sql = "INSERT INTO products (name, category, price, quantity_in_stock, manufacturer_id) 
            VALUES ('$name', '$category', $price, $quantity_in_stock, $manufacturer_id)";

    // Execute the query and return true if successful, false otherwise
    return $conn->query($sql);
}

// Function to retrieve products by category from the database
function getProductsByCategory($category) {
    global $conn;
    $category = mysqli_real_escape_string($conn, $category);

    // SQL query to retrieve products based on the specified category
    $sql = "SELECT * FROM products WHERE category = '$category'";
    $result = $conn->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Fetch associative array of products and return
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        // If no products found, return an empty array
        return [];
    }
}
?>
