<?php
include_once '../Database Page/Database.php';
include_once '../Database Page/TabelaUsers.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    
    $username = $_POST['username'] ?? null; 
    $email = $_POST['email']?? null;
    $password = $_POST['password']?? null;  
    $confirmPassword = $_POST['confirmPassword']?? null;
    $role = $_POST['role']?? null;

    
    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords do not match!'); location.href='register.php';</script>";
        exit;
    }

    if ($user->register($username, $email, $password, $role)) {
        header("Location: ../Login Page/login.php");
        exit;
    } else {
        echo "<script> alert ('Gabim gjatë regjistrimit'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./register.css">
</head>
<body>

    <div id="PageContainer">

        <img src="../Products Page/robur.jpg" alt="">
    <div id="formaDIV">
        <form id="form" action="" method="POST">

            <h3>Register</h3>

            <div id="emriDIV" class="inputDIV">
            <label id="usernameMessage" for="emri"></label><br>
            <input id="username" placeholder="Username" type="text" name="username" required /><br><br>
            </div>

            <div id="emailDIV" class="inputDIV">
            <label id="emailMessage" for="email"></label><br>
            <input id="email" placeholder="Email" type="text" name="email" required /><br><br>
            </div>
            
            <div id="pwDIV" class="inputDIV">
            <label id="passwordMessage" for="password"></label><br>
            <input id="password" placeholder="Password" type="password" name="password" required  /><br><br>
            </div>

            <div id="pwDIV" class="inputDIV">
            <label id="confirmMessage" for="confirmpMessage"></label><br>
            <input id="confirmPassword" placeholder="Confirm Password" type="password" name="confirmPassword" required /><br><br>
            </div>

            <select name="role" required >Roli    

                    <option value="admin">Admin</option>
                    <option value="user">User</option>                
            </select>

            <input type="submit" id="submit" name="submit" value="Register">
            <p>Already have an account? <span> <a href="../Login Page/login.php">Login</a>  </span></p>
        </form>
    </div> 
</div>
        <script src="./RegisterFormValidation.js"></script>
</body>
</html>