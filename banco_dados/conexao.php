<?php
$host = 'mysql:dbname=helloworld;host=localhost';
$user = 'root';
$password = '';

try{
  $conn = new PDO($host,$user,$password);  
} catch (Exception $ex) {
    echo "<p>Erro ao conectar com o banco de dados</p>";
}

