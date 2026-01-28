<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
  header('Location: index.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <div class="panel">
    <h1>Admin Dashboard</h1>
    <p>Welcome, Admin!</p>
    <a href="logout.php">Logout</a>
  </div>
</body>

</html>
