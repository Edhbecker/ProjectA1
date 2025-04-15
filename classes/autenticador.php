<?php
require_once 'Usuario.php';

class Autenticador {
    private static $usuarios = [];
    private static $arquivo = 'usuarios.txt';

    public static function carregarUsuarios() {
        if (!file_exists(self::$arquivo)) return;
        $linhas = file(self::$arquivo);
        foreach ($linhas as $linha) {
            list($nome, $email, $senhaHash) = explode('|', trim($linha));
            $usuario = new Usuario($nome, $email, '');
            $reflexao = new ReflectionClass($usuario);
            $prop = $reflexao->getProperty('senhaHash');
            $prop->setAccessible(true);
            $prop->setValue($usuario, $senhaHash);
            self::$usuarios[] = $usuario;
        }
    }

    public static function registrar(Usuario $usuario) {
        $linha = $usuario->getNome() . '|' . $usuario->getEmail() . '|' . $usuario->getSenhaHash() . PHP_EOL;
        file_put_contents(self::$arquivo, $linha, FILE_APPEND);
    }

    public static function login($email, $senha) {
        foreach (self::$usuarios as $usuario) {
            if ($usuario->getEmail() === $email && $usuario->autenticar($senha)) {
                return $usuario;
            }
        }
        return null;
    }
}
?>