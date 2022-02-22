<?php
session_start();
include_once("banco_dados/conexao.php");

$arrayCad = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(in_array("", $arrayCad)){
    echo "<div style='background-color: red; margin-right: 10%;margin-left: 10%;border-radius: 30px;'> <p style='  text-align: Center;color:white;font-family: cursive;font-size: 20px;'>Por favor preencha todos os campos</p> </div>";
    include "cadastro.php";
} else if(!filter_var($arrayCad["email"],FILTER_VALIDATE_EMAIL)){
     echo "<div style='background-color: red; margin-right: 10%;margin-left: 10%;border-radius: 30px;'> <p style='  text-align: Center;color:white;font-family: cursive;font-size: 20px;'>Email inválido</p> </div>";
     include "cadastro.php";
}else if(!($arrayCad["Confirmasenha"] == $arrayCad["senha"])) {
         echo "<div style='background-color: red; margin-right: 10%;margin-left: 10%;border-radius: 30px;'> <p style='  text-align: Center;color:white;font-family: cursive;font-size: 20px;'>Senhas não coincidem</p> </div>";
          include "cadastro.php";
} else{
    $senha = password_hash($arrayCad["senha"], PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuario(id_usuario,nome,email,senha,data_criacao,data_alteracao,id_perfil)
VALUES(null,'$arrayCad[nome]','$arrayCad[email]','$senha',null,null,null)";

$query = $conn->prepare($sql);
$query->execute();
$select = "SELECT * FROM usuario WHERE senha = '$senha' AND email = '$arrayCad[email]'";
$query2 = $conn->prepare($select);
$query2->execute();
$hash  = $query2->fetch();
       echo '<div style="background-color: green; margin-right: 10%;margin-left: 10%;border-radius: 30px;"> <p style="  text-align: Center;color:white;font-family: cursive;font-size: 20px;">Usuário Cadastrado com Sucesso! Seja bem-vindo(a)</p> </div>';
          $userArray = [
            "id"=>$hash["id_usuario"],
            "nome"=>$hash["nome"],  
            "email"=>$hash["email"],
            "id_perfil" =>$hash["id_perfil"]  
          ];
          $_SESSION["login"] = $userArray;
            include_once 'perfil.php';
}






