<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="../style/styles.css">
    <script>
        function workInProgress() {
            alert("Trabalho em progresso");
        }

        function openTab(tabName) {

            const tabs = document.querySelectorAll('.tab-content');
            tabs.forEach(tab => {
                tab.style.display = 'none';
            });

  
            document.getElementById(tabName).style.display = 'block';
        }

        window.onload = function() {

            openTab('mainPage');
        };
    </script>
</head>
<body>
    <h1>Biblioteca Élfica</h1>
 

    <div class="tabs">
        <button onclick="openTab('createCharacter')">Criar Novo Personagem</button>
        <button onclick="openTab('searchCharacter')">Pesquisar Personagem</button>
    </div>
    <form action="/Trabalho/controllers/logout.php" method="POST">
    <button type="submit">Logout</button>
    </form>
  
    <div id="mainPage" class="tab-content">
        <h2>Bem-vindo à Biblioteca Élfica!</h2>
        <p>Escolha uma opção para continuar.</p>
    </div>

   
    <div id="createCharacter" class="tab-content" style="display:none;">
        <h2>Criar Novo Personagem</h2>
        <p>Escolha um Sistema:</p>
        <button onclick="window.location.href='/Trabalho/views/2014characterForm.php'">DnD 5e 2014</button>
        <button onclick="workInProgress()">Call of Cthullu</button>
    </div>

    <div id="searchCharacter" class="tab-content" style="display:none;">
    <h2>Pesquisar Personagem</h2>
    <button type="button" onclick="window.location.href='buscaCharacter.php'">Buscar Personagem</button>
</div>

       
    </div>
    </div>
</body>
</html>
