<?php

    
   $host  = "localhost";
   $user = "root";
   $pass = "Darlin13#5";
   $db = "php1";

   $conn = new mysqli($host, $user, $pass, $db);

   $id = 3;

   $stmt = $conn->prepare("UPDATE php1.itens SET nome= ?, descricao= ? WHERE id = ?");
   $nome = "guarda-roupa";
   $descricao = "Novinho em folha";

   $stmt->bind_param("ssi", $nome, $descricao, $id);

   $stmt->execute();

   if($stmt->error){
      echo "Erro: " . $stmt->error;
   }