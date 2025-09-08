<?php
session_start(); // Start the session to access session variables

// Database connection
$host = 'localhost';  // Your database host
$db = 'cocoatime';  // Your database name
$user = 'root';  // Your database username
$pass = '';  // Your database password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user is logged in (session 'username' should exist)
if (!isset($_SESSION['username'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit;
}

// Get the POST data (cart item details)
$data = json_decode(file_get_contents('php://input'), true);

// Extract values from the data
$username = $_SESSION['username']; // Get the username from session
$productName = $data['productName'];
$quantity = $data['quantity'];
$totalPrice = $data['totalPrice'];

// Prepare the SQL statement to insert into the cart table
$sql = "INSERT INTO cart (username, product_name, quantity, total_price) VALUES (?, ?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssid", $username, $productName, $quantity, $totalPrice);

// Execute the statement
if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Item added to cart successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error adding item to cart']);
}

// Close the connection
$stmt->close();
$conn->close();
?>
