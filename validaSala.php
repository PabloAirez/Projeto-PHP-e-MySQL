<?php
session_start();
include_once("banco_dados/conexao.php");

$arrayCad = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(in_array("", $arrayCad)){
    echo "<div style='background-color: red; margin-right: 10%;margin-left: 10%;border-radius: 30px;'> <p style='  text-align: Center;color:white;font-family: cursive;font-size: 20px;'>Por favor preencha todos os campos</p> </div>";
    include "criarSala.php";
}else{
     $arrayClient = $_SESSION["login"];  
    $sql = "INSERT INTO saladeestudos(id,nome,descricao,categoria,data_criacao,data_modificacao)
VALUES(null,'$arrayCad[nome]','$arrayCad[descricao]','$arrayCad[categoria]',null,null)";
  $query = $conn->prepare($sql);
   $query->execute();
  $capturaSala = "SELECT MAX(id) FROM saladeestudos";
   $query2 = $conn->prepare($capturaSala);
   $query2->execute();
   $sala = $query2->fetch();   
   var_dump($sala[0]);
   
    $forum = "INSERT INTO forum(id_codForum,id_usuario,id_saladeestudo)"
           . "VALUES(null,$arrayClient[id],$sala[0])";
    $query3 = $conn->prepare($forum);
    $query3->execute();
       echo '<div style="background-color: green; margin-right: 10%;margin-left: 10%;border-radius: 30px;"> <p style="  text-align: Center;color:white;font-family: cursive;font-size: 20px;">Sala Cadastrada com Sucesso! </p> </div>';
        
   
      
          
           include_once 'estudo.php';
}






