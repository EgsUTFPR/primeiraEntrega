<?php


$username = "admin";
$password = "admin";


session_start();


if (isset($_SESSION['username'])) {
    header("Location: /Trabalho/views/mainPage.php");
} else {
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['username'] = $username;
            header("Location: /Trabalho/views/mainPage.php");
            exit;
        } else {
            echo 'Senha ou Nome Errado';
            echo "<script>location.href='/Trabalho/views/home.php'</script>";
            exit;
        }
    } else {
        
        header("Location: /Trabalho/views/home.php");
        exit; 
    }
}
?>
