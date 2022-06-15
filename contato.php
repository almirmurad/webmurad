<?php 
session_start();
require_once('assets/php/includes/recaptchaLib.php');

/*if(!isset($_SESSION['captcha'])){
    $n = rand(1000, 9999);
    $_SESSION['captcha'] = $n;
}*/


require_once('assets/php/includes/head.php');
?>
<body>
<!-- inicio header -->
<?php
$page = "contato";
include ('assets/php/includes/header.php');
?>
<!-- fim header -->
<main>
<!-- inicio banner -->    
<?php
include ('assets/php/includes/banner.php');
?>
<!-- fim banner -->

<section id="contato">
    <div class="container">
        <div class="contentContato">
                 
            <div class="contContato">
            <div class="flash" style="width:100%; backgroound-color:green;">
                <?php
                    $flash = $_SESSION['mensagem'];

                    if(isset($flash) && !empty($flash)){
                        echo '<div style="padding:5px 10px;border:3px solid red; background-color:#F29F05;color:white;">
                        '.$flash.'</div>';
                        $_SESSION['mensagem'] = "";
                    }
                ?>
             </div>   

                <div class="contato-dados">
                <h2>Fone/Whatsapp:</h2>
                <p>(41) 98902-1385</p>                
                <h2>E-mail:</h2>
                <p>developer@webmurad.com.br</p>
                </div>
            </div>
            
            <div class="contForm">        
                <form action="envia.php" method="POST">
                    <fieldset>
                    
                        <legend>Formulário de contato</legend>
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" placeholder="Digite seu nome" id="nome" />

                        <label for="email">E-mail:</label>
                        <input type="text" name="email" placeholder="Digite seu e-mail" id="email" />

                        <label for="fone">Telefone:</label>
                        <input type="tel" name="fone" placeholder="Digite seu telefone" id="fone" />

                        <label for="mensagem">Mensagem:</label>
                        <textarea rows="6" name="mensagem" id="mensagem" placeholder="Escreva sua mensagem"></textarea>
                        <input type="checkbox" id="concentimento" required>
                        <label for="concentimento" >Eu concordo com envio do formulário.</label>
                        <br/>
                        <div class="g-recaptcha" data-sitekey="6Ld5znEgAAAAAJ1-JdkdvUV9ftPhh5NTaowlYnxX"></div>
                        <button type="submit">Enviar</button>
                        

                    </fieldset>
                </form>
            </div>
           
            

        </div>
    </div>

</section>
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


</section>
<!-- imagem surpreenda-se -->
<section id="destaque2">

</section>
<!-- fim surpreenda-se -->
</main>
<?php
include ('assets/php/includes/footer.php');
?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="assets/js/functions.js"></script>
    <script>
        var hide = document.getElementById("navMobile").style.display === "none";
    </script>

</body>
</html>