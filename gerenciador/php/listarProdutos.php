<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="../estilo.css" rel="stylesheet" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema Gerenciador de Conteúdo - Web Murad - Desenvolvimento Web</title>
</head>
<body>
	<div id="container">

<?php 
include 'cabecalho.php';
?>

		
	<div id="corpo">

<?php 
include 'menu.php';
?>

	<h2 class="titcont"><span id="titulo">Início - Listar Produtos</span></h2>
        <section id= "conteudo">
        
     
<?php 
include("conecta.php");



	$sql = "SELECT * FROM produtos ORDER BY codProduto";
	$resultado = mysqli_query($conexao, $sql);
	$linhas = mysqli_num_rows($resultado) or die(mysqli_error($conexao));
	
	if ($linhas == 0)
		  {
			  echo 'Menu vazio!';
			  include('fecha.php');
			  exit;
		  }
	
	for($i=0; $i<$linhas; $i++)
		{
			$result	= mysqli_fetch_row($resultado);
			
			$codProduto				= $result[0];
			$nomeProduto			= $result[1];
			$descricaoProduto		= $result[2];
			$fotoProduto1			= $result[4];
			$entradaProduto			= $result[10];
			$entradaProduto			= date('d/m/Y h:i',strtotime($entradaProduto));


				echo"<ul id='produtos'>
	<a href='excluirProduto.php?codigo=$codProduto' onclick=\"return confirm('Deseja realmente excluir Produto $nomeProduto ?');\"><img class='excluir' src='../img/icones/iconeExcluir.png' width='110' height='122' alt='CLIQUE PARA EXCLUIR' /></a>
			<a href='alterarProduto.php?cod=$codProduto' \"><img class='alterar'src='../img/icones/iconeEditar.png' width='110' height='122' alt='CLIQUE PARA ALTERAR' /></a>
			<li class='foto'><img src='../img/produtos/$codProduto/$fotoProduto1' width='90' height='90' alt='FOTO PRODUTO' /></li>			
			<li class='prod'><b>Codigo:</b> $codProduto</li>
			<li class='prod'><b>Nome:</b> $nomeProduto</li>
			<li class='prod'><b>Descricao:</b> $descricaoProduto</li>
			<li class='prod'><b>Data Entrada:</b> $entradaProduto</li>

		</ul>
		<hr class='linha' />";

			
			}
			
	
	

?>
      </section>       
<?php 
include 'footer.php';
?>
	</div></div>
</body>
</html>