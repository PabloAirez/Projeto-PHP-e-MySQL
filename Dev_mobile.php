<?PHP
include_once("banco_dados/conexao.php");
session_start();

if(!empty($_SESSION["login"])){
    $arrayClient = $_SESSION["login"];
    $sql = "UPDATE usuario SET id_perfil = 6 WHERE id_usuario = '$arrayClient[id]'";
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

    <h3>Desenvolvedor Mobile</h3>
 
    <p>Seu perfil combina com o de um desenvolvedor Mobile! </p>
    <p>Esse desenvolvedor é responsável por criar aplicativos para dispositivos móveis</p>
    <p>Você pode fazer aplicativos que ajudem as pessoas e publica-los nas lojas mobile</p>
    <p>Como na Appstore e Playstore</p>
    
    <p>O que devo estudar: HTML, CSS, Javascript, git, como funciona um celular, diferentes tipos de telas, React Native/Flutter e Android Studio</p>
    
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