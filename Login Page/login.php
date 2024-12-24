<?php
    function MetodaPOST(){

        if(isset($_POST['submit'])){
            $perdoruesi = $_POST['email'];
            $password = $_POST['psw'];
            echo 'Pershendetje per ju <br> Perdoruesi: ', $perdoruesi,
            '<br> Fjalekalimi: ',$password;
        exit();
        }
        else{
            echo 'Ju nuk keni shtypur butonin Login';
        }


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
        <form action="login.php" method="POST">

            <label for="username">Username</label><br>
            <input type="text" name="user"/><br><br>

            <label for="password">Password</label><br>
            <input type="password" name="psw"/><br><br>

            <input type="submit" name="submit" value="Login ">
        </form>
        <h5><?php MetodaPOST()?> </h5>


</body>
</html>