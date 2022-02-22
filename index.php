<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="estilos.css">
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

    <h3>Bem-vindo à versão alfa da Hello!World! Assim como você, nós ainda estamos no nosso início, então vamos nessa juntos </h3>

    <p>Tudo ainda é mato por aqui, mas futuramente este será o espaço em que iremos compartilhar conhecimento </p>

    <p>Não é necessário ter uma conta para fazer nosso teste de perfil, mas recomendamos que faça para poder participar de nossos fóruns </p>

    <p>CLIQUE ABAIXO PARA INICIAR O TESTE</p>
    
    <button onclick="window.location.href='Teste.php'" class="enviar" name="teste">Iniciar teste</button>
 
    <hr>

   
    <hr>
    <?php
    include __DIR__ . "./includes/redes.php";
    ?>

    <hr>

    <?php
    include __DIR__ . "./includes/footer.php";
    ?>

    <hr>

    
</body>
</html>