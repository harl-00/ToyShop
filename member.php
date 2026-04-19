<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
if ($_SESSION['role'] === 'admin' && $_SERVER["REQUEST_METHOD"] == "POST") {

    $image = $_FILES['image']['name'];

    move_uploaded_file(
        $_FILES['image']['tmp_name'],
        "images/" . $image
    );

    $stmt = $pdo->prepare("
        INSERT INTO teddy_bears (name, description, image)
        VALUES (:name, :description, :image)
    ");

    $stmt->execute([
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'image' => $image
    ]);
}
?>
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Member Area</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<section class="grid">

<header>
    <h1>Member Area</h1>
</header>

<main>

    <h2>Welcome Admin</h2>

    <p>You are now logged in.</p>

<?php if ($_SESSION['role'] === 'admin') { ?>

    <h3>Add Teddy</h3>

    <form method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Teddy Name" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <input type="file" name="image" required>
        <button type="submit">Add Teddy</button>
    </form>

<?php } else { ?>

    <h3>Member Area</h3>
    <p>As a user, you cannot edit teddies.</p>

<?php } ?>
    
        <a href="logout.php">
        <button type="button">Log Out</button>
        </a>

</main>

<footer>
    <p>Created by Harley</p>
</footer>

</section>

</body>
</html>
