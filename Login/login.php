<?php
session_start();
include 'conn.php';

$uname = $_POST['uname'];
$pw = $_POST['password'];

// Query to fetch user details based on the username
$sql = "SELECT * FROM users WHERE uname = '$uname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    // Direct comparison if passwords are not hashed
    if ($row['password'] === $pw) {
        $_SESSION['username'] = $uname;
        echo "<script>alert('Welcome: " . $_SESSION['username'] . "');</script>";
        echo "<script>alert('Login successful');</script>";
        header("Location: ../Home/home.html");
        exit(); // Make sure to call exit() to stop further script execution
    } else {
        echo "<script>alert('Invalid password');</script>";
        echo "<script>history.back();</script>";
    }
} else {
    echo "<script>alert('User not found');</script>";
    echo "<script>history.back();</script>";
}
?>
