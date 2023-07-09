<?php
  
  $host  = "localhost";
  $user = "root";
  $pass = "Darlin13#5";
  $db = "php1";

  $conn = new mysqli($host, $user, $pass, $db);

  #### AQUI EU ESTOU CRIANDO TABELAS NO MYSQL. TO CRIANDO PELO PHP

 /* $q = "CREATE TABLE php1.teste (nome VARCHAR(50), sobrenome VARCHAR(30))";

  $conn->query($q);

  $conn->close();

  $q = "CREATE TABLE php1.ifsc (curso VARCHAR(30), materias VARCHAR(100))";

  $conn->query($q);

  $conn->close();*/


  ### apagando a tabela teste pelo php
  $q = "DROP TABLE php1.teste";

  
  $conn->query($q);

  $conn->close();


?>


