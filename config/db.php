<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$mysqli = new mysqli("localhost", "root", "", "joes_forum");
if ($mysqli->connect_error) {
  die("DB connection failed: " . $mysqli->connect_error);
}
?>
