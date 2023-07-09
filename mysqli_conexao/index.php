<?php

// usamos isso para se conectar ao banco de dados;

  # essa é uma das formas de fazer 
  $host = "localhost";
  $user = "root";
  $pass = "Darlin13#5";
  $db = "php1"; 
  
  $conn = new mysqli($host, $user, $pass, $db);

  if(($conn->connect_errno)){
    echo "Erro na conexão! <br>";

    #duas formas de verificar se a conexão foi um sucesso
    //  echo "Erro: " . mysqli_connect_error();
    echo "Erro: " . $conn->connect_error; // essa seria uma forma orientada a objetos;
  } else{
    echo "Conetado ao banco!";
  }


  # CUIDADO!!!  na hora de testar, ter cuidado para não mostrar a senha do banco no console ou na página
  # de modo que o usuário possa ver as informações sobre senhas, usuário, root, etc.

  /*  ISSO É UMA MEDIDA DE SEGURANÇA */

?>