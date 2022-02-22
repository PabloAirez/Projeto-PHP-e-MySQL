<?PHP
    session_start();
    include_once("banco_dados/conexao_msqli.php");
    $sala_entrada = $_SESSION["salas"];
    $thisUser = $_SESSION["login"];
   $todasPostagens = "SELECT * FROM postagens WHERE id_sala = $sala_entrada[id]";
   $postagem = $conection->query($todasPostagens);
   $pagina_sala = "'Postagem.php'";
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
     <hr>
<center><button onclick="window.location.href='criarPost.php'" class="enviar" name="criarPost">Criar Postagem</button></center>

    <hr>
    
     <?php
         echo "<hr><h3 style='text-align: Center'>Postagens da sala $sala_entrada[nome]:</h3><hr>";
        while( $postagens = mysqli_fetch_assoc($postagem)){
             $_SESSION["postagens"] = $postagens;
            echo "<div style='background-color:#0B2E59; text-align:center'><hr>" ."<h2> $postagens[titulo] </h2>".
            "<p style='background-color:#0B2E59'>Autor:  $postagens[autor] </p>" .
           '<button onclick="window.location.href='.$pagina_sala.'"class="enviar" name="verPost">Ver esse Post</button> <br><br>
 </div>';
        }
                
        
    ?>

    
   
 
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