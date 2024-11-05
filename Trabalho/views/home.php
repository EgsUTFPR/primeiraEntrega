<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body>
    <h1>Bem Vindo</h1>

    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        <p>Você está logado como <?= htmlspecialchars($_SESSION['username']); ?>.</p>
        <button onclick="window.location.href='index.php'">Página Principal</button>
    <?php else: ?>
        <p>Escolha uma opção:</p>
        <button onclick="window.location.href='/Trabalho/views/loginForm.php'">Login</button>
        <button onclick="window.location.href='/Trabalho/views/registerForm.php'">Cadastro</button>
    <?php endif; ?>
</body>
</html>
