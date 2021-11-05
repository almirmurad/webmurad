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
    <h2 style="text-align: center; margin:150px auto; font-size:2em;">Página em desenvolvimento!</h2>
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