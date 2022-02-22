<?php
session_start();
include_once("banco_dados/conexao.php");

$arrayLog = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(in_array("", $arrayLog)){
    echo "<div style='background-color: red; margin-right: 10%;margin-left: 10%;border-radius: 30px;'> <p style='  text-align: Center;color:white;font-family: cursive;font-size: 20px;'>Por favor preencha todos os campos</p> </div>";
    include "login.php";
} else if(!filter_var($arrayLog["email"],FILTER_VALIDATE_EMAIL)){
    include "login.php";
     echo "<div style='background-color: red; margin-right: 10%;margin-left: 10%;border-radius: 30px;'> <p style='  text-align: Center;color:white;font-family: cursive;font-size: 20px;'>Email inválido</p> </div>";
}else{
    $sql = "SELECT * FROM usuario WHERE email LIKE '$arrayLog[email]'";
    $query = $conn->prepare($sql);
    $query->execute();
    if($query->rowCount() == 1  ){
        $hash = $query->fetch();
        if (password_verify($arrayLog["senha"], $hash['senha'])){
          echo '<div style="background-color: green; margin-right: 10%;margin-left: 10%;border-radius: 30px;"> <p style="  text-align: Center;color:white;font-family: cursive;font-size: 20px;">Usuário logado com Sucesso! Seja bem-vindo(a)</p> </div>';
          $userArray = [
            "id"=>$hash["id_usuario"],
            "nome"=>$hash["nome"],  
            "email"=>$hash["email"],
            "id_perfil" =>$hash["id_perfil"]  
          ];
          $_SESSION["login"] = $userArray;
          include_once 'perfil.php';
        } else{
       echo "<div style='background-color: red; margin-right: 10%;margin-left: 10%;border-radius: 30px;'> <p style='  text-align: Center;color:white;font-family: cursive;font-size: 20px;'>Senha inválida</p> </div>";
       include "login.php";
        }
    } else{
       echo "<div style='background-color: red; margin-right: 10%;margin-left: 10%;border-radius: 30px;'> <p style='  text-align: Center;color:white;font-family: cursive;font-size: 20px;'>Email inválido</p> </div>";
       include "login.php";
    }
    
}






