
<div id="inf">
           <ul id="destaqueinf">
              <li class="phpmy"><a title="HOME" href="index.php"> Web sites dinâmicos com tecnologia PHP e banco de dados My SQL </a></li>
              <li class="swf"><a title="PORTIFÓLIO" href="#"> Desenvolvimento de Banners Eletrônicos e publicidade em flash </a></li> 
              <li class="fw"><a title="DICAS" href="#"> Desenvolvimento de Banners Eletrônicos e publicidade em flash </a></li>
              <li class="swf"><a title="HOME" href="index.php"> Web sites dinâmicos com tecnologia PHP e banco de dados My SQL </a></li>
          </ul>
   </div>  
   </div>
 
 
  
               
<div id="conteudoesq">
                <h2>Modelos</h2>
    <p class="cont">Nesta sessão você encontrará alguns links de sites que disponibilizam para downloads modelos de sites prontos. Confira!</p>
               <ul class="home">
                 <li>
                 <a href="http://www.layouts-templates.com">layouts-templates.com</a>
                 </li>
                 <li>
                 <a href="http://www.templatemonster.com/">Template Monster</a>
                 </li>
                 <li>
                 <a href="http://www.freewordpressthemes4u.com">Temas para Wordpress</a></li>
                 </ul>
<br />
</div>   
                <div id="conteudoesqmeio">
                 <h2>Banners</h2>
                <p class="cont">Aqui você poderá conhecer alguns banners estáticos e animados, além de logotipos e logomarcas que desenvolvemos.</p><br />
<br />
<br />
<br />

</div>   
                 <div id="conteudodirmeio">
                 <h2>Notícias</h2>
                 <ul class="home">
				 
				 
				 
                            <?php
							   
							   $sql = "SELECT CODIGO, TITULO FROM noticias";
	                       	   
							   $resultado = mysql_query($sql,$conexao);
                               $linhas    = mysql_num_rows($resultado);
							  
                               if($linhas == 0)
                                 {
	                               echo'<h3>Tabela não contém dados de noticias.</h3>';
	                               include('admin/fecha_conexao.php')  ;
	
								 }
    
                        	   for ($x=0; $x<$linhas; $x++)
	                             {
		                          $titulo    = mysql_result($resultado, $x, 'titulo');  
								   $codigo    = mysql_result($resultado, $x, 'codigo');
		                            echo"
									   <li>
										<a href='admin/ler_noticias.php?codigo=$codigo'>$titulo</a>
									   </li>
										";
								 }
								 
							?>
				</ul>
				</div>   
                
                 <div id="conteudodir">
                 <h2>Publicidade</h2>
                <p class="cont"><img src="imgs/banner_webmurad.gif" width="190" height="155" alt="banner" /></p>
                </div> 
                 
                  <div id="abaestoque">
                <h1>Estoque de imagens</h1>
               <p class="cont">Confira os melhores sites de banco de imagens da internet e pare de perder horas e horas esquentando a cabeça com imagens ruins!</p><br />
               <ul class="home">
                 <li>
                 <a href="http://www.sxc.hu/">SXHU stock</a> 
                 </li>
                 <li>
                 <a href="http://www.123rf.com/">123rf.com</a>
                 </li>
                 <li>
                 <a href="http://www.imagensgratis.com.br">imagensfree.com</a>
                 </li>
                 </ul>               
                </div>   
  <div id="abaferramentas">
                 <h1>Ferramentas</h1>
                <p class="cont"> Baixe aqui as melhores ferramentas para designers da atualidade! </p><br />
                <ul class="home">
                 <li>
                 <a href="#">"Notepad++</a>
                 </li>
                 <li>
                 <a href="#">PHP Editor</a>
                 </li>
                 <li>
                 <a href="#">CSS Editor</a>
                 </li>
                 <li>
                 <a href="#">"Notepad++</a>
                 </li>
                 <li>
                 <a href="#">PHP Editor</a>
                 </li>
                 <li>
                 <a href="#">CSS Editor</a>
                 </li>
                 </ul>
  </div>   
                 <div id="abadicas">
                 <h1>Dicas</h1>
                <p class="cont">Do que vale todo o conhecimento adquirido se não podermos compartilha-lo? Seguem algumas dicas bem bacanas de html, css, php entre outras. Espero que aproveitem e curtam.</p>
                </div>   
                 <div id="abasites">
                 <h1>Sites relacionados</h1>
                <p class="cont">Alguns sites parceiros e relacionados ao mundo do web design.</p>
                <br />
                <ul class="home">
                 <li>
                 <a href="#"> MX-MASTERS conhecimento ao seu alcance.</a>
                 </li>
                 <li>
                 <a href="#">PHP Brasil</a>
                 </li>
                 <li>
                 <a href="#">BLOG do MAUJEUR</a>
                 </li>
                 <li>
                 <a href="#"> MX-MASTERS conhecimento ao seu alcance.</a>
                 </li>
                 <li>
                 <a href="#">PHP Brasil</a>
                 </li>
                 <li>
                 <a href="#">BLOG do MAUJEUR</a>
                 </li>
                 </ul>
                </div>