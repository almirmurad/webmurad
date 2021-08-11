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

	<h2 class="titcont"><span id="titulo">Início - Listar Usuários</span></h2>
        <section id= "conteudo">
        
     
<?php 
include("conecta.php");



	//$sql = "SELECT * FROM `pacotes` ORDER BY cod";

	$sql = "SELECT pacotes.cod, pacotes.titulo, pacotes.data, pacotes.resumo, pacotes.descricao, pacotes.imagem, usuario.nome, pacotes.ativo FROM pacotes, usuario WHERE pacotes.cod_usuario = usuario.cod order BY pacotes.cod";




	$resultado = mysqli_query($conexao, $sql);
	$linhas = mysqli_num_rows($resultado);//or die(mysqli_error());
	
	if ($linhas == 0)
		  {
			  echo 'Não existe nenhum pacote cadastrado!';
			  include('fecha.php');
			  //exit;
		  }
	
	for($i=0; $i<$linhas; $i++)
		{
			$result	= mysqli_fetch_row($resultado);
			
			$cod				= $result[0];
			$titulo			= $result[1];
			$data			= $result[2];
            date_default_timezone_set('America/Sao_Paulo');
            $data = date('d/m/Y H:i:s', strtotime($data));
			$resumo		= $result[3];
			$descricao			= $result[4];
			$imagem			= $result[5];
			$ativo			= $result[6];
			$usuario			= $result[7];
			


				echo"<ul id='usuarios'>
	<a href='excluirPacote.php?codigo=$cod' onclick=\"return confirm('Deseja realmente excluir o Pacote $titulo ?');\"><img class='excluir' src='../img/icones/iconeExcluir.png' width='110' height='122' alt='CLIQUE PARA EXCLUIR' /></a>
			<a href='alterarPacote.php?cod=$cod' \"><img class='alterar'src='../img/icones/iconeEditar.png' width='110' height='122' alt='CLIQUE PARA ALTERAR' /></a>
			<li class='foto'><img src='../../img/banner/$imagem' width='90' height='90' alt='FOTO PRODUTO' /></li>
			<li class='user'><b>Codigo:</b> $cod</li>
			<li class='user'><b>Título:</b> $titulo</li>
			<li class='user'><b>Resumo:</b> $resumo</li>
			<li class='user'><b>Usuário:</b> $usuario</li>
			<li class='user'><b>Ativo:</b> $ativo</li>
			
			<li class='user'><b>Data Entrada:</b> $data</li>
			<li class='user'><b>Resumo:</b> $descricao</li>
					

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