<?php
session_start();

if (!isset($_SESSION['role'])) {
    
    header('Location: ../Login Page/login.php');
    exit();
}
?>