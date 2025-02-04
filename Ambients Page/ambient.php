<?php
include_once '../Database Page/SessionCheck.php';
include_once '../Database Page/Database.php'; 

$db = new Database();
$connection = $db->getConnection();

$query = "SELECT id, image_path FROM ambients"; 
$stmt = $connection->prepare($query);
$stmt->execute();
$ambients = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceramic Tiles</title>
    <link rel="stylesheet" href="./ambient.css">
    <script src="../Home Page/sideBar.js"></script>
</head>
<body>
    <div id="pageContainer">
        <div id="navBar">
            <ul class="listaStart">
                <li><a href="../Home Page/home.php"> <img class="deltaLogo" src="../Home Page/Delta-logo.png" alt=""></a></li>
            </ul>
            <div class="navEND">
                <ul class="listaEND">
                    <li class="hideMobile"><a id="Ballina" href="../Home Page/home.php">Ballina</a></li>
                    <li class="hideMobile"><a id="produkte" href="../Products Page/produkte.php">Produkte</a></li>
                    <li class="hideMobile"><a id="ambiente" href="../Ambients Page/ambient.php">Ambiente</a></li>
                    <li class="hideMobile"><a id="about" href="../About Us Page/aboutus.php">Rreth nesh</a></li> 
                    <li class="hideMobile"><a id="kontakti" href="../Kontakt Page/kontakt.php ">Kontakti</a></li>
                    <li class="hideMobile"><a class="logout" href="../Logout Page/logout.php"><img id="logout" src="../Home Page/logout.png" alt=""></a></li>
                    <li id="menuIcon" onclick= showSideBar(event)><a class="menuIcon" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="black"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
                </ul>
            </div>
        </div>
        
        <ul class="sideBar">
            <li id="hideIcon" onclick=closeSideBar(event)><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="white"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a id="Ballina" href="../Home Page/home.php">Ballina</a></li>
            <li><a href="../Products Page/produkte.php">Produkte</a></li>
            <li><a href="../Ambients Page/ambient.php">Ambiente</a></li>
            <li><a href="../About Us Page/aboutus.php">Rreth nesh</a></li> 
            <li><a href="../Kontakt Page/kontakt.php">Kontakti</a></li>
            <li><a href="../Logout Pag/Logout.php"><img id="logoutMobile" src="../Home Page/logout-white.png" alt=""></a></li>
        </ul>
        
        <div class="nenTitull">
            <h2 id="Produktet-Nentitull">AMBIENTE TË NDRYSHME</h2>
        </div>      
        
        <div id="divAmbiente">
            <?php
            
            foreach ($ambients as $ambient) {
                $imagePath = $ambient['image_path']; 

                $imageURL = "imazhe/" . $imagePath;

                echo "<div class='foto'><a href='$imageURL'><img src='$imageURL' alt='Ambient'></a></div>";
            }
            ?>
        </div>

        <footer>
            <div id="footerContainer">        
                <div class="socialIcons">
                    <a href="https://www.facebook.com/deltaqeramikapz/"><img src="../Footer/facebook.png" class="social" id="facebook" alt="facebookLogo"></a>
                    <img src="../Footer/instagram.png" class="social" id="instagram" alt="instagramLogo">
                    <p id="nrTel"><img id="callIcon" src="../Footer/call.png" class="social" alt="callIcon">+383 44 119 351</p>
                </div>
                
                <ul class="listaDIV">
                    <li><a id="Ballina" style="text-decoration: none;" href="../Home Page/home.php">Ballina</a></li>
                    <li><a style="text-decoration: none;" href="../Products Page/produkte.php">Produkte</a></li>
                    <li><a style="text-decoration: none;" href="../Ambients Page/ambient.php">Ambiente</a></li>
                    <li><a style="text-decoration: none;" href="../About Us Page/aboutus.php">Rreth nesh</a></li> 
                    <li><a style="text-decoration: none;" href="../Kontakt Page/kontakt.php">Kontakti</a></li>
                </ul>
                
                <div id="paragrafiFundit">
                    <p>Copyright ©2024; Designed by Gojmiri & Ermali</p>
                </div>
            </div>      
        </footer>    
    </div>     
</body>
</html>
