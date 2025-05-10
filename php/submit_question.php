<?php
require '../config/db.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: ../login.php");
  exit;
}

$title = trim($_POST['title']);
$description = trim($_POST['description']);
$category_id = (int)$_POST['category_id'];
$user_id = $_SESSION['user_id'];

if ($title && $description && $category_id) {
  $stmt = $mysqli->prepare("INSERT INTO questions (user_id, category_id, title, description) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("iiss", $user_id, $category_id, $title, $description);
  $stmt->execute();
  header("Location: ../index.php?success=1");
} else {
  header("Location: ../ask.php?error=1");
}
