<?php
session_start();

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'] ?? '';
$lembrar = isset($_POST['lembrar']);

// Verificação básica
if (!$email || empty($senha)) {
    echo "E-mail e senha são obrigatórios!";
    exit;
}

// Verificar se o usuário existe no arquivo
$arquivo = 'usuarios.txt';

if (!file_exists($arquivo)) {
    echo "Nenhum usuário cadastrado!";
    exit;
}

$linhas = file($arquivo);
$usuarioEncontrado = false;

foreach ($linhas as $linha) {
    list($nomeSalvo, $emailSalvo, $senhaHash) = explode('|', trim($linha));

    if ($email === $emailSalvo && password_verify($senha, $senhaHash)) {
        $_SESSION['usuario'] = $nomeSalvo;

        if ($lembrar) {
            setcookie("email_usuario", $email, time() + 3600); // 1 hora
        }

        header("Location: sessao.php");
        exit;
    }
}

echo "E-mail ou senha incorretos!";
exit;
?>
