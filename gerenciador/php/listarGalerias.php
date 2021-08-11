<?php session_start(); include 'verifica.php'; ?>
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

	<h2 class="titcont"><span id="titulo">Início - Listar Galerias</span></h2>
        <section id= "conteudo">


<?php
include("conecta.php");



	$sql = "SELECT * FROM galeria ORDER BY id";
	$resultado = mysqli_query($conexao, $sql);
	$linhas = mysqli_num_rows($resultado);// or die(mysqli_error($conexao));
	if ($linhas == 0)
		  {
			  echo"<p>AINDA NÃO HÁ GALERIA CADASTRADA!<br> CLIQUE EM INSERIR GALERIA NO MENU AO LADO E
            PREENCHA O FORMULÁRIO DE INSERÇÃO DE GALERIA.";

			  include('fecha.php');
			  exit;
		  }
	  else{
	
	for($i=0; $i<$linhas; $i++)
		{
			$result	= mysqli_fetch_row($resultado);
			
			$cod			= $result[0];
			$nome			= $result[1];
			$descricao		= $result[2];
			$capa           = $result[3];
			$data           =$result[5];
            date_default_timezone_set('America/Sao_Paulo');
            $entrada = date('d/m/Y H:i:s', strtotime($data));


				echo"<ul id='produtos'>
	<a href='excluirGaleria.php?codigo=$cod' onclick=\"return confirm('Deseja realmente excluir a galeria $nome ?');\"><img class='excluir' src='../img/icones/iconeExcluir.png' width='110' height='122' alt='CLIQUE PARA EXCLUIR' /></a>
			<a href='alterarGaleria.php?cod=$cod' \"><img class='alterar'src='../img/icones/iconeEditar.png' width='110' height='122' alt='CLIQUE PARA ALTERAR' /></a>
			<li class='foto'><img src='../../imgs/lightbox/galeria/$cod/$capa' width='90' height='90' alt='FOTO PRODUTO' /></li>			
			<li class='prod'><b>Codigo:</b> $cod</li>
			<li class='prod'><b>Nome:</b> $nome</li>
			<li class='prod'><b>Descricao:</b> $descricao</li>
			<li class='prod'><b>Data Entrada:</b> $entrada</li>

		</ul>
		<hr class='linha' />";

			
			}

    }
	

?>
      </section>       
<?php 
include 'footer.php';
?>
	</div></div>
</body>
</html>