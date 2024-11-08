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




            <!-- <article class="topo">
                <div class="contato">
                    <a href="mailto:contato@mestremotores.com.br">
                        <img src="img/1.png" alt="Email Mestre Motores"> -->
                        <!-- <p>contato@mestremotores.com.br</p> -->
                    <!-- </a> -->
                    <!-- <a href="tel:+551199999999"> -->
                        <!-- <img src="img/iconeTel.svg" alt="Telefone Mestre Motores"> -->
                        <!-- <p>11933400719</p> -->
                    <!-- </a> -->
                <!-- </div> -->
                <!-- <div>
                    <a href="#"><img src="img/iconeWhats.svg" alt="Whatsapp"></a>
                    <a href="#"><img src="img/iconeInsta.svg" alt="Instagram"></a>
                    <a href="#"><img src="img/iconeFace.svg" alt="Facebook"></a>
                    <a href="#"><img src="img/iconeTwitter.svg" alt="Twitter"></a>
                    <a href="#" id="modoDark"> <img class="icone-dark" src="img/dark.png" alt=""></a>
                </div> -->
            </article>
 
                <!-- <a href="index.html">
                 <h1 class="animate__animated animate__pulse animate__infinite"> Logo Mestre Motores</h1>
                </a> -->
               
           
        </section>
    </div>
    </header>
    <main>
       
               
        </section>

                   
                   
               
                </article>
                </div>

                <section class="apresentacao">
                    <article class="site">
                    <div class="textoa">
                     <div>
                        <h3>Acabaram</h3>
                        <h2>de chegar!</h2>
                    </div>
                       
                    </div>
                </article>
                    </section>
     <!-- Galeria -->
    <?php require_once('conteudo/galeria.php');?>
                <!-- Fim Galeria -->
 
               
 
               
                <!-- <div class="videosobre">
                    <a href="https://www.youtube.com/watch?v=ZFWC4SiZBao&list=RDZFWC4SiZBao&start_radio=1" data-lity><img src="img/Botão-Youtube-PNG.png" alt="play"></a>
                </div>      -->
        </section>
       
        <!--Inicio especialidades-->
        <?php require_once('conteudo/especialidade.php');?>
        <!--Fim especialidades-->
        <!--Inicio Galeria-->
       
 
        <!-- <section class="servico">
            <article class="site">
                <div class="textoServiço">
                    <div>
                        <h3>Conheça Nosso Espaço </h3>
                        <h2>e Serviços </h2>
                    </div>
                 <button>Clique aqui</button>
                </div>
                <div class="conteudoServico">
                    <div>
                        <img src="img/kid.jpg" alt="Serviço 1">
                        <div>
                            <h4>Leitura para Crianças:</h4>
                            <p>Realizamos inspeções detalhadas e manutenções regulares para evitar problemas futuros e garantir a longevidade do seu motor.</p>
                    </div>
            </div>
            <div>
                <img src="img/servico.1.png" alt="Serviço 1">
                <div>
                    <h4>Serviços de Encomenda</h4>
                    <p>Seja um problema simples ou uma questão complexa, nossa equipe está pronta para diagnosticar e reparar qualquer falha no motor, utilizando peças de alta qualidade e técnicas avançadas.</p>
            </div>
    </div>
    <div>
        <img src="img/servico.1.png" alt="Serviço 1">
        <div>
            <h4>Troca de Óleo e Filtros:</h4>
            <p>Mantenha o motor do seu veículo funcionando suavemente com nossos serviços de troca de óleo e filtros, utilizando produtos de primeira linha que aumentam a eficiência e a durabilidade.</p>
    </div>
</div>
<div>
    <img src="img/servico.1.png" alt="Serviço 1">
    <div>
        <h4>Ajustes e Regulagens:</h4>
        <p>Deixe o motor do seu carro em sintonia perfeita. Realizamos ajustes precisos para garantir a máxima performance e economia de combustível.</p>
</div>
</div>
</div>
            </article>
        </section> -->
 
        <!--Fim Galeria-->
        
 
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
 