<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Novo Cliente</title>
</head>
<body>
    <h1>Adicionar Novo Cliente</h1>
    <form action="insert.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
