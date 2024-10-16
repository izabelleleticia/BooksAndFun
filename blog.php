<!DOCTYPE html> <!--Tag para identificar o HTML5-->
<html lang="pt-br"> <!--Linguagem da página-->
 
<head>
    <meta charset="UTF-8"> <!--Padronização da língua-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Autoriza a codificação para responsividade-->
    <link rel="shortcut icon" href="img/logo19.png" type="image/x-icon">
    <title>BooksAndFun</title> <!--Titulo da Guia-->
    <!--RESET SEMPRE O PRIMEIRO LINK-->
    <link rel="stylesheet" href="css/reset.css">
 
    <!--Animação do Carrossel Slick-->
 
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
 
     <!--Animação do video-->
    <link rel="stylesheet" href="css/lity.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
       
    <!--MINHA FOLHA DE ESTILO SEMPRE SERÁ O ÚLTIMO LINK-->
    <link rel="stylesheet" href="css/estilo.css">
</head>
 
 
<body class=><!--Inicio do corpo-->
    <header><!--Inicio Cabeçalho-->
      <div class="logo">
        <img src="img/logo19.png" alt="Nome da Livraria">
    </div>
           
       <!-- banner -->
        <?php require_once('conteudo/banner.php');?>
        <!-- banner -->
       
        <!-- <div> -->



            <!-- menu -->
            <?php require_once('conteudo/menu.php');?>
                 <!-- menu -->




      
    </header>
    <main id="pg-blog">
       
             
                   
                   
               

       
       
       
 
        <?php require_once('conteudo/blog.php');?>
 
 
    </main>
    <!-- Inicio Rodapé -->
    <?php require_once('conteudo/rodape.php');?>
    <!-- Fim Rodapé -->
        
 
    <!--JQUERY obrigatório para animação-->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.5.0.min.js"></script>
    <!--Animação CARROSSEL Slick-->
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script src="js/lity.js"></script>
    <!--Minha animação sempre por último-->
    <script type="text/javascript" src="js/js.animation.js"></script>
</body>
</html>
 