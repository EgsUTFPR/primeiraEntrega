<?php
session_start();


if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        
      
        foreach ($_SESSION['users'] as $existingUser) {
            if ($existingUser['username'] === $username) {
                echo "Nome de usuário já existe";
                header("Location: /Trabalho/views/home.php");
                exit; 
            }
        }

        
        $_SESSION['users'][] = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        
        header("Location: /Trabalho/views/home.php");
        exit;
    } else {
        echo "Preencha todos os campos";
    }
}
?>
