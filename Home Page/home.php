    <?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: ../Login Page/login.php"); 
        exit;
    }

    $eshteAdmin = isset($_SESSION['role']) && $_SESSION['role'] === 'admin';

    if (!isset($_SESSION['welcome_shown'])) {
        if ($_SESSION['role'] == 'admin') {
            echo "<script>alert('Përshëndetje Admin, " . $_SESSION['email'] . "');</script>";
            
        } elseif ($_SESSION['role'] == 'user') {
            echo "<script>alert('Përshëndetje User, " . $_SESSION['email'] . "');</script>";
        }

        $_SESSION['welcome_shown'] = true;
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ceramic Tiles</title>
        <link rel="stylesheet" href="home.css">
        <script src="./sideBar.js"></script>
        <script src="./slider.js"></script>
    </head>
    <body>
    <div id="pageContainer">
    
        <div id="navBar">

        <ul class="listaStart">

        <li><a href="home.php"> <img class="deltaLogo" src="Delta-logo.png" alt=""></a></li>
        
        </ul>
        <div class="navEND">

        <ul class="listaEND">
        <li class="hideMobile"><a id="Ballina" href="../Home Page/home.php">Ballina</a></li>
        <li class="hideMobile"><a href="../Products Page/produkte.php">Produkte</a></li>
        <li class="hideMobile"><a id="ambiente" href="../Ambients Page/ambient.php">Ambiente</a></li>
        <li class="hideMobile"><a href="../About Us Page/aboutus.php">Rreth nesh</a></li> 
        <li class="hideMobile"><a href="../Kontakt Page/kontakt.php">Kontakti</a></li>
        <?php if ($eshteAdmin): ?>
        <li class="hideMobile"><a href="../Dashboard Page/dashboard.php">Dashboard</a></li>
    <?php endif; ?>

        <li class="hideMobile"><a class="logout" href="../Logout Page/logout.php"><img id="logout" src="./logout.png" alt=""></a></li>
        <li id="menuIcon" onclick= showSideBar(event)><a class="menuIcon" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="black"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>

        </div>
    </div>
        <ul class="sideBar">
            <div class="iconDIV">
            <li id="hideIcon" onclick=closeSideBar(event)><a class="hideIcon" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="white"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <?php if($eshteAdmin): ?>
            <a id="dashboardHref" href="../Dashboard Page/dashboard.php">Dashboard</a>
            <?php endif; ?>
            </div>
            <li><a id="Ballina" href="../Home Page/home.php">Ballina</a></li>
            <li><a href="../Products Page/produkte.php">Produkte</a></li>
            <li><a href="../Ambients Page/ambient.php">Ambiente</a></li>
            <li><a href="../About Us Page/aboutus.php">Rreth nesh</a></li> 
            <li><a href="../Kontakt Page/kontakt.php">Kontakti</a></li>
            <li><a href="../Logout Page/Logout.php"><img id="logoutMobile" src="../Home Page/logout-white.png" alt=""></a></li>

        </ul>
        
        <div class="divImage">
        <img class="bg" src="bgimage.jpg" alt=""> 
        <div class="divTeksti">
            <h1>Inari</h1>
            <p>Me estetikën e tyre të frymëzuar nga guri i mermerit, ato përfaqësojnë zgjidhjen ideale për ata që duan të ndërthurin elegancën dhe ngrohtësinë natyrore, dizajnin dhe harmoninë estetike.</p>
            <a href="../Products Page/produkte.php"> <button class ="butoniInspirohu" >Blej Tani</button></a>
        </div> 
        </div>
        <h2 id="pllakaTitull">PLLAKA</h2>
            <div class="Produktet">
            
                <div id="banjo"><p>Banjo</p><a class="produkte" href="../Products Page/produkte.php"><img src="banjo.jpg" alt="banjo"></a></div>
                <div id="Dysheme"><p>Porcelan</p><a class="produkte" href="../Products Page/produkte.php"><img src="porcelain.jpg" alt="dysheme"></a></div>
                <div id="Porcelan"><p>Dysheme</p><a class="produkte" href="../Products Page/produkte.php"><img src="qeramike.jpg" alt="porcelain"></a></div>

            </div>
            
        <div id="harta">
                <div id="lokacioni">
                    <h2>Lokacioni Delta Qeramika</h2> 
                </div> 
            <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2807.0599025189586!2d20.770070775925298!3d42.25331077120303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1353978b3a4d7db3%3A0xacb2a22885f08418!2sDelta%20Qeramika!5e1!3m2!1sen!2s!4v1731329778576!5m2!1sen!2s" width="1000" height="450" allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>    
        
        <h2 id="partneretH2">Partnerët tanë</h2>
        <div id="SlideShow">

            <img name = "Slider" id="partneret" alt="">
        </div>
        <div id="butoniSlider">
        <button onclick="changeImg()">Shiko</button>
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