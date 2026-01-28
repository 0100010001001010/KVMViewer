<?php
die("Serving file: " . __FILE__);
session_start();

$error = '';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // DEMO USERS
  if ($username === 'admin' && $password === 'admin') {
    $_SESSION['role'] = 'admin';
    header('Location: admin.php');
    exit;
  }

  if ($username === 'user' && $password === 'user') {
    $_SESSION['role'] = 'user';
    header('Location: site.php');
    exit;
  }

  $error = "Invalid login (demo credentials: admin/admin or user/user)";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard Login</title>
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>

  <div class="panel">
    <h1>Welcome to your personal ImageOne Dashboard</h1>
    <p>Please login to access your dashboard.</p>
    <div class="timestamp">Last Updated at <?= date('H:i:s'); ?></div>
  </div>

  <div class="panel small">
    <h1>Login</h1>

    <?php if (!empty($error)): ?>
      <p style="color:#F48771;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button name="login">Login</button>
    </form>
  </div>

</body>

</html>
