<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    echo "<script>
    alert('Ju nuk keni qasje në këtë faqe');
    window.location.href = '../Home Page/home.php'; </script>";
exit;
}

include_once '../Database Page/Database.php';
$db = new Database();
$connection = $db->getConnection();

$query = "SELECT * FROM kontakti ORDER BY id DESC";
$stmt = $connection->prepare($query);
$stmt->execute();
$kontakti = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <script src="../Home Page/sideBar.js"></script>
</head>
<body>

<div id="pageContainer">
    
        <div id="navBar">

        <ul class="listaStart">

        <li><a href="home.php"> <img class="deltaLogo" src="../Home Page/Delta-logo.png" alt=""></a></li>
        
        </ul>
        <div class="navEND">

        <ul class="listaEND">
        <li class="hideMobile"><a id="Ballina" href="../Home Page/home.php">Ballina</a></li>
        <li class="hideMobile"><a href="../Products Page/produkte.php">Produkte</a></li>
        <li class="hideMobile"><a id="ambiente" href="../Ambients Page/ambient.php">Ambiente</a></li>
        <li class="hideMobile"><a href="../About Us Page/aboutus.php">Rreth nesh</a></li> 
        <li class="hideMobile"><a href="../Kontakt Page/kontakt.php">Kontakti</a></li>
        <li class="hideMobile"><a id="dashboard" href="../Dashboard Page/dashboard.php">Dashboard</a></li>
        <li class="hideMobile"><a class="logout" href="../Logout Page/logout.php"><img id="logout" src="../Home Page/logout.png" alt=""></a></li>
        <li id="menuIcon" onclick= showSideBar(event)><a class="menuIcon" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="black"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>

        </div>
    </div>
        <ul class="sideBar">
            <div class="iconDIV">
            <li id="hideIcon" onclick=closeSideBar(event)><a class="hideIcon" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="white"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <a id="dashboardHref" href="../Dashboard Page/dashboard.php">Dashboard</a>
            </div>
            <li><a id="Ballina" href="../Home Page/home.php">Ballina</a></li>
            <li><a href="../Products Page/produkte.php">Produkte</a></li>
            <li><a href="../Ambients Page/ambient.php">Ambiente</a></li>
            <li><a href="../About Us Page/aboutus.php">Rreth nesh</a></li> 
            <li><a href="../Kontakt Page/kontakt.php">Kontakti</a></li>
            <li><a href="../Logout Pag/Logout.php"><img id="logoutMobile" src="./logout-white.png" alt=""></a></li>

        </ul>
    <h1>ADMIN DASHBOARD</h1>
    <h2>Kontaktet prej klientëve</h2>

    <?php
        if (empty($kontakti)) {
    echo '<p style="color: red; font-weight: bold;">Ju nuk keni kontakte.</p>';
} ?>

    <div id="tableDIV">
    <table border="1">
        <tr>
            <th>Emri</th>
            <th>Mbiemri</th>
            <th>Email</th>
            <th>Mesazhi</th>
        </tr>
        <?php
        $fundit = true; 
        foreach ($kontakti as $kontakt): ?>
        <tr>
            <td><?php echo $kontakt['name']; ?></td>
            <td><?php echo $kontakt['surname']; ?></td>
            <td><?php echo $kontakt['email']; ?></td>
            <td>
                <?php echo $kontakt['message']; ?>
                <?php if ($fundit): ?>
                <span>(NEW)</span>
                <?php $fundit = false; ?>
                <?php endif; ?>    
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
        </div>
    </div>
</body>
</html>