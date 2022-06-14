<?php
require_once('assets/php/includes/head.php');
?>
<body>
<!-- inicio header -->
<?php
$page = "blog";
include ('assets/php/includes/header.php');
?>
<!-- fim header -->
<main>
<!-- inicio banner -->    
<?php
include ('assets/php/includes/banner.php');
?>
<!-- fim banner -->

<!-- include conteúdo (cards/aside) -->
    


<div class="container">


            <div class="destaque-blog w-100 d-flex justify-content-center bg-warning">
                
                <div class="destaque-blog-titleArea">
                    <h2 class="destaque-blog-title">Título de teste em HTML</h2>
                </div>

                <div class="destaque-blog-descriptionArea">
                    <h4 class="destaque-blog-description">Descrição do blog em destaque aqui</h4>
                </div>

                <div class="destaque-blog-actionsArea">

                    <div class="read-more"> 
                        <a href="#">Leia mais</a>
                    </div>
                    <div class="author">
                        POSTADO POR: Almir Murad - Administrador
                    </div> 

                </div>

            </div>

</div>

<div class="container">
  <div class="row row-cols-3">
        <div class="col">
            <div class="destaque-blog">
                <div class="destaque-blog-titleArea">
                    <h2 class="destaque-blog-title">Título de teste em HTML</h2>
                </div>
                <div class="destaque-blog-descriptionArea">
                    <h4 class="destaque-blog-description">Descrição do blog em destaque aqui</h4>
                </div>
                <div class="destaque-blog-actionsArea">
                    <div class="read-more"> 
                        <a href="#">Leia mais</a>
                    </div>
                    <div class="author">POSTADO POR: Almir Murad - Administrador</div>  
                </div>
            </div>
        </div>
        <div class="col">
            <div class="destaque-blog">
                <div class="destaque-blog-titleArea">
                    <h2 class="destaque-blog-title">Título de teste em HTML</h2>
                </div>
                <div class="destaque-blog-descriptionArea">
                    <h4 class="destaque-blog-description">Descrição do blog em destaque aqui</h4>
                </div>
                <div class="destaque-blog-actionsArea">
                    <div class="read-more"> 
                        <a href="#">Leia mais</a>
                    </div>
                    <div class="author">POSTADO POR: Almir Murad - Administrador</div>  
                </div>
            </div>
        </div>
        <div class="col">
            <div class="destaque-blog">
                <div class="destaque-blog-titleArea">
                    <h2 class="destaque-blog-title">Título de teste em HTML</h2>
                </div>
                <div class="destaque-blog-descriptionArea">
                    <h4 class="destaque-blog-description">Descrição do blog em destaque aqui</h4>
                </div>
                <div class="destaque-blog-actionsArea">
                    <div class="read-more"> 
                        <a href="#">Leia mais</a>
                    </div>
                    <div class="author">POSTADO POR: Almir Murad - Administrador</div>  
                </div>
            </div>
        </div>
        <div class="col">
            <div class="destaque-blog">
                <div class="destaque-blog-titleArea">
                    <h2 class="destaque-blog-title">Título de teste em HTML</h2>
                </div>
                <div class="destaque-blog-descriptionArea">
                    <h4 class="destaque-blog-description">Descrição do blog em destaque aqui</h4>
                </div>
                <div class="destaque-blog-actionsArea">
                    <div class="read-more"> 
                        <a href="#">Leia mais</a>
                    </div>
                    <div class="author">POSTADO POR: Almir Murad - Administrador</div>  
                </div>
            </div>
        </div>
  </div>
</div>


    




<?php
//include('assets/php/includes/content.php');
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

</body>
</html>