<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login_register";

$conn = mysqli_connect("localhost", "root", "H@kim1712##*", "login_register");

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>