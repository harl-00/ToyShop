<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
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

<section>
    <h2>Admin Dashboard</h2>

    <p>
        Welcome to the member area. From here you can manage the teddy bear collection 
        by adding new items to the database.
    </p>

    <p>
        Use the form below to upload a new teddy, including its name, description, 
        and image. Once added, it will automatically appear on the items page.
    </p>
</section>



    <h3>Add Teddy</h3>

    <form method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Teddy Name" required>
        <input type="text" name="description" placeholder="Description" required>
        <input type="file" name="image" required>
        <button type="submit">Add</button>
    </form>
    
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