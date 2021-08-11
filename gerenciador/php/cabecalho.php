<?php
if (!isset($_SESSION))
{
	echo"<header id='cabecalho'>
			<h1>Sistema Gerenciador de Conteúdo</h1>
            
			<p>Faça login no Formulário abaixo para entrar no Gerenciador <br />";
}else
{
	$usuario        = $_SESSION['usuario'];
	$codigo_usuario = $_SESSION['codigo_usuario'];
echo "<header id='cabecalho'>
			<h1>Sistema Gerenciador de Conteúdo</h1>
            
			<p>Olá $usuario ($codigo_usuario), seja bem vindo ao sistema administrativo do seu site! <br />
			Hoje é ".date('d/m/Y')."</p>";

			if (isset($pagina) and $pagina == 'index') {
				echo"<nav id='mnSup'>
					<ul>
						<li><a href='logout.php' class='logout'></a></li>
						<li><a href='index.php'>Instruções</a></li>
					</ul>
				</nav>
		</header>";
			}else{
				echo"<nav id='mnSup'>
					<ul>
						<li><a href='logout.php' class='logout'></a></li>
						<li><a href='../index.php'>Instruções</a></li>
					</ul>
				</nav>
		</header>";
			}

				
}
?>