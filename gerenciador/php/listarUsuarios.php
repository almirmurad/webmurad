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



	$sql = "SELECT * FROM usuario ORDER BY cod";
	$resultado = mysqli_query($conexao, $sql);
	$linhas = mysqli_num_rows($resultado) or die(mysql_error());
	
	if ($linhas == 0)
		  {
			  echo 'Não existe nenhum usuario cadastrado!';
			  include('fecha.php');
			  exit;
		  }
	
	for($i=0; $i<$linhas; $i++)
		{
			$result	= mysqli_fetch_row($resultado);
			
			$cod				= $result[0];
			$nome			= $result[1];
			$email		= $result[2];
			$telefone			= $result[4];
			$celular			= $result[5];
			$ativo			= $result[6];
			$nivel			= $result[7];
			$data			= $result[8];
            date_default_timezone_set('America/Sao_Paulo');
            $data = date('d/m/Y H:i:s', strtotime($data));


				echo"<ul id='usuarios'>
	<a href='excluirUsuario.php?codigo=$cod' onclick=\"return confirm('Deseja realmente excluir o Usuario $nome ?');\"><img class='excluir' src='../img/icones/iconeExcluir.png' width='110' height='122' alt='CLIQUE PARA EXCLUIR' /></a>
			<a href='alterarUsuario.php?cod=$cod' \"><img class='alterar'src='../img/icones/iconeEditar.png' width='110' height='122' alt='CLIQUE PARA ALTERAR' /></a>
			<li class='user'><b>Codigo:</b> $cod</li>
			<li class='user'><b>Nome:</b> $nome</li>
			<li class='user'><b>Email:</b> $email</li>
			<li class='user'><b>Telefone:</b> $telefone</li>
			<li class='user'><b>Celular:</b> $celular</li>
			<li class='user'><b>Ativo:</b> $ativo</li>
			<li class='user'><b>Nível:</b> $nivel</li>
			<li class='user'><b>Data Entrada:</b> $data</li>

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