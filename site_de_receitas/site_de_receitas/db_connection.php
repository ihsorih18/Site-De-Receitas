<?php
$servername = "localhost";
$username = "root";
$password = ""; // Sem senha por padrão no XAMPP
$dbname = "site_receitas";

// Conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
