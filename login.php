<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
$stmt->execute([
    'email' => $_POST['email']
]);

$user = $stmt->fetch();

if ($user && password_verify($_POST['password'], $user['password'])) {

    $_SESSION['user'] = $user['user_id'];
    $_SESSION['role'] = $user['role'];

    header("Location: member.php");
    exit();

} else {
    $error = "Invalid login";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<section class="grid">

<header>
    <h1>Teddy Collection</h1>
</header>

<main>

    <h2>Member Login</h2>

    <?php if(isset($error)) { ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php } ?>

    <form method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <p>
        Admin: admin@test.com / 1234<br>
        User: user@test.com / 1234
    </p>

</main>

<footer>
    <p>Created by Harley</p>
</footer>

</section>

</body>
</html>
