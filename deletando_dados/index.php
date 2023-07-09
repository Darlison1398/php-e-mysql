<?php

    /*  DEVEMOS COLOCAR O WHERE PARA NÃO DELETAR O BANCO INTEIRO  */

   $host  = "localhost";
   $user = "root";
   $pass = "Darlin13#5";
   $db = "php1";

   $conn = new mysqli($host, $user, $pass, $db);


   // DELETANDO dado/coluna de uma tabela. Aqui, escolhemos o dado pelo nome, mas poderia ter sido pelo id também
   $nome = "MESA";

   $stmt = $conn->prepare("DELETE FROM php1.itens WHERE nome = ?");

   $stmt->bind_param("s", $nome);

   $stmt->execute();

   $conn->close();