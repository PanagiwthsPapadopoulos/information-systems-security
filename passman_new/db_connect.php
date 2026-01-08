<?php
// db_connect.php

// SECURITY FIX: Centralized connection logic.
$host = "localhost";

// configuration matching the report (Secure)
$user = "app_user";          
$pass = "secure_password";   

// $user = "root";  // OLD unsecured default
// $pass = "";

$db   = "pwd_mgr";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>