<?php
session_start();

include_once '../Database Page/Database.php';
include_once '../Database Page/TabelaUsers.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    $email = $_POST['email'] ;
    $password = $_POST['password'] ;
    $role = $_POST['role'] ;
    
    if ($user->login($email, $password, $role)) {
    
        header("Location: ../Home Page/home.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
    
</head> 
<body>

    <div id="PageContainer">
        <img src="../Products Page/imazhe/robur.jpg" alt="">
        <div id="formaDIV">
            <form id="form" action="" method="POST">

                <h3>Login</h3>

                <div id="emailDIV" class="inputDIV">
                    <label class="labelMsg" for="email" id="emailMessage"></label><br>
                    <input placeholder="Email" type="text" name="email" id="email" required/><br><br>
                </div>
                
                <div id="pwDIV" class="inputDIV">
                    <label class="labelMsg" for="password" id="passwordMessage"></label><br>
                    <input placeholder="Password" type="password" name="password" id="password" required/><br><br>
                </div>
                <select name="role" id="role" required>Roli

                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                
                </select>
                
                <input type="submit" id="submit" name="submit" value="Login">
                
                <p>Don't have an account? <span><a href="../Register Page/register.php">Register</a></span></p>
            </form>
        </div>
    </div>

    <script src="./LoginFormValidation.js"></script>
</body>
</html>
