<?php

    
   $host  = "localhost";
   $user = "root";
   $pass = "Darlin13#5";
   $db = "php1";

   $conn = new mysqli($host, $user, $pass, $db);


   // imprimindo os dados após o id passado como parâmetro;
   $id = 4;

   $stmt = $conn->prepare("SELECT * FROM php1.itens WHERE id > ?");

   $stmt->bind_param("i", $id);

   $stmt->execute();
   
   $result = $stmt->get_result();
   $data = $result->fetch_all();

   print_r($data);
