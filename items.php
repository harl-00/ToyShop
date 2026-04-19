<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Teddy Items</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<section class="grid">

<header>
    <img src="images/logo.png" alt="Teddy Logo">
    <section>
        <h1>Teddy Collection</h1>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="items.php">Teddies</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="login.php">Member Area</a></li>
                <li><a href="reviews.php">Reviews</a></li>
            </ul>
        </nav>
    </section>
</header>

<main>
    <section>
        <h2>All Teddy Bears</h2>

        <?php
        $stmt = $pdo->query("SELECT * FROM teddy_bears");
        $rows = $stmt->fetchAll();

        if (count($rows) > 0) {
            foreach ($rows as $row) {
                echo "<section class='product'>";
                echo "<img src='images/" . htmlspecialchars($row['image']) . "' alt='Teddy'>";
                echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                echo "</section>";
            }
        } else {
            echo "<p>No teddy bears available.</p>";
        }
        ?>
    </section>
</main>

<?php include 'footer.php'; ?>

</section>

</body>
</html>
