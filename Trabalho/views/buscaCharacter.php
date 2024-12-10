<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Busca</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body>
    <h1>Busca</h1>
    <form action="../controllers/showallCharacters.php" method="GET">
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td><label for="search">Digite sua busca:</label></td>
                <td><input type="text" id="search" name="search" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Buscar</button>
                    <button onclick="window.location.href='../views/mainPage.php';">Voltar</button>
                </td>
            </tr>
        </table>
    </form>

    <h2>Lista de Personagens</h2>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Nome</th>
            <th>Classe</th>
            <th>Nível</th>
        </tr>
        <?php if (!empty($characters)): ?>
            <?php foreach ($characters as $character): ?>
                <tr>
                    <td><?= htmlspecialchars($character['name']) ?></td>
                    <td><?= htmlspecialchars($character['class']) ?></td>
                    <td><?= htmlspecialchars($character['level']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">Nenhum personagem encontrado.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
