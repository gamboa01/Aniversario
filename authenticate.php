<?php
session_start();

// Contraseña predeterminada
define('PASSWORD', '111223');

// Validar contraseña
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    if ($password === PASSWORD) {
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Contraseña incorrecta'); window.location.href = 'login.php';</script>";
    }
} else {
    header("Location: login.php");
    exit();
}
?>
