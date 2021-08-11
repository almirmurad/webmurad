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
$page = "portfolio";
include ('assets/php/includes/header.php');
?>
<!-- fim header -->
<main>
<!-- inicio banner -->    
<?php
include ('assets/php/includes/banner.php');
?>
<!-- fim banner -->


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