<?php 
session_start();

if(isset($_SESSION['role'])){     
    session_destroy(); 
    header('Location: ../Login Page/login.php');
   
} else {
    
    header('Location: ../Login Page/login.php');
    
}
?>
