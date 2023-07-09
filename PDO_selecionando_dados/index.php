<?php

// CAMINHO DO BANCO
$host = "localhost";
$db = "php1";
$user = "root";
$pass = "Darlin13#5";

// conectando como o banco
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

# selecionando dados
$id = 3;

$stmt = $conn->prepare("SELECT * FROM php1.itens WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);

//print_r($data);

echo "<br>";
echo "<br>";

// PDO_selecionando_dados

// IMPRIMINDO TODOS OS DADOS DA TABELA
$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($itens);