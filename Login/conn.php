<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "cocoatime";

$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn){
    die("Connection error" . mysqli_connect_err());
}
?>