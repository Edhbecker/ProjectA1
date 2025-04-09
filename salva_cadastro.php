<?php
$nome = htmlspecialchars($_POST['nome']);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'];

if (!$nome || !$email || !$senha) {
    echo "Todos os campos são obrigatórios!";
    exit;
}

// Criptografar senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Estrutura para salvar
$dados = "$nome|$email|$senhaHash" . PHP_EOL;

// Salvar em arquivo
file_put_contents('usuarios.txt', $dados, FILE_APPEND);

// Redirecionar para login
header('Location: index.php');
exit;
?>
