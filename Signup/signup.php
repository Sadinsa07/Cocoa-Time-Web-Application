<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cocoatime";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match!";
        exit;
    }


    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO users (uname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password );

    // Execute the statement
    if ($stmt->execute()) {
        echo "Sign-up successful!";
        header("Location: ../login/login.html"); // Redirect to login page after sign-up
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Close connection
$conn->close();
?>
