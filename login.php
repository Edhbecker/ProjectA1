<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Login</title></head>
<body>
<h2>Login</h2>
<form method="post" action="processa_login.php">
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>
    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>
    <label><input type="checkbox" name="lembrar" value="1"> Lembrar E-mail</label><br><br>
    <button type="submit">Entrar</button>
</form>
<a href="cadastro.php">Cadastrar-se</a>
</body>
</html>