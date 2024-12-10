<?php
session_start();
require '../models/characterModel.php';
require '../models/database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $character = new characterModel();
    
   
    $character->name = $_POST['name'];
    $character->class = $_POST['class'];
    $character->level = $_POST['level'];
    $character->race = $_POST['race'];
    $character->background = $_POST['background'];
    $character->alignment = $_POST['alignment'];
    $character->experience = $_POST['experience'];
    $character->forca = $_POST['forca'];
    $character->destreza = $_POST['destreza'];
    $character->constituicao = $_POST['constituicao'];
    $character->inteligencia = $_POST['inteligencia'];
    $character->sabedoria = $_POST['sabedoria'];
    $character->carisma = $_POST['carisma'];
    $character->armor_class = $_POST['armor_class'];
    $character->initiative = $_POST['initiative'];
    $character->movement = $_POST['movement'];
    $character->inventory = $_POST['inventory'];
    $character->proficiencies = $_POST['proficiencies'];
    $character->features_traits = $_POST['features_traits'];

    
    $character->save($connection);

    
    header("Location: ../views/mainPage.php");
}
?>
