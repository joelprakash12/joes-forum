<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config/db.php';
?>

<?php include 'config/db.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>
<main>
  <h2>Login</h2>
  <form action="php/login_process.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>
</main>
<?php include 'includes/footer.php'; ?>
