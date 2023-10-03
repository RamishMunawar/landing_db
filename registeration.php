<?php
$host = "localhost";
$username = "root"; 
$password = ""; 
$database = "landing_db";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];  
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"]; 
if ($password !== $confirm_password) {
    die("Passwords do not match.");
}
$sql = "INSERT INTO users (first_name, last_name, mobile, address, email, password) VALUES ('$first_name', '$last_name', '$mobile', '$address', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    
    header("Location:login.html");
    // echo "registerd";
    exit();
} else {
 
    header("Location: register.html");
    exit();
}

// $conn->close();
?>
