<?php
require_once('assets/php/includes/head.php');
?>
<body>
<?php
$page = "index";
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
<?php
include('assets/php/includes/whatsapp.php');
?>

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
<script src="assets/js/functions.js"></script>
    <script>
        var hide = document.getElementById("navMobile").style.display === "none";
    </script>
 <script type="text/javascript" src="asstes/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js"></script>   

</body>
</html>