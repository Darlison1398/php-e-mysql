<?php

    
   $host  = "localhost";
   $user = "root";
   $pass = "Darlin13#5";
   $db = "php1";

   $conn = new mysqli($host, $user, $pass, $db);

   $id = 3;

   $stmt = $conn->prepare("SELECT * FROM php1.itens WHERE id = ?");
   $stmt->bind_param("i", $id);

   $stmt->execute();

   $result = $stmt->get_result();
   $itens = $result->fetch_row();

   print_r($itens);

   $conn->close();