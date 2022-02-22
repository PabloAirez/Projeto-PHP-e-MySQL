<?PHP
session_start();
include_once 'banco_dados/conexao.php';
$arrayClient = $_SESSION["login"];
$nome = $arrayClient["nome"];
$email = $arrayClient["email"];
$perfil_dev = $arrayClient["id_perfil"];
$id_usuario = $arrayClient["id"];

if($perfil_dev == null){
     $titulo = "Ainda não realizou nosso teste! Realize agora mesmo";
    $descricao = "<a href='Teste.php'> Clique aqui para realizar seu teste</a>";
    $tecnologias = "";
} else{
    $perfil = "SELECT * FROM usuario,perfildev WHERE perfildev.id = usuario.id_perfil AND usuario.id_usuario = '$id_usuario'";
    var_dump($perfil);
    $queryPerfil = $conn->prepare($perfil);
    $queryPerfil->execute();
    $res_perfil = $queryPerfil->fetch();
    var_dump($res_perfil);
    $titulo = $res_perfil["titulo"];
    $descricao = $res_perfil["descricao"];
    $tecnologias = $res_perfil["tecnologias"];
    
}
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

    <h3>Seja bem-vindo, <?=$nome;?>! </h3>

    <p>Nome: <?=$nome;?> </p>

    <p>Email: <?=$email;?> </p>
    
    <h4>Perfil de Programador</h4>
    <p><?=$titulo;?></p>
     <p><?=$descricao;?></p>
      <p><?=$tecnologias;?></p>

 
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