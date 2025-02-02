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

$query = "SELECT * FROM users WHERE role = 'user' ORDER BY id DESC";
$stmt = $connection->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

$countQuery = "SELECT COUNT(*) AS total_users FROM users WHERE role = 'user'";
$countStmt = $connection->prepare($countQuery);
$countStmt->execute();
$countResult = $countStmt->fetch(PDO::FETCH_ASSOC);
$totalUsers = $countResult['total_users']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="./menaxhoUsers.css">
</head>
<body>

<div id="pageContainer">
    <h1>MENAXHO PËRDORUESIT</h1>

    <p style="margin-bottom:15px">Gjithsej Përdorues: <?php echo $totalUsers; ?></p>

    <?php
    if (empty($users)) {
        echo '<p style="color: red; font-weight: bold;">Nuk ka përdorues!</p>';
    }
    ?>

    <div id="tableDIV">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td>
                        <a href="../Dashboard Page/fshijUsers.php?id=<?php echo $user['id']; ?>"><span>Delete User</span></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> 
    </div>

    <a id="dashboardID" href="../Dashboard Page/dashboard.php">Kthehu në dashboard</a>
</div>

</body>
</html>
