<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="processa.php">
        <label>E-mail:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <label>Lembrar E-mail?</label>
        <input type="checkbox" name="lembrar" value="1"><br><br>

        <button type="submit">Acessar</button><br><br>

        <label>Não possui cadastro?</label>
        <a href="cadastro.php">Inscrever-se</a>
    </form>
</body>
</html>
