<h2 class="noti">PRODUTOS</h2>
		
  	      <aside id="left">

			<nav id="mnProdutos">
				<ul>
                       <!-- <li><a href="inserirProduto.php">INSERIR PRODUTOS</a></li>
                        <li><a href="listarProdutos.php">LISTAR PRODUTOS</a></li>
                        <li><a href="pesquisarProduto.php">PESQUISAR PRODUTOS</a></li> -->
                    <li><a href="#">INSERIR PRODUTOS</a></li>
                    <li><a href="#">LISTAR PRODUTOS</a></li>
                    <li><a href="#">PESQUISAR PRODUTOS</a></li>
                </ul>
				
			</nav>

              <nav id="mnGaleria">
                  <h2>GALERIA</h2>
                  <ul>
                      <li><a href="#">INSERIR GALERIAs</a></li>
                      <li><a href="#">LISTAR GALERIAS</a></li>
                      <li><a href="#">PESQUISAR GALERIAS</a></li>
                  </ul>
              </nav>
         
              <nav id="mnPacotes">
                  <h2>PACOTES</h2>
                  <ul>
                      <li><a href="inserirPacote.php">INSERIR PACOTE</a></li>
                      <li><a href="listarPacotes.php">LISTAR PACOTE</a></li>
                      <li><a href="pesquisarPacotes.php">PESQUISAR PACOTE</a></li>
                  </ul>
              </nav>
             

            <nav id="mnNoticias">
                <h2>USUÁRIOS</h2>
                	<ul>
                     <?php
	if( ! isset($_SESSION['nivel']) || $_SESSION['nivel'] == 'A')
    {
       echo "<li><a href='inserirUsuario.php'>INSERIR USUÁRIO</a></li>
                        <li><a href='listarUsuarios.php'>LISTAR USUÁRIOS</a></li>
                        <li><a href='pesquisarUsuario.php'>PESQUISAR USUÁRIOS</a></li>";
    }
    ?>
                    </ul>
                    
            </nav>
	<!--
            <nav id="mnPublicidade">
                <h2>PUBLICIDADE</h2>
                    <ul>
                        <li><a href="#">INSERIR PUBLICIDADE</a></li>
                        <li><a href="#">LISTAR PUBLICIDADE</a></li>
                        <li><a href="#">PESQUISAR PUBLICIDADE</a></li>
                    </ul>
            </nav>

            <nav id="mnNewsletter">
                <h2>NEWSLETTER</h2>
                    <ul>
                        <li><a href="#">LISTAR EMAILS</a></li>
                        <li><a href="#">EXPORTAR PLANILHA</a></li>
                    </ul>
            </nav>
		-->
		</aside>