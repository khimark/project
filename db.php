<?php
$servername = "localhost"; // Your MySQL server
$username = "your_username"; // Your MySQL username
$password = "your_password"; // Your MySQL password
$dbname = "my_database"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch products
function getProducts($conn) {
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    $products = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
    return $products;
}

// Fetch products and return as JSON
header('Content-Type: application/json');
echo json_encode(getProducts($conn));

$conn->close();
?>