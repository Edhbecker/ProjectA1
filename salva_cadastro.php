<?php
$nome = htmlspecialchars($_POST['nome']);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'];

if (!$nome || !$email || !$senha) {
    echo "Todos os campos são obrigatórios!";
    exit;
}

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$dados = "$nome|$email|$senhaHash" . PHP_EOL;

file_put_contents('usuarios.txt', $dados, FILE_APPEND);

header('Location: index.php');
exit;
?>
