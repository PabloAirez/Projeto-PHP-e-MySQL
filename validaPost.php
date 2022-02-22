<?php
session_start();
include_once("banco_dados/conexao.php");

$arrayCad = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(in_array("", $arrayCad)){
    echo "<div style='background-color: red; margin-right: 10%;margin-left: 10%;border-radius: 30px;'> <p style='  text-align: Center;color:white;font-family: cursive;font-size: 20px;'>Por favor preencha todos os campos</p> </div>";
    include "criarPost.php";
}else{
     $arrayClient = $_SESSION["login"];
     $sala_entrada = $_SESSION["salas"];
    $sql = "INSERT INTO postagens
VALUES(null,'$arrayCad[titulo]','$arrayCad[conteudo]','$arrayClient[nome]',null,null,$sala_entrada[id])";
  $query = $conn->prepare($sql);
   $query->execute();
  
       echo '<div style="background-color: green; margin-right: 10%;margin-left: 10%;border-radius: 30px;"> <p style="  text-align: Center;color:white;font-family: cursive;font-size: 20px;">Sala Cadastrada com Sucesso! </p> </div>';
        
   
      
          
           include_once 'sala_de_estudo.php';
}






