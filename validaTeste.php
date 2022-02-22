<?php
session_start();

$arrayTes = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$front = 0;
$back = 0;
$mobile = 0;
$full = 0;
$games = 0;

if(in_array("", $arrayTes)){
    echo "<div style='background-color: red; margin-right: 10%;margin-left: 10%;border-radius: 30px;'> <p style='  text-align: Center;color:white;font-family: cursive;font-size: 20px;'>Por favor preencha todos os campos</p> </div>";
}


if($arrayTes["site"] == "Sim"){
    $front++;
    $back++;
    $full++;
} 

if($arrayTes["front_back"] == "Quem_organiza"){
    $front++;
    $full++;
} else{
    $back++;
    $full++;
}

if("sim" == $arrayTes["mobile"]){
    $mobile+=2;
    $full++;
} 

if("sim" == $arrayTes["games"]){
    $games+=2;
    $full++;
} 

if("sites" == $arrayTes["escolhaPerfil"]){
    $front+=2;
    $back+=2;
} else if ("aplicativos" == $arrayTes["escolhaPerfil"]){
    $mobile+=2;
} else if ("jogos" == $arrayTes["escolhaPerfil"]){
    $games+=2;
} else if ("fullstack" == $arrayTes["escolhaPerfil"]){
    $full+=2;
}

if($front > $back && $front > $mobile && $front > $games && $front > $full ){
    include "Dev_front.php";
} else if($back > $mobile && $back > $games && $back > $full ){
    include "Dev_back.php";
} else if($mobile > $games && $mobile > $full){
    include "Dev_mobile.php";
} else if($games > $full){
    include "Dev_games.php";
} else{
    include "Dev_full.php";
}
