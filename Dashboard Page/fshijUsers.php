<?php
session_start();

include_once '../Database Page/Database.php';
$db = new Database();
$connection = $db->getConnection();

if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    
    $query = "DELETE FROM users WHERE id = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $userId);
    
    if ($stmt->execute()) {
        echo "<script>
        alert('Përdoruesi u fshi me sukses');
        window.location.href = 'menaxhoUsers.php'; </script>";
    } else {
        echo "<script>
        alert('Ka ndodhur një gabim');
        window.location.href = 'menaxhoUsers.php'; </script>";
    }
} else {
    echo "<script>
    alert('ID e përdoruesit nuk është e specifikuar');
    window.location.href = 'menaxhoUsers.php'; </script>";
}
?>
