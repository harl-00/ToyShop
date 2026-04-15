<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teddy Collection</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<section class="grid">

<header>
    <img src="images/logo.png" alt="Teddy Collection Logo">
    <section>
        <h1>Teddy Collection</h1>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="items.php">Teddies</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="login.php">Member Area</a></li>
            </ul>
        </nav>
    </section>
</header>

<main>
    <section>
        <h2>Welcome</h2>
        <p>We provide a wide range of collectible teddy bears for enthusiasts and collectors.</p>
    </section>

    <section id="content">
        <section class="product">
            <img src="images/teddy1.jpg" alt="Classic Teddy">
            <p>Classic Teddy</p>
        </section>

        <section class="product">
            <img src="images/teddy2.jpg" alt="Brown Teddy">
            <p>Brown Teddy</p>
        </section>

        <section class="product">
            <img src="images/teddy3.jpg" alt="Vintage Teddy">
            <p>Vintage Teddy</p>
        </section>
    </section>
</main>



</section>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
</body>
</html>