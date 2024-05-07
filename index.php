<!DOCTYPE html>
<html>
<head>
    <title>CRUD de USUARIO</title>
</head>
<body>
    <h1>Lista de USUARIO</h1>
    <a href="create.php">Adicionar Novo Usuario</a>
    <?php
        require ('conexao.php');

        // Função para listar todos os registros do banco de dados
        function listarRegistros($pdo) {
        $sql = "SELECT * FROM usuarios";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        // Listar registros
        $registros = listarRegistros($pdo);
            // Exibindo os dados em uma tabela
            echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>senha</th>
                </tr>";
            foreach ($registros as $registro) {
                echo "<tr>";
                echo "<td>" . $registro['id'] . "</td>";
                echo "<td>" . $registro['nome'] . "</td>";
                echo "<td>" . $registro['email'] . "</td>";
                echo "<td>" . $registro['senha'] . "</td>";
                echo "<td>
                    <a href='edit.php?id=" . $registro['id'] . "'>Editar</a>
                    <a href='delete.php?id=" . $registro['id'] . "'>Excluir</a>
                </td>";
                }
                echo "</tr>";
            echo "</table>";
    ?>
</body>
</html>
