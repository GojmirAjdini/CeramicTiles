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
        <img src="../Products Page/robur.jpg" alt="">
        <div id="formaDIV">
            <form id="form" action="../Home Page/home.php" method="POST">

                <h3>Login</h3>

                <div id="emailDIV" class="inputDIV">
                    <label class="labelMsg" for="username" id="usernameMessage"></label><br>
                    <input placeholder="Username" type="text" name="username" id="username"/><br><br>
                </div>
                
                <div id="pwDIV" class="inputDIV">
                    <label class="labelMsg" for="password" id="passwordMessage"></label><br>
                    <input placeholder="Password" type="password" name="password" id="password"/><br><br>
                </div>
                <select name="Roli">Roli

                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                <input type="submit" id="submit" name="submit" value="Login">
                
                <p>Don't have an account? <span><a href="../Register Page/register.html">Register</a></span></p>
            </form>
        </div>
    </div>

    <script src="./LoginFormValidation.js"></script>
</body>
</html>
