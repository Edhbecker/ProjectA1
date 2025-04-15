<?php
require_once __DIR__ . '/classes/sessao.php';
require_once 'classes/Autenticador.php';

Sessao::iniciar();
Autenticador::carregarUsuarios();

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'] ?? '';
$lembrar = isset($_POST['lembrar']);

$usuario = Autenticador::login($email, $senha);

if ($usuario) {
    Sessao::set('usuario', $usuario->getNome());
    if ($lembrar) {
        setcookie('email_usuario', $email, time() + 3600);
    }
    header('Location: dashboard.php');
} else {
    echo "E-mail ou senha incorretos.";
}
?>
