<?php
session_start();
// Database connection settings
$servername = "localhost"; // Change to your MySQL server hostname
$username = "root";
$password = "";
$database = "secretangentbennie";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to sanitize user input
function sanitize_input($input) {
    global $conn;
    return mysqli_real_escape_string($conn, $input);
}

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_username = sanitize_input($_POST["email_username"]);
    $password = sanitize_input($_POST["password"]);

    // Query to retrieve user's hashed password
    $sql = "SELECT * FROM user_profile WHERE (email = '$email_username' OR username = '$email_username')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row["password"];

        // Verify the password using password_verify
        if (password_verify($password, $hashed_password)) {
            // Successful login
            $_SESSION["email_username"] = $email_username;
            header("Location: Discussion.php"); // Redirect to a welcome page
        } else {
            // Invalid password
            $error_message = "Invalid password. Please try again.";
        }
    } else {
        // User does not exist
        $error_message = "User not found. Please try again.";
    }
}

mysqli_close($conn);