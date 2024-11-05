<?php
session_start();


session_unset();

session_destroy();


header("Location: /Trabalho/views/home.php");
exit;
?>
