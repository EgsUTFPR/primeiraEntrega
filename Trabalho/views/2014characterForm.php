<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Personagem D&D 5e</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body>
    <h1>Ficha de Personagem D&D 5e 2014</h1>
    <form action="" method="post">
        <label for="name">Nome do Personagem:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="class">Classe:</label>
        <input type="text" id="class" name="class" required><br>

        <label for="level">Nível:</label>
        <input type="number" id="level" name="level" min="1" max="20" required><br>

        <label for="race">Raça:</label>
        <input type="text" id="race" name="race" required><br>

        <label for="background">Antecedente:</label>
        <input type="text" id="background" name="background"><br>

        <label for="alignment">Tendência:</label>
        <select id="alignment" name="alignment">
            <option>Leal e Bom</option>
            <option>Neutro e Bom</option>
            <option>Caótico e Bom</option>
            <option>Leal e Neutro</option>
            <option>Neutro e Neutro</option>
            <option>Caótico e Neutro</option>
            <option>Leal e Mal</option>
            <option>Neutro e Mal</option>
            <option>Caótico e Mal</option>
        </select><br>

        <label for="experience">XP:</label>
        <input type="number" id="experience" name="experience" min="0"><br>

        <h2>Atributos</h2>
        <label for="forca">Força:</label>
        <input type="number" id="forca" name="forca" min="1" max="20" required><br>

        <label for="destreza">Destreza:</label>
        <input type="number" id="destreza" name="destreza" min="1" max="20" required><br>

        <label for="constituicao">Constituição:</label>
        <input type="number" id="constituicao" name="constituicao" min="1" max="20" required><br>

        <label for="inteligencia">Inteligência:</label>
        <input type="number" id="inteligencia" name="inteligencia" min="1" max="20" required><br>

        <label for="sabedoria">Sabedoria:</label>
        <input type="number" id="sabedoria" name="sabedoria" min="1" max="20" required><br>

        <label for="carisma">Carisma:</label>
        <input type="number" id="carisma" name="carisma" min="1" max="20" required><br>

        <h2>Status</h2>
        <label for="armor_class">Classe de Armadura:</label>
        <input type="number" id="armor_class" name="armor_class" min="0" required><br>

        <label for="initiative">Iniciativa:</label>
        <input type="number" id="initiative" name="initiative" required><br>

        <label for="movement">Movimentação:</label>
        <input type="number" id="movement" name="movement" min="0" required><br>

        <h2>Inventário</h2>
        <textarea id="inventory" name="inventory" rows="4" placeholder="..."></textarea><br>

        <h2>Proficiências</h2>
        <textarea id="proficiencies" name="proficiencies" rows="4" placeholder="..."></textarea><br>

        <h2>Features & Traits</h2>
        <textarea id="features_traits" name="features_traits" rows="4" placeholder="..."></textarea><br>

        <input type="submit" value="Salvar Ficha">
    </form>
    <a href="../views/mainPage.php" class="back-button">
        <button>Voltar</button>
    </a>
</body>
</html>
