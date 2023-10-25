<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "secretangentbennie";

// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === false) {
    die("Error creating database: " . $conn->error);
}

// Close the connection to create tables
$conn->close();

// Connect to the newly created database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define table names and columns
$tables = [
    "CAF411_messages" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "name VARCHAR(50) NOT NULL", "message TEXT NOT NULL", "timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP"],
    "CF412_messages" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "name VARCHAR(50) NOT NULL", "message TEXT NOT NULL", "timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP"],
    "CW412_messages" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "name VARCHAR(50) NOT NULL", "message TEXT NOT NULL", "timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP"],
    "DLP411_messages" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "name VARCHAR(50) NOT NULL", "message TEXT NOT NULL", "timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP"],
    "ENA412_messages" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "name VARCHAR(50) NOT NULL", "message TEXT NOT NULL", "timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP"],
    "PPD411_messages" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "name VARCHAR(50) NOT NULL", "message TEXT NOT NULL", "timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP"],
    "PRP411_messages" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "name VARCHAR(50) NOT NULL", "message TEXT NOT NULL", "timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP"],
    "RD412_messages" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "name VARCHAR(50) NOT NULL", "message TEXT NOT NULL", "timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP"],
    "user_profile" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "username VARCHAR(50) NOT NULL", "email VARCHAR(100) NOT NULL", "password VARCHAR(255) NOT NULL"],
    "CAF411_files" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "file_name VARCHAR(255) NOT NULL", "file_data LONGBLOB NOT NULL"],
    "CF412_files" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "file_name VARCHAR(255) NOT NULL", "file_data LONGBLOB NOT NULL"],
    "CW412_files" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "file_name VARCHAR(255) NOT NULL", "file_data LONGBLOB NOT NULL"],
    "DLP411_files" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "file_name VARCHAR(255) NOT NULL", "file_data LONGBLOB NOT NULL"],
    "ENA412_files" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "file_name VARCHAR(255) NOT NULL", "file_data LONGBLOB NOT NULL"],
    "PPD411_files" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "file_name VARCHAR(255) NOT NULL", "file_data LONGBLOB NOT NULL"],
    "PRP411_files" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "file_name VARCHAR(255) NOT NULL", "file_data LONGBLOB NOT NULL"],
    "RD412_files" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "file_name VARCHAR(255) NOT NULL", "file_data LONGBLOB NOT NULL"],
    "submission" => ["id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "name VARCHAR(50) NOT NULL", "surname VARCHAR(50) NOT NULL", "email VARCHAR(100) NOT NULL", "message TEXT NOT NULL"]
];

// Create tables
foreach ($tables as $table => $columns) {
    $table_sql = "CREATE TABLE IF NOT EXISTS $table (" . implode(", ", $columns) . ")";
    
    if ($conn->query($table_sql) === false) {
        die("Error creating table '$table': " . $conn->error);
    }
}

// Close the connection
$conn->close();

// Redirect to the local HTML file named "Homepage.html"
header("Location: HomePage.html");
exit;
