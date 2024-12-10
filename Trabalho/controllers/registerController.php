<?php
session_start(); 
require_once "../models/database.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    
    $sqlCheck = "SELECT COUNT(*) FROM users WHERE name_users = ?";
    $stmtCheck = mysqli_prepare($connection, $sqlCheck);

    if ($stmtCheck === false) {
        echo "Erro ao preparar a consulta: " . mysqli_error($connection);
        exit;
    }

    mysqli_stmt_bind_param($stmtCheck, "s", $username);
    mysqli_stmt_execute($stmtCheck);
    mysqli_stmt_bind_result($stmtCheck, $userCount);
    mysqli_stmt_fetch($stmtCheck);
    mysqli_stmt_close($stmtCheck);

    if ($userCount > 0) {
        echo "Nome de usuário já está em uso. Por favor, escolha outro.";
        mysqli_close($connection);
        exit;
    }

    
    $sql = "INSERT INTO users(name_users, pass_users) VALUES(?, ?)";
    $stmt = mysqli_prepare($connection, $sql);

    if ($stmt === false) {
        echo "Erro ao preparar a consulta: " . mysqli_error($connection);
        exit;
    }

    
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);

    if (mysqli_stmt_execute($stmt)) {
        
        $userId = mysqli_insert_id($connection);

        
        $_SESSION['id_users'] = $userId;

        header("Location: ../index.php");
        exit;

    } else {
        echo "Erro ao registrar: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
