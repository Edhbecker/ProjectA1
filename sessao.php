<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

$usuario = $_SESSION['usuario'];
$email = $_COOKIE['email_usuario'] ?? 'Nao lembrado';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bem-vindo</title>
</head>
<body>
    <h2>Bem-vindo, <?= $usuario ?>!</h2>
    <p>E-mail lembrado: <?= $email ?></p>

    <a href="logout.php">Sair</a>
</body>
</html>
