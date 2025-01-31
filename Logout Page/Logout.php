<?php 
session_start();

// Check if the session role is set
if(isset($_SESSION['role'])){ 
    // Unset all session variables
    session_unset(); 
    
    // Destroy the session
    session_destroy(); 
    
    // Redirect to the login page
    header('Location: ../Login Page/login.php');
    exit(); // Stop further execution
} else {
    // If the session is not set, just redirect to the login page
    header('Location: ../Login Page/login.php');
    exit(); // Stop further execution
}
?>
