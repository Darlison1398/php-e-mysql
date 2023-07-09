<?php

// CAMINHO DO BANCO
$host = "localhost";
$db = "php1";
$user = "root";
$pass = "Darlin13#5";

// conectando como o banco
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// Atualizando dados;
$id = 2;
$nome = "Notebook";
$descricao = "Dell i7 última geração";

$stmt = $conn->prepare("UPDATE php1.itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();