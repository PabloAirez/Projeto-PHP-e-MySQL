<?PHP
    session_start();
    include_once("banco_dados/conexao_msqli.php");
    $thisUser = $_SESSION["login"];
   $todasSalas = "SELECT * FROM saladeestudos";
   $sala = $conection->query($todasSalas);
   $minhasSalas = "SELECT DISTINCT saladeestudos.nome,saladeestudos.descricao, saladeestudos.categoria  FROM forum,usuario,saladeestudos WHERE forum.id_usuario = $thisUser[id]";  
   $minhasala = $conection->query($minhasSalas);
   $pagina_sala = "'sala_de_estudo.php'";


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

    <h3 style="text-align: Center">Suas salas de estudo:</h3>
    
    <?php
        while( $salas = mysqli_fetch_assoc($minhasala)){
             $_SESSION["salas"] = $salas;
            echo "<div style='background-color:#0B2E59; text-align:center'><hr>" ."<h2> $salas[nome] </h2>".
            "<p style='background-color:#0B2E59'>Descrição:  $salas[descricao] </p>" .
            "<p style='background-color:#0B2E59'> Categoria:  $salas[categoria] </p> ".
            '<button onclick="window.location.href='.$pagina_sala.'"class="enviar" name="entrarSala">Entrar na Sala</button> <br><br>
 </div>';
        }
                
        
    ?>
    
    <hr>
<center><button onclick="window.location.href='criarSala.php'" class="enviar" name="criarSala">Criar Sua Sala</button></center>

    <hr>
    <?php
         echo "<hr><h3 style='text-align: Center'>Todas as salas:</h3><hr>";
        while( $salas = mysqli_fetch_assoc($sala)){
            $_SESSION["salas"] = $salas;
            
            echo "<div style='background-color:#0B2E59; text-align:center'><hr>" ."<h2> $salas[nome] </h2>".
            "<p style='background-color:#0B2E59'>Descrição:  $salas[descricao] </p>" .
            "<p style='background-color:#0B2E59'> Categoria:  $salas[categoria] </p> ".
           '<button onclick="window.location.href='.$pagina_sala.'"class="enviar" name="entrarSala">Entrar na Sala</button> <br><br>
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