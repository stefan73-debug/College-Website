<?php
// Database connection settings
$servername = "localhost"; // Change to your MySQL server hostname
$username = "id21286680_benjamin";
$password = "Benjamin@23";
$database = "id21286680_cw412";

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

// Process sign-up form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitize_input($_POST["email"]);
    $username = sanitize_input($_POST["username"]);
    $password = sanitize_input($_POST["password"]);

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO user_profile (email, username, password) VALUES ('$email', '$username', '$hashed_password')";

    if (mysqli_query($conn, $sql)) {
        // Registration successful
        header("Location: Discussion.php"); // Redirect to the login page
    } else {
        // Registration failed
        $error_message = "Registration failed. Please try again.";
    }
}

mysqli_close($conn);






