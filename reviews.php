<?php error_reporting(E_ALL); ini_set('display_errors', 1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<section class="grid">

<header>
    <h1>Teddy Collection</h1>

    <nav>
        <a href="index.php">Home</a>
        <a href="items.php">Teddies</a>
        <a href="about.html">About us</a>
        <a href="contact.html">Contact us</a>
        <a href="login.php">Member Area</a>
        <a href="reviews.php">Reviews</a>
        <a href="login.php">Login</a>
    </nav>
</header>

<main>

<section>
    <h2>Customer Reviews</h2>

    <p>
        See what our customers are saying about our teddy bears. 
        We value all feedback and aim to provide the best quality products.
    </p>
</section>


<section class="product">
    <h3>Emily R.</h3>
    <p>"Amazing quality and perfect gift!"</p>

    <label>Rating:</label>
    <meter value="5" min="0" max="5">5 out of 5</meter>
</section>


<section class="product">
    <h3>James K.</h3>
    <p>"Great service and fast delivery. Highly recommend."</p>

    <label>Rating:</label>
    <meter value="4" min="0" max="5">4 out of 5</meter>
</section>


<section class="product">
    <h3>Sophia L.</h3>
    <p>"Good selection of teddy bears, will buy again."</p>

    <label>Rating:</label>
    <meter value="4.5" min="0" max="5">4.5 out of 5</meter>
</section>


<section class="product">
    <h3>Daniel M.</h3>
    <p>"Nice website and easy to use."</p>

    <label>Rating:</label>
    <meter value="4" min="0" max="5">4 out of 5</meter>
</section>

<section>
    <details>
        <summary>How ratings are calculated</summary>
        <p>
            Ratings are based on customer feedback and product satisfaction. 
            Each review is scored out of 5 from users.
        </p>
    </details>
</section>

</main>

<footer>
    <p>Created by Harley</p>
</footer>

</section>

</body>
</html>
