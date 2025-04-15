<?php
class Usuario {
    private $nome;
    private $email;
    private $senhaHash;

    public function __construct($nome, $email, $senha) {
        $this->nome = htmlspecialchars($nome);
        $this->email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $this->senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSenhaHash() {
        return $this->senhaHash;
    }

    public function autenticar($senha) {
        return password_verify($senha, $this->senhaHash);
    }
}
?>