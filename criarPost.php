<?PHP
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
       
    <br>
    <hr>
 <br>
 <form name="cadastrarPost" action="validaPost.php" method="post" enctype="multipart/form-data" novalidate style="text-align: center;">

        <p> <input type="text" placeholder="Titulo"  class= "form" name="titulo"  > </p>
        <p> <input type="text" placeholder="Conteudo" class= "form" name="conteudo"  > </p>
        <p> <button type="submit" class="enviar">Postar</button></p>
   </form>

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