<?php

$host = "localhost";
$username = "root"; 
$password = ""; 
$database = "landing_db";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  
$email = $_POST["email"];
$password = $_POST["password"]; 
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

    header("Location:play.html");
    // echo"success";
    exit();
} else {
  
    // header("Location: error.html");
    echo "login failed";
    exit();
}
?>
