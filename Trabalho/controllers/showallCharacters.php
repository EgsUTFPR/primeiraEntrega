<?php
session_start();
require_once "../models/searchChar.php";


if (!isset($_SESSION['id_users'])) {
    
    header("Location:../views/loginForm.php");
    exit;
}


$userId = $_SESSION['id_users'];


$characters = getCharactersByUserId($userId);


require_once "../views/buscaCharacter.php";
?>
