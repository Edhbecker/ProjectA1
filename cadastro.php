<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Cadastro</title></head>
<body>
<h2>Cadastro</h2>
<form method="post" action="processa_cadastro.php">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>
    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>
    <button type="submit">Cadastrar</button>
</form>
<a href="login.php">Voltar ao login</a>
</body>
</html>
