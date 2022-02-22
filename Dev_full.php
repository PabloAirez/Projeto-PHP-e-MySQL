<?PHP
include_once("banco_dados/conexao.php");
session_start();

if(!empty($_SESSION["login"])){
    $arrayClient = $_SESSION["login"];
    $sql = "UPDATE usuario SET id_perfil = 4 WHERE id_usuario = '$arrayClient[id]'";
    $query = $conn->prepare($sql);
    $query->execute();
}
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

    <h3>Desenvolvedor Fullstack</h3>
 
    <p>Seu perfil combina com o de um desenvolvedor fullstack! </p>
    <p>Esse desenvolvedor tem o conhecimento de front-end, back-end, mobile e até de jogos</p>
    <p>Por tanto, ele é quem mais precisa se dedicar para se especializar</p>
    <p>Recomendamos que escolha uma área para se especializar enquanto estuda as outras</p>
    
    <p>O que devo estudar: HTML, CSS, lógica de programação, Javascript, git, ReactJS, React Native, nodeJS, C#, Unity</p>
    
    <p>Logando em nosso site, você pode salvar esse resultado em seu perfil e ainda</p>
    <p>Encontrar grupos de estudos com pessoas de seu mesmo perfil!</p>
    <p><a href ="login.php">Logar na minha conta e salvar</a></p>
    <p><a href="cadastro.php">Criar uma nova conta</a></p>

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