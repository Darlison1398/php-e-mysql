<?php

  #  PARTE DE CONEXÃO COM O BANCO DE DADOS QUE EU DESEJO
  $host = "localhost";
  $user = "root";
  $pass = "Darlin13#5";
  $db = "php1"; 
  
  $conn = new mysqli($host, $user, $pass, $db);


  echo "CONECTANDO O PHP COM O BANCO DE DADOS E TRAZENDO OS DADOS PRA CÁ  <br>";
  echo "<br>";
  
  // Fazendo uma Query no php;
  $sql = "SELECT * FROM php1.itens";

  $conn->query($sql);

  print_r($conn);

  
  $conn->close();
?>