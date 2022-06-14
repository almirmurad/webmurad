<?php
require_once('assets/php/includes/head.php');
?>
<body>
<!-- inicio header -->
<?php
$page = "sobre";
include ('assets/php/includes/header.php');
?>
<!-- fim header -->
<main>
<!-- inicio banner -->    
<?php
include ('assets/php/includes/banner.php');
?>
<!-- fim banner -->
<section id="sobre">
    <div class="container">
        <div class="contentSobre">

            <div class="missao">
                <div class="areaIcone">
                    <span class="iconeSobre"><i class="fas fa-bullseye fa-2x"></i></span>
                </div>
                <div class="areaTitulo">
                    <span class="titulo">Missão</span>
                </div>
                <div class="areaTexto">
                    <p>
                    Criar sites modernos de alta performance para clientes que buscam ter uma forte presença na internet,
                     transmitir seus valores, serem encontrados e converter visitas em negócios.
                    </p>
                </div>
            </div>

            <div class="visao">
                <div class="areaIcone">
                    <span class="iconeSobre"><i class="fas fa-compress-arrows-alt fa-2x"></i></span>
                </div>
                <div class="areaTitulo">
                    <span class="titulo">Visão</span>
                </div>
                <div class="areaTexto">
                    <p>
                    Ser referência no desenvolvimento de soluções inteligentes em tecnologia da informação,
                     reconhecida pela qualidade e resultados dos serviços prestados.    
                    </p>
                </div>
            </div>
           
            <div class="valores">
                <div class="areaIcone">
                    <span class="iconeSobre"><i class="fas fa-praying-hands fa-2x"></i></span>
                </div>
                <div class="areaTitulo">
                    <span class="titulo">Valores</span>
                </div>
                <div class="areaTexto">
                    <ul>
                        <li>Compromisso</li>
                        <li>Excelência no atendimento</li>
                        <li>Cumprimento dos prazos</li>
                        <li>Criatividade nas soluções</li>
                        <li>Agilidade no desenvolvimento</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>    
<section id="sobre">
    <div class="container">
        <div class="contSobre">
            <div class="contTitSobre">
                <h1>Web Murad - Desenvolvimento Web</h1>
            </div>
            <p>
            Com início das atividades em 2012 na cidade de Itanhaém (SP) e há 3 anos localizada na capital do Paraná Curitiba,
             a Web Murad é uma agência digital que desenvolve projetos para empresas de diversos portes,
              nos mais variados segmentos, sempre buscando a excelência da execução de todas as etapas do projeto, 
              que vão desde a criação da logomarca, o desenho do layout, estudo de cores, até a produção, publicação,
               marketing digital e experiência do usuário.<br>
            Toda experiência adquirida e lapidada ao longo do tempo nos fornece a confiança necessária para nos 
            manter há anos no mercado. Essa confiança, aliada à seriedade e compromisso com o cliente resulta em soluções 
            tecnológicas sob medida, com o foco exclusivamente na geração do resultado.
            </p>
            <div class="contTitSobre">
                <h2>Diferenciais</h2>
            </div>
            <p>
            Para entregarmos soluções cada vez mais modernas, nosso time de desenvolvimento está em constante aprendizado, sempre
            visando adequar nossos produtos às normas e regras vigentes inclusive em conformidade à <strong>LGPD</strong> (Lei Geral de Proteção de Dados).
            Leia a nossa <a href="privacidade.php">política de privacidade.</a>
            <br>Entregamos sites e sistemas profissionais compátivel com todos os navegadores e dispositivos, para que sua empresa
            seja encontrada a qualquer momento em qualquer lugar.<br>
            Nosso atendimento é diferenciado, sempre cordial e atencioso, buscando entender a necessidade dos nossos clientes.<br>
            Nosso processo de desenvolvimento é minucioso e preciso, o que minimiza o erro e agiliza o desenvolvimento da aplicação.
            <br><strong>Não perca mais tempo, entre em <a href="contato.php">contato </a> conosco e solicite um orçamento, teremos o maior prazer em ter a sua empresa em nosso portfólio!</strong>        
            </p>
        </div>
    </div>

</section>

<!-- botão whats -->
<?php
include('assets/php/includes/whatsapp.php');
?>



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