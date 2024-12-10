<?php
require_once "../models/database.php";

function getCharactersByUserId($userId) {
    global $connection;

    
    $sql = "SELECT * FROM characters2014 WHERE id_users = ?";
    
    $stmt = $connection->prepare($sql);
    if ($stmt === false) {
        die('Erro na preparação da consulta: ' . $connection->error);
    }

    $stmt->bind_param('i', $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $characters = [];

    while ($row = $result->fetch_assoc()) {
        $characters[] = $row;
    }

    $stmt->close();

    return $characters;
}
?>
