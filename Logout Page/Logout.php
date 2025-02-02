<?php
session_start();
session_unset();
session_destroy();
header("Location: ../Login Page/login.php"); // Redirect to login page after logout
exit;
?>