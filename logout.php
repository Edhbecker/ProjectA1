<?php
require_once __DIR__ . '/classes/sessao.php';
Sessao::iniciar();
Sessao::destruir();
header('Location: login.php');
exit;
