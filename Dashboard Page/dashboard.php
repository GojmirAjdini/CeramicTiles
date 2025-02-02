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

$query = "SELECT * FROM kontakti";
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
</head>
<body>
    <h1>Admin Dashboard</h1>
    <h2>Kontaktet prej perdoruesve</h2>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
        <?php foreach ($kontakti as $kontakt): ?>
        <tr>
            <td><?php echo htmlspecialchars($kontakt['name']); ?></td>
            <td><?php echo htmlspecialchars($kontakt['surname']); ?></td>
            <td><?php echo htmlspecialchars($kontakt['email']); ?></td>
            <td><?php echo htmlspecialchars($kontakt['message']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <a href="../Home Page/home.php">Kthehu</a>
</body>
</html>
