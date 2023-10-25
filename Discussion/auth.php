<?php
// auth.php

function check_authentication() {
    session_start();

    // Check if the user is logged in (you can modify this check as needed)
    if (!isset($_SESSION["email_username"])) {
        header("Location: Discussion.php"); // Redirect to the login page if not logged in
        exit();
    }
}