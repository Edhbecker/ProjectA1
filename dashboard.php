<?php
require_once __DIR__ . '/classes/sessao.php';
Sessao::iniciar();

$usuario = Sessao::get('usuario');

if (!$usuario) {
    header('Location: login.php');
    exit;
}

$email = $_COOKIE['email_usuario'] ?? 'Não lembrado';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bem-vindo</title>
</head>
<body>
    <h2>Bem-vindo, <?= htmlspecialchars($usuario) ?>!</h2>
    <p>E-mail lembrado: <?= htmlspecialchars($email) ?></p>
    <a href="logout.php">Sair</a>
</body>
</html>
