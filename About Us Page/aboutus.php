<?php
include_once '../Database Page/SessionCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceramic Tiles</title>
    <link rel="stylesheet" href="../About Us Page/aboutus.css">
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
        <li class="hideMobile"><a href="../Products Page/produkte.php">Produkte</a></li>
        <li class="hideMobile"><a href="../Ambients Page/ambient.php">Ambiente</a></li>
        <li class="hideMobile"><a id="AboutUs" href ="../About Us Page/aboutus.php">Rreth nesh</a></li> 
        <li class="hideMobile"><a href="../Kontakt Page/kontakt.php">Kontakti</a></li>
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
        <div id="ImgBG"> 

        <img src="./AboutUsImage.jpg" alt="">
    </div>

        <div id="RrethNeshID">
        <h2>RRETH NESH</h2>
        
        <p>Delta Qeramika e themeluar në vitin 2008 nga familja Veçgishti ne qytetin e bukur të Prizrenit.
Kompania që në fillimet e saja veprimtarinë kryesore të saj e kishte tregtinë me pllaka të qeramikes 
Duke pasur si frymëzim inovacionin në ofertën ndaj klientëve, Delta Qeramika arriti të vendosë partneritet me disa nga prodhuesit më të njohur të produkteve të qeramikës nga Spanja, India , Egjipti dhe më gjerë.
Kjo i ka mundësuar që t’i ofrojë klientit trendet më të reja botërore të produkteve të qeramikës dhe të krijojë një besim të palëkundshëm në tregun kosovarë. </p>
</div>
    <div id="misioniID">

        <div class="tekstiID"> 
        <h2>Misioni ynë</h2>
        <p>Delta Qeramika me misionin kryesorë të saj ka të siguron një shërbim me kualitet më të larte dhe të krijojë besim te konsumatoret, të krijojë relacion bashkëpunues për kohë të gjata .
           Po ashtu me mision primarë ka dhe përmbushjen e kërkesave të klientit duke sjellur modelet dhe trendet e fundit botërore.
        </p>

        <h2>Vizioni ynë</h2>
        <p>Vizioni i Delta Qeramikes është që të ndërtojë një bazament të fuqishëm në industrinë e qeramikës, bazuar në produkte kualitative, shërbim të nivelit të lartë, një ambient mikpritës, dhe këtë përvojë të mund të replikohet edhe në fusha të tjera në zgjerimin e veprimtarisë afariste.
        </p>
        
    </div>
    </div>

    <div class="imazhe">

        <img src="./Ceramic-Install.png" alt="">
        
        <div class="imazheTekst"><h2>Çka ofrojmë ne ?</h2>
        <ul>
            <li><span>Pllaka qeramike të cilësisë së lartë</span> – Me bashkëpunim me prodhuesit më të njohur nga Spanja, India, Egjipti dhe vende të tjera, sjellim trendet më të reja në treg.</li> <br>    
            <li><span>Dizajne dhe stile të ndryshme </span> – Ne ndjekim inovacionin dhe sjellim modele të reja për të përshtatur çdo ambient, qoftë klasik apo modern.</li> <br>
            <li><span>Shërbim profesional dhe këshillim </span>– Stafi ynë me përvojë është gjithmonë i gatshëm t'ju ndihmojë të zgjidhni produktin e duhur për hapësirën tuaj.</li> <br>
            <li><span>Besim dhe korrektësi </span>– Marrëdhëniet tona me klientët bazohen në besim të ndërsjellë dhe shërbim të përkushtuar për një përvojë blerjeje të kënaqshme.</li> <br>  
        </ul>
        </div>
    </div>

    <div class="imazhe2">

        <div class="imazheTekst2"><h2>Çfarë e veçon Delta Qeramikën ?</h2>
        <ul>
            <li>Delta Qeramiken e veçon produketet që i ofrojmë me prodhues të klasit të parë.</li><br>
            <li>Shërbimin ndaj klientëve dhe po ashtu besimin që krijojme tek secili klient i yni.</li> <br>
            <li>Profesionalizmi është një nga veçoritë kryesore që ne posedojmë dhe një pervojë shumë vjecare po ashtu dhe produktet me kualitet nga prodhuesit lider botëror.</li>
        </ul>
        </div>
        
        <img src="./ceramic-tile.jpeg" alt="">
        
        
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