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
    <br>
    <hr>
 <br>
 <form name="Teste" action="validaTeste.php" method="post" enctype="multipart/form-data" novalidate style="text-align: center;">

        <p>Você tem interesse em fazer sites??</p>
        <input type="radio" name="site" value="sim"/> Sim<br />
        <input type="radio" name="site" value="nao"/> Não<br />
        
         <p>Você prefere ser quem organiza/deixa bonito ou quem cria a lógica por trás das coisas?</p>
        <input type="radio" name="front_back" value="Quem_organiza"/> Quem organiza<br />
        <input type="radio" name="front_back" value="Quem_cria_a_logica"/> Quem cria a lógica<br />
        
         <p>Você tem interesse em criar aplicativos mobile?</p>
        <input type="radio" name="mobile" value="sim"/> Sim<br />
        <input type="radio" name="mobile" value="nao"/> Não<br />
        
         <p>Você gosta de jogos?</p>
        <input type="radio" name="games" value="sim"/> Sim<br />
        <input type="radio" name="games" value="nao"/> Não<br />
        
        <p>Das opções acima, qual lhe agrada mais?</p>
        <input type="radio" name="escolhaPerfil" value="sites"/> Sites<br />
        <input type="radio" name="escolhaPerfil" value="aplicativos"/> Aplicativos<br />
        <input type="radio" name="escolhaPerfil" value="jogos"/> Jogos<br />
        <input type="radio" name="escolhaPerfil" value="fullstack"/> Gosto de todos igualmente<br />
        

        <p> <input type="submit" class="enviar"></p>
        
        
        <p>Ainda não tem uma conta? <a href="cadastro.php">Clique aqui para se cadastrar</a> </p> 
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