<?php

    
   $host  = "localhost";
   $user = "root";
   $pass = "Darlin13#5";
   $db = "php1";

   $conn = new mysqli($host, $user, $pass, $db);

   $curso = "Gestão Empresarial";
   $materias = "FUNDAMENTOS DA ADM";

   $stmt = $conn->prepare("INSERT INTO php1.ifsc (curso, materias) VALUES (?, ?)");

   $stmt->bind_param("ss", $curso, $materias);
   
   $stmt->execute();


