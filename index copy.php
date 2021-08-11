<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href="assets/fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
    
    <title>***| Web Murad - Desenvolvimento Web |***</title>
</head>
<body>
<!-- inicio header -->
<?php
include ('assets/php/includes/header.php');
?>
<!-- fim header -->
<main>
<!-- inicio banner -->    
<?php
include ('assets/php/includes/banner.php');
?>
<!-- fim banner -->
<!-- inicio infoBoxes -->
<?php
include ('assets/php/includes/info.php');
?>
<!-- fim infoBoxes -->
<!-- include conteúdo (cards/aside) -->
<?php
include('assets/php/includes/content.php');
?>
<!-- inicio slide -->
<?php
include('assets/php/includes/slide.php');
?>
<!-- fim slide -->
<!-- botão whats -->
<div id="whatsapp"><span class="icone"><i class="fab fa-whatsapp fa-2x"></i></span></div>
<!-- include portfólio -->
<?php
include('assets/php/includes/portfolio.php');
?>

<!-- <section id="dicas">
   <div class="areaTitulo">
        <h2>
            Dicas
        </h2>
        <span class="icone">
        <i class="far fa-lightbulb fa-2x"></i>
        </span>   
    </div>
    
    <div class="container">
        <div class="areaDicas">
           <div>
               <h2>Links Úteis</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Reiciendis quod illum cumque enim non aliquid est nemo ducimus.
                </p>
            </div>
           <div>
               <h2>Links Úteis</h2>
               <ul>
                    <li>
                       <a href="#">Lorem ipsum dolor</a>
                    </li>
                    <li>
                       <a href="#">Lorem ipsum dolor</a>
                    </li>
                    <li>
                       <a href="#">Lorem ipsum dolor</a>
                    </li>
                    <li>
                       <a href="#">Lorem ipsum dolor</a>
                    </li>
                </ul>
            </div>
           <div>
               <h2>Ferramentas Dev</h2>
               <ul>
                    <li>
                       <a href="#">Lorem ipsum dolor</a>
                    </li>
                    <li>
                       <a href="#">Lorem ipsum dolor</a>
                    </li>
                    <li>
                       <a href="#">Lorem ipsum dolor</a>
                    </li>
                    <li>
                       <a href="#">Lorem ipsum dolor</a>
                    </li>
                </ul>
            </div>
           <div>
               <h2>Canais Dev</h2>
               <ul>
                    <li>
                       <a href="#">Lorem ipsum dolor</a>
                    </li>
                    <li>
                       <a href="#">Lorem ipsum dolor</a>
                    </li>
                    <li>
                       <a href="#">Lorem ipsum dolor</a>
                    </li>
                    <li>
                       <a href="#">Lorem ipsum dolor</a>
                    </li>
                </ul>
            </div>
        </div>   
    </div>

</section>-->
<!-- imagem surpreenda-se -->
<section id="destaque2">

</section>
<!-- fim surpreenda-se -->
</main>
<?php
include ('assets/php/includes/footer.php');
?>


</body>
</html>