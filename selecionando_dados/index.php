<?php

$host  = "localhost";
$user = "root";
$pass = "Darlin13#5";
$db = "php1";

$conn = new mysqli($host, $user, $pass, $db);


$q = "SELECT * FROM php1.itens";

$result  = $conn->query($q);

$conn->close();

# ele imprime apenas o primeiro resultado da tabela;
$itens = $result->fetch_assoc();

# imprimindo todos os resultados da tabela selecionada;
$item = $result->fetch_all();

// imprimindo apenas o primeiro resultado da tabela
print_r($itens);

// imprimindo todos os resultados da tabela
print_r($item);