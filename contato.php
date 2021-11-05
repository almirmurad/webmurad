<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href="assets/fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
    
    <title>***| Web Murad - Desenvolvimento Web |***</title>
</head>
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
                <h2>Fone/Whatsapp:</h2>
                <p>(41) 98902-1385</p>                
                <h2>E-mail:</h2>
                <p>contato@webmurad.com.br</p>
                
                
                
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
    <script src="assets/js/functions.js"></script>
    <script>
        var hide = document.getElementById("navMobile").style.display === "none";
    </script>

</body>
</html>