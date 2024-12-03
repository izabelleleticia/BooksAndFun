<!DOCTYPE html> <!-- Tag para identificar o HTML5 -->
<html lang="pt-br"> <!-- Linguagem da página -->

<head>
    <meta charset="UTF-8"> <!-- Padronização da língua -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Autoriza a codificação para responsividade -->
    <link rel="shortcut icon" href="img/ICON.svg" type="image/x-icon">
    <title>Sua livraria preferida</title> <!-- Título da Guia -->
    <link rel="stylesheet" href="css/reset.css"> <!-- RESET SEMPRE O PRIMEIRO LINK -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link rel="stylesheet" href="css/lity.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="js/wow.min.js"></script> <!-- Script para animações -->
    <link rel="stylesheet" href="css/estilo.css"> <!-- MINHA FOLHA DE ESTILO SEMPRE SERÁ O ÚLTIMO LINK -->
</head>

<body> <!-- Início do corpo -->
    <header>
        <!-- Banner -->
        <?php require_once('conteudo/banner.php'); ?>
        <!-- Menu -->
        <?php require_once('conteudo/menu.php'); ?>
    </header>
    
    <main>
    <?php require_once('conteudo/form.php'); ?>
            <!--Inicio Galeria-->
           
        <!--Fim Galeria-->
        </main>
         <!--Inicio Especialidades-->
     
        <!--Fim especialidades-->
        <footer>
        <!--Inicio Rodape-->
        <?php require_once('conteudo/rodape.php');?>
        <!-- Fim do Rodape -->

    <!--JQUERY obrigatório para animação-->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script> 
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.5.0.min.js"></script>
    <!--Animação CARROSSEL Slick-->
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script src="js/lity.js"></script>
    <!--Minha animação sempre por último-->
    <script type="text/javascript" src="js/js.animation.js"></script>
    
    </footer>
</body>
</html>
