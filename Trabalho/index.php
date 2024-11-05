<?php
session_start();


if (!isset($_SESSION['loggedin'])) {
    if (isset($_COOKIE['loggedin']) && $_COOKIE['loggedin'] == true) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $_COOKIE['username'];
        header("Location: views/mainPage.php");

    }
}


if (!isset($_SESSION['loggedin'])) {
    header("Location: views/home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body>
    <div class="welcome">
        <h1>Bem-vindo, <?= htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Você está logado.</p>
        <button onclick="window.location.href='home.php'">Escolher Padrão de Ficha</button>
    </div>
</body>
</html>
