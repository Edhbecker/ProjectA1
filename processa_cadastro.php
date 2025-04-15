<?php
require_once 'classes/Usuario.php';
require_once 'classes/Autenticador.php';

$usuario = new Usuario($_POST['nome'], $_POST['email'], $_POST['senha']);
Autenticador::registrar($usuario);
header('Location: login.php');
exit;
?>