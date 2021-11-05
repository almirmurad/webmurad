<header>
    <div class="contato">
        <div class="container">
            <div class="fone">(41) 98902-1385</div>
            <div class="socialMedia">contato@webmurad.com.br</div>
        </div>   
    </div>

    <div class="container column">

    <div class="logo">
        <img src="assets/img/logotipoGd.png" alt="Logo">
    </div>      
    <div class="showNav" onclick="show()">  
        <span><i id="iconNav" class="fas fa-bars fa-2x"></i></span>
    </div>

    
<div id="navMobile">
    <ul>
        <?php
        $menu = '<li class="active"><a href="index.php">HOME</a></li>
                <li><a href="sobre.php">SOBRE</a></li>
                <li><a href="portfolio.php">PORTFÓLIO</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="contato.php">CONTATO</a></li>';

                if(isset($page)){
                    switch($page){
                        case "index":
                        echo '<li class="active"><a href="index.php">HOME</a></li>
                        <li><a href="sobre.php">SOBRE</a></li>
                        <li><a href="portfolio.php">PORTFÓLIO</a></li>
                        <li><a href="blog.php">BLOG</a></li>
                        <li><a href="contato.php">CONTATO</a></li>';
                        break;

                        case "sobre":
                        echo '<li ><a href="index.php">HOME</a></li>
                        <li class="active"><a href="sobre.php">SOBRE</a></li>
                        <li><a href="portfolio.php">PORTFÓLIO</a></li>
                        <li><a href="blog.php">BLOG</a></li>
                        <li><a href="contato.php">CONTATO</a></li>';
                        break;
                            
                        case "portfolio":
                        echo '<li><a href="index.php">HOME</a></li>
                        <li><a href="sobre.php">SOBRE</a></li>
                        <li class="active"><a href="portfolio.php">PORTFÓLIO</a></li>
                        <li><a href="blog.php">BLOG</a></li>
                        <li><a href="contato.php">CONTATO</a></li>';
                        break;
                    
                        case "blog":
                        echo '<li><a href="index.php">HOME</a></li>
                        <li><a href="sobre.php">SOBRE</a></li>
                        <li><a href="portfolio.php">PORTFÓLIO</a></li>
                        <li class="active"><a href="blog.php">BLOG</a></li>
                        <li><a href="contato.php">CONTATO</a></li>';
                        break;

                        case "contato":
                        echo '<li><a href="index.php">HOME</a></li>
                        <li><a href="sobre.php">SOBRE</a></li>
                        <li><a href="portfolio.php">PORTFÓLIO</a></li>
                        <li><a href="blog.php">BLOG</a></li>
                        <li class="active"><a href="contato.php">CONTATO</a></li>';
                        break;
                    }}else{ echo $menu; } ?>
    </ul> 
</div>
    <nav class="menu">   
        <ul>
            <?php

            $menu = '<li class="active"><a href="index.php">HOME</a></li>
            <li><a href="sobre.php">SOBRE</a></li>
            <li><a href="portfolio.php">PORTFÓLIO</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contato.php">CONTATO</a></li>';

            if(isset($page)){
                switch($page){
                    case "index":
                    echo '<li class="active"><a href="index.php">HOME</a></li>
                    <li><a href="sobre.php">SOBRE</a></li>
                    <li><a href="portfolio.php">PORTFÓLIO</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contato.php">CONTATO</a></li>';
                    break;

                    case "sobre":
                    echo '<li ><a href="index.php">HOME</a></li>
                    <li class="active"><a href="sobre.php">SOBRE</a></li>
                    <li><a href="portfolio.php">PORTFÓLIO</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contato.php">CONTATO</a></li>';
                    break;
                        
                    case "portfolio":
                    echo '<li><a href="index.php">HOME</a></li>
                    <li><a href="sobre.php">SOBRE</a></li>
                    <li class="active"><a href="portfolio.php">PORTFÓLIO</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contato.php">CONTATO</a></li>';
                    break;
                
                    case "blog":
                    echo '<li><a href="index.php">HOME</a></li>
                    <li><a href="sobre.php">SOBRE</a></li>
                    <li><a href="portfolio.php">PORTFÓLIO</a></li>
                    <li class="active"><a href="blog.php">BLOG</a></li>
                    <li><a href="contato.php">CONTATO</a></li>';
                    break;

                    case "contato":
                    echo '<li><a href="index.php">HOME</a></li>
                    <li><a href="sobre.php">SOBRE</a></li>
                    <li><a href="portfolio.php">PORTFÓLIO</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li class="active"><a href="contato.php">CONTATO</a></li>';
                    break;
                }}else{ echo $menu; } ?>

            
        </ul>
    </nav>
</div>

</header>