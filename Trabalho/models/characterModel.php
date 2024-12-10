<?php
require_once '../models/database.php';

class characterModel {
    public $name;
    public $class;
    public $level;
    public $race;
    public $background;
    public $alignment;
    public $experience;
    public $forca;
    public $destreza;
    public $constituicao;
    public $inteligencia;
    public $sabedoria;
    public $carisma;
    public $armor_class;
    public $initiative;
    public $movement;
    public $inventory;
    public $proficiencies;
    public $features_traits;

    
    public function save($connection) {
        
        if (!isset($_SESSION['id_users'])) {
            echo "Usuário não está logado.";
            return;
        }

        
        $id_users = $_SESSION['id_users'];

        
        $sql = "INSERT INTO characters2014 
        (name, class, level, race, background, alignment, experience, forca, destreza, constituicao, inteligencia, sabedoria, carisma, armor_class, initiative, movement, inventory, proficiencies, features_traits, id_users)
        VALUES 
        (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($connection, $sql)) {
           
            mysqli_stmt_bind_param($stmt, "ssisssiiiiiiiiiisssi", 
                $this->name, 
                $this->class, 
                $this->level, 
                $this->race, 
                $this->background, 
                $this->alignment, 
                $this->experience, 
                $this->forca, 
                $this->destreza, 
                $this->constituicao, 
                $this->inteligencia, 
                $this->sabedoria, 
                $this->carisma, 
                $this->armor_class, 
                $this->initiative, 
                $this->movement, 
                $this->inventory, 
                $this->proficiencies, 
                $this->features_traits,
                $id_users 
            );

            if (mysqli_stmt_execute($stmt)) {
                echo "Ficha salva com sucesso!";
            } else {
                echo "Erro ao salvar a ficha: " . mysqli_error($connection);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Erro ao preparar a consulta: " . mysqli_error($connection);
        }
    }
}
?>
