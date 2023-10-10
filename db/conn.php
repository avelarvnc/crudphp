<?php

    // Database configuration (localhost)
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "loja";

$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);

// Create database connection
$link = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>