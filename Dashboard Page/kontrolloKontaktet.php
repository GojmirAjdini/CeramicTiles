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

$countQuery = "SELECT COUNT(*) AS total_kontakte FROM kontakti";
$countStmt = $connection->prepare($countQuery);
$countStmt->execute();
$countResult = $countStmt->fetch(PDO::FETCH_ASSOC);
$totalUsers = $countResult['total_kontakte']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./kontrolloKontaktet.css">
</head>
<body>
    
    <div id="pageContainer">
<h1>KONTAKTET NGA KLIENTËT</h1>

    <p style="margin-bottom:15px">Gjithsej Kontakte: <?php echo $totalUsers; ?></p>
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
            <th>Edit</th>
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
            <td>

            <a href="../Dashboard Page/fshijKontaktet.php?id=<?php echo $kontakt['id']; ?>"><span id="deleteKontaktID">Delete Kontakt</span></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
        </div>
        <a id="dashboardID" href="../Dashboard Page/dashboard.php">Kthehu në dashboard</a>
        </div>
</body>
</html>