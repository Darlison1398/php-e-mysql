<?php

$host  = "localhost";
$user = "root";
$pass = "Darlin13#5";
$db = "php1";

$conn = new mysqli($host, $user, $pass, $db);

/*   INSERINDO DADOS NA TABELAS  */
# variáveis. Os valores dessas variáveis vão se inseridos dentro da tabela ifsc;
$table = "ifsc";
$curso = "ADS";
$materias = "POO";

$q = "INSERT INTO $table (curso, materias) VALUES ('$curso', '$materias')";

$conn->query($q);

$conn->close();