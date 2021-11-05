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
            <h2>Contato:</h2>
                <p>(41) 98902-1385</p>                
                    <h2>E-mail:</h2>
                        <p>contato@webmurad.com.br</p>
                    <h2>Endereço:</h2>
                        <p>Rua: Emilia M. Uba 325 - Blc 01 - Apto 31
                            Cachoeira - Curitiba - PR
                            CEP: 82710-450</p>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.4577734143522!2d-49.25524868515115!3d-25.3559699838226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce7aa706fe041%3A0x55920847759842dc!2sR.%20Em%C3%ADlia%20M%20Ub%C3%A1%2C%20325%20-%20Cachoeira%2C%20Curitiba%20-%20PR%2C%2082710-450!5e0!3m2!1spt-BR!2sbr!4v1627581547206!5m2!1spt-BR!2sbr" 
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            </div>
            <div class="formulario">
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