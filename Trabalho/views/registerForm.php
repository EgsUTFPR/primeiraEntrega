<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body>
    <h1>Cadastro</h1>
    <form action="../controllers/registerController.php" method="post">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Cadastrar">
    </form>
    <a href="../views/home.php" class="back-button">
        <button>Voltar</button>
    </a>
</body>
</html>
