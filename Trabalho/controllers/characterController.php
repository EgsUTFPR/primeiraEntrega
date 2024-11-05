<?php
require_once 'models/character.php';

class CharacterController {
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $character = new Character($_POST);

            if ($character->isValid()) {
               
                echo "Ficha salva com sucesso!";
            } else {
                echo "Preencha todos os campos obrigatórios!";
            }
        }

        
        include 'views/characterForm.php';
    }
}
?>
