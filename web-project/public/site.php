<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
  header('Location: index.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <div class="panel">
    <h1>User Dashboard</h1>
    <p>Welcome, User!</p>
    <a href="logout.php">Logout</a>
  </div>
</body>

</html>
