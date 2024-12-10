<?php
session_start();
require_once "../models/database.php";

$username = $_POST['username'];
$password = $_POST['password'];

if ($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}


$stmt = $connection->prepare("SELECT id_users FROM users WHERE name_users = ? AND pass_users = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['id_users'] = $row['id_users'];
    
    header("Location: ../views/mainPage.php");
    exit;
} else {
    header("Location: ../views/loginForm.php");
    exit;
}

$stmt->close();
$connection->close();
?>
