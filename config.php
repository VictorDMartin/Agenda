<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agenda";

// Cria uma conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password,$dbname);



// Verifica se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

?>
