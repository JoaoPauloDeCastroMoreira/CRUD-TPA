<?php
echo "Inserindo dados abaixo... <br>";
require ('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $nome = $_POST["nome"] . '<br>';
    echo $email = $_POST["email"];
    $senha = $_POST["senha"];
    echo "<hr>";

    // Função para inserir um novo registro no banco de dados
    function inserirRegistro($pdo, $nome, $email, $senha) {
        $sql = "INSERT INTO alunos (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
if (inserirRegistro($pdo, $nome, $email, $senha)) {
    echo "Registro inserido com sucesso!<br>" . "<a href='index.php'>HOME</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>



