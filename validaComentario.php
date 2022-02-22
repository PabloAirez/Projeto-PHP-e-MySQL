<?php
session_start();
include_once("banco_dados/conexao.php");

$arrayCad = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(in_array("", $arrayCad)){
    echo "<div style='background-color: red; margin-right: 10%;margin-left: 10%;border-radius: 30px;'> <p style='  text-align: Center;color:white;font-family: cursive;font-size: 20px;'>Por favor preencha todos os campos</p> </div>";
    include "Postagem.php";
}else{
     $arrayClient = $_SESSION["login"];
     $postagem_entrada = $_SESSION["postagens"];
    $sql = "INSERT INTO comentarios
VALUES(null,'$arrayClient[nome]','$arrayCad[comentarios]',null,null,$postagem_entrada[id_postagem])";
  $query = $conn->prepare($sql);
   $query->execute();
  
       echo '<div style="background-color: green; margin-right: 10%;margin-left: 10%;border-radius: 30px;"> <p style="  text-align: Center;color:white;font-family: cursive;font-size: 20px;">Sala Cadastrada com Sucesso! </p> </div>';
        
   
      
          
           include_once 'Postagem.php';
}


