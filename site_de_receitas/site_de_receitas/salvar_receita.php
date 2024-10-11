<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $ingredientes = $_POST['ingredientes'];
    $modo_preparo = $_POST['modo_preparo'];

    $sql = "INSERT INTO receitas (titulo, descricao, ingredientes, modo_preparo)
            VALUES ('$titulo', '$descricao', '$ingredientes', '$modo_preparo')";

    if ($conn->query($sql) === TRUE) {
        echo "Receita adicionada com sucesso!";
    } else {
        echo "Erro ao adicionar receita: " . $conn->error;
    }

    $conn->close();
}
?>
