<?php

// Database connection
$host = 'localhost';
$db = 'miniproject';
$user = 'root';
$pass = '';  // Use the MySQL root password if set

$con = new mysqli($host, $user, $pass, $db, 3308);

// Check connection
if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}
?>
