<?php
include_once '../Database Page/SessionCheck.php';
include_once '../Database Page/Database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $mesazh = $_POST['mesazh'];

    // Insert into database
    $query = "INSERT INTO kontakti (name, surname, email, message) VALUES (:name, :surname, :email, :message)";
    $stmt = $connection->prepare($query);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $mesazh);

    if ($stmt->execute()) {
        echo "<script>alert('Mesazhi u dërgua me sukses!'); window.location.href='kontakt.php';</script>";
    } else {
        echo "<script>alert('Gabim! Provo përsëri.');</script>";
    }

    $query = "SELECT * FROM kontakti";
    $stmt = $connection -> prepare($query);
    $stmt -> execute();
    $kontakti = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($kontakti as $kontakt) {
        echo "Name: " . $kontakt['name'] . "<br>";
        echo "Surname: " . $kontakt['surname'] . "<br>";
        echo "Email: " . $kontakt['email'] . "<br>";
        echo "Message: " . $kontakt['message'] . "<br><br>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakti</title>

    
    <link rel="stylesheet" href="./kontakt.css">
    <script src="../Home Page/sideBar.js"></script>
</head>

<body>
    <div id="pageContainer">
   
        <div id="navBar">
    
        <ul class="listaStart">
    
        <li><a href="../Home Page/home.html"> <img class="deltaLogo" src="../Home Page/Delta-logo.png" alt=""></a></li>
        
        </ul>
        <div class="navEND">
    
        <ul class="listaEND">
        <li class="hideMobile"><a id="Ballina" href="../Home Page/home.php">Ballina</a></li>
        <li class="hideMobile"><a href="../Products Page/produkte.php">Produkte</a></li>
        <li class="hideMobile"><a href="../Ambients Page/ambient.php">Ambiente</a></li>
        <li class="hideMobile"><a href="../About Us Page/aboutus.php">Rreth nesh</a></li> 
        <li class="hideMobile"><a id="Kontakti" href="../Kontakt Page/kontakt.php">Kontakti</a></li>
        <li class="hideMobile"><a class="logout" href="../Logout Page/logout.php"><img id="logout" src="../Home Page/logout.png" alt=""></a></li>
        <li id="menuIcon" onclick= showSideBar(event)><a class="menuIcon" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="black"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
    
        </div>
    </div>
        <ul class="sideBar">
    
            <li id="hideIcon" onclick=closeSideBar(event)><a class="hideIcon" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="white"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a id="Ballina" href="../Home Page/home.php">Ballina</a></li>
            <li><a href="../Products Page/produkte.php">Produkte</a></li>
            <li><a href="../Ambients Page/ambient.php">Ambiente</a></li>
            <li><a href="../About Us Page/aboutus.php">Rreth nesh</a></li> 
            <li><a href="../Kontakt Page/kontakt.php">Kontakti</a></li>
            <li><a href="../Logout Page/Logout.php"><img id="logoutMobile" src="../Home Page/logout-white.png" alt=""></a></li>

    
        </ul>

        <div id="formContainer">

            
            <div class="grupoDIV">
            <h2 id="HeadingID">Na kontakto</h2>
            </div>

            <!-- Display message here -->
            <?php if (!empty($message)): 
                ?>
                <div id="message" class="message">
                    <?php echo $message; ?></div>
            <?php endif; ?>
            <form id="form" action="" method="POST">
            
                <div class="grupoDIV">
                <input type="text" placeholder="Emri.." class="login" name="name" id="name"> 
                <label for="name" id="nameMessage"></label><br> <br>
                </div> 
                
                <div class="grupoDIV">
                <input type="text" placeholder="Mbiemri.." class="login" name="surname" id="surname">
                <label for="surname" id="surnameMessage"></label><br> <br>  
               </div>
               <div class="grupoDIV">
                <input type="email" placeholder="Email.." class="login" name="email" id="email">
                <label for="email" id="emailMessage"></label><br> <br>
               </div>

                <div class="grupoDIV">
                <textarea id="mesazh" name="mesazh" placeholder="Mesazhi.." class="login"></textarea> 
                <label for="mesazh" id="mesazhMessage"></label><br> <br> 
               </div> 

                <input type="submit" id="register" class="login" value="Dërgo">
               
            </form>

        </div>
        <script src="./forma.js"></script>
</body>
</html