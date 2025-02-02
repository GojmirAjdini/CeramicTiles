<?php
include_once '../Database Page/SessionCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceramic Tiles</title>

    <link rel="stylesheet" href="./produkte.css">
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
            <li class="hideMobile"><a id="kontakti" href="../Kontakt Page/kontakt.php">Kontakti</a></li>
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
            <li><a href="../Logout Page/Logout.php"><img id="logoutMobile" src="../Home Page/logout-white.png" alt=""></a></li>
    
        </ul>

            
        <div id="bgimage">
            <img id="background-img" src="./ProdukteIMG.jpg" alt="">
                
        <div id="divTeksti">
            <h1 class="teksti1" id="Titulli">Zgjedhja juaj më e mirë!</h1>
            <p id="paragraf" class="teksti1"> ASORTIMAN I GJERË I PRODUKTEVE PËR SHTËPINË TUAJ</p>
        </div>
        </div>
        <div class="nenTitull">
            <h2 id="Produktet-Nentitull">PRODUKTET</h2>
        </div>      
        <div id="divProduktet">
           
            <div id="foto1" class="foto"><p>Seria Mixit</p><a href="#"></a><img src="mixit.jpg" alt=""></div>
            <div id="foto2" class="foto"><p>Seria Superwhite</p><a href="#"></a><img src="superwhite.jpg" alt=""></div>
            <div id="foto3" class="foto"><p>Seria Kingston</p><a href="#"></a><img src="kingston.jpg" alt=""></div>
            <div id="foto4" class="foto"><p>Seria Nature</p><a href="#"></a><img src="nature.jpg" alt=""></div>

            <div id="foto5" class="foto"><p>Seria Titanium</p><a href="#"></a><img src="titanium.jpg" alt=""></div>
            <div id="foto7" class="foto"><p>Seria Sweethome</p><a href="#"></a><img src="Sweethome.jpg" alt=""></div>
            <div id="foto8" class="foto"><p>Seria Wewood</p><a href="#"></a><img src="wewood.jpg" alt=""></div>
            <div id="foto6" class="foto"><p>Seria Karara</p><a href="#"></a><img src="karara.jpg" alt=""></div>

            
            <div id="foto7" class="foto"><p>Seria Ruggine</p><a href="#"></a><img src="Ruggine.jpg" alt=""></div>
            <div id="foto8" class="foto"><p>Seria Robur</p><a href="#"></a><img src="robur.jpg" alt=""></div>
            <div id="foto9" class="foto"><p>Seria Alaska</p><a href="#"></a><img src="alaska.jpg" alt=""></div>


            </div>
        
            <footer>
    
                <div id="footerContainer">        
                    
                <div class="socialIcons">
        
                        <a href="https://www.facebook.com/deltaqeramikapz/"><img src="../Footer/facebook.png" id="facebook" alt="facebookLogo"></a>
                        <img src="../Footer/instagram.png" id="instagram" alt="instagramLogo">
                        <p id="nrTel"><img id="callIcon" src="../Footer/call.png" alt="callIcon">+383 44 119 351</p>
                         
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