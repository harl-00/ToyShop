<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
require_once 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
    $stmt->execute([
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]);

    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['user'] = $user['user_id'];
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
</head>

<body>

<h2>Member Login</h2>

<?php if(isset($error)) echo "<p>$error</p>"; ?>

<form method="post">
    <input type="email" name="email" required>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>

</body>
</html>