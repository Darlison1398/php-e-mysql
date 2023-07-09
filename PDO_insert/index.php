
<?php

# inserindo dados no banco, com o PDO;

// CAMINHO DO BANCO
$host = "localhost";
$db = "php1";
$user = "root";
$pass = "Darlin13#5";

// conectando como o banco
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// INSERINDO DADOS
$stmt = $conn->prepare("INSERT INTO php1.itens(nome, descricao) VALUES (:nome, :descricao)");

$nome = "Galaxy Luz";
$descricao = "Um belo projetor de luz";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();