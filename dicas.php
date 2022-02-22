<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link href="estilos.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello!World</title>
    
</head>
<body>
    <?php
    include __DIR__ . "./includes/titulo.php";
    ?>

    <hr>

  <?php
    if(!empty($_SESSION["login"])){
    include __DIR__ . "./includes/menu_log.php";    
    } else{
        include __DIR__ . "./includes/menu.php";
    }
    ?>
    <br><br><br>
    <hr>

    <h3>Dicas Para Devs!</h3>

    <p>Independente do seu perfil, existem alguns conhecimentos comuns a qualquer desenvolvedor. Veja alguns deles:</p>

   <p> <a href="#">Algoritmos e Lógica de Programação</a> </p>
    <p> <a href="#">Bancos de dados</a> </p>
    <p> <a href="#">Informática básica</a></p>
    <p> <a href="#">Redes de internet</a> </p>
    <p> <a href ="#">Versionamento</a> </p>
    <p> <a href ="#">Metodologias ágeis e boas práticas</a> </p>
    
    <br>

    <hr>

    <?php
    include __DIR__ . "./includes/redes.php";
    ?>
    <hr>

    <hr>

    <?php
    include __DIR__ . "./includes/footer.php";
    ?>
    <hr>

    
</body>
</html>