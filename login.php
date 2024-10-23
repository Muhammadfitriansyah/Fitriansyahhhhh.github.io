<?php
session_start();
require 'connection.php';

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM orders WHERE name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['name'];
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid name or password.";
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
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="login.php" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
        <p>Belum punya akun? <a href="register.php">Register</a></p>
    </form>
</body>
</html>
