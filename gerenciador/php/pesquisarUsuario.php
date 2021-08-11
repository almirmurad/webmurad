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

	<h2 class="titcont"><span id="tit">Início - Pesquisar Usuarios</span></h2>
        <section id= "conteudo">
        
     

                        <div id="form">
<!--                        <script language="javascript">
							function valida (pesquisaNomeProduto)
									{
										if(pesquisaNomeProduto.nome.value=="" )
											{alert ("Por favor digite o nome."); return false;}
										if(pesquisaNomeProduto.codigo.value=="")
											{alert ("E-mail inválido."); return false;}
											return true;
									} 
						</script>
-->                        
                        <form id="pesquisaNomeUsuario" action="pesquisarUsuario.php" method="post" name="form_pesquisaNomeUsuario" onsubmit="return valida(this)">
                   <fieldset>
                   <legend>Pesquisar usuários por nome/codigo:</legend>
                       <label>
                        <span>Nome:</span><br />
                        <input type="text" name="nome" maxlength="60" size="40" class="campos" onblur="return valida (this)" />
                       </label>
                       <label>
                        <span>Codigo:</span><br />
                        <input type="text" name="codigo" maxlength="4" size="4" class="campos" onblur="return valida (this)" />
                       </label>
                        <label> 
                        <input type="submit" value="ENVIAR" class="btn" />
                        </label>
                        
                   </fieldset>
                  </form>
                       
                                        
                        </div><br />
                        
                        <?php
					
					include 'conecta.php';
					
					if($_POST){
						$nomeUsuario=$_POST['nome'];
						$codUsuario=$_POST['codigo'];
						
						
							if(isset ($nomeUsuario) and !empty ($nomeUsuario) or isset ($codUsuario) and !empty ($codUsuario))
							{
								if (empty($codUsuario))
								{
										  echo "busca por nome do usuário no campo de busca! -> '$nomeUsuario'<br />";
										  
										  $sql = "SELECT * FROM usuario WHERE nome LIKE '%$nomeUsuario%'";
								$resultado = mysqli_query($conexao, $sql);
								$linhas = mysqli_num_rows($resultado) or die(mysqli_error());
		
								if ($linhas == 0)
									  {
										  echo 'Menu vazio!';
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
				$data			= date('d/m/Y h:i',strtotime($data));
	
	
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
										 
									  }
									  
									 elseif (empty($nomeUsuario) )				  
									 {
										 echo "busca por codigo do usuario no campo de busca! -> '$codUsuario'<br />";
																			  
								$sql = "SELECT * FROM usuario WHERE cod LIKE '%$codUsuario%'";
								$resultado = mysqli_query($conexao, $sql);
								$linhas = mysqli_num_rows($resultado) or die(mysqli_error());
		
								if ($linhas == 0)
									  {
										 echo 'Menu vazio!';
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
				$data			= date('d/m/Y h:i',strtotime($data));
	
	
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
										} 
								
							}	
						
							
							
										elseif(!isset ($nomeUsuario) or empty($nomeUsuario) or !isset ($codUsuario) or empty($codUsuario))
										{
										  echo 'Faça sua Pesquisa no formulário acima!';
										  echo '</section>';
										  include 'footer.php';
											echo '</div></div></body></html>';
										  include('fecha.php');
										  exit;
										 }
	
										
					}
                        ?>
       
        
 </section>       
<?php 
include 'footer.php';
include 'fecha.php';

?>
	</div></div>
</body>
</html>