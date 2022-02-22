<?PHP
    session_start();
    include_once("banco_dados/conexao_msqli.php");
    $postagem_entrada = $_SESSION["postagens"];
    $thisUser = $_SESSION["login"];
   $todosComentarios = "SELECT DISTINCT * FROM comentarios WHERE id_postagens = $postagem_entrada[id_postagem]";
   $comentario = $conection->query($todosComentarios);

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
    
     <?php
         echo "<hr><h2 style='text-align: Center'>$postagem_entrada[titulo]</h2><hr>";
          echo "<hr><p style='text-align: Center'>Autor:$postagem_entrada[autor]</p><hr>";
         echo "<hr><h3 style='text-align: Center'>$postagem_entrada[conteudo]:</h3><hr>";
         
         ?>
         <hr>
         <h3 style='text-align: Center'>Deixe seu comentário:</h3>
          <form style="text-align: center" name="comentario" action="validaComentario.php" method="post" enctype="multipart/form-data" novalidate >
         Comentário<br>
        <textarea style="text-align: center;height: 10%;width: 50%" name="comentarios" id="comentarios"></textarea>
        <p>  <input type="submit" class="enviar" value="postar"></p>
        </form>
         <hr>
         <h3 style='text-align: Center'>Comentários dos usuários:</h3>
         <hr>
         <?php
        while( $comentarios = mysqli_fetch_assoc($comentario)){
            echo "<div style='background-color:#0B2E59; text-align:center'><hr>" ."<h4>Usuário: $comentarios[usuario] </h4>".
            "<p style='background-color:#0B2E59'>$comentarios[conteudo] </p>" .
           '</div>';
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