<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_reservas";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome_cliente = $_POST['nome_cliente'];
$numero_pessoas = $_POST['numero_pessoas'];
$data_reserva = $_POST['data_reserva'];

$sql = "INSERT INTO reservas (nome_cliente, numero_pessoas, data_reserva) 
        VALUES ('$nome_cliente', '$numero_pessoas', '$data_reserva')";

if ($conn->query($sql) === TRUE) {
    echo "Reserva feita com sucesso!";
} else {
    echo "Erro ao fazer a reserva: " . $conn->error;
}

$conn->close();
?>


