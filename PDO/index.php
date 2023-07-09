<?php


# se Conectando ao banco de dados MySQL vai PDO;
  $host = "localhost";
  $db = "php1";
  $user = "root";
  $pass = "Darlin13#5";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);