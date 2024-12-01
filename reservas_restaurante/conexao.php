<?php
$servername = "localhost"; // ou o endereço do servidor MySQL
$username = "root"; // seu usuário do MySQL
$password = ""; // sua senha do MySQL
$dbname = "nome_do_banco"; // nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("A conexão falhou: " . $conn->connect_error);
}
?>
