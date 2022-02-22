<?php
//$host = 'mysql:dbname=helloworld;host=localhost';
$host = 'localhost';
$user = 'root';
$password = '';
$dbname ='helloworld';

try{
  $conection = new mysqli($host,$user,$password,$dbname);  
} catch (Exception $ex) {
    echo "<p>Erro ao conectar com o banco de dados</p>";
}

