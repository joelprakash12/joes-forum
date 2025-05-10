<?php
include 'config/db.php';
include 'includes/header.php';
include 'includes/nav.php';

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

// Fetch categories (What, Where, etc.)
$categories = $mysqli->query("SELECT id, name FROM categories ORDER BY id");
?>

<main>
  <div class="container">
    <h2>Ask a New Question</h2>
    <form action="php/submit_question.php" method="POST">
      <label for="title">Question Title</label>
      <input type="text" name="title" id="title" required>

      <label for="description">Description</label>
      <textarea name="description" id="description" rows="6" required></textarea>

      <label for="category">Choose a 5W1H Category</label>
      <select name="category_id" id="category" required>
        <option value="">-- Select Category --</option>
        <?php while ($row = $categories->fetch_assoc()): ?>
          <option value="<?= $row['id'] ?>"><?= htmlspecialchars($row['name']) ?></option>
        <?php endwhile; ?>
      </select>

      <button type="submit">Submit Question</button>
    </form>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
