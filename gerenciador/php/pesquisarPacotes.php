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

	<h2 class="titcont"><span id="titulo">Início - Pesquisar Produtos</span></h2>
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
                        <form id="pesquisatituloPacote" action="pesquisarPacotes.php" method="post" name="form_pesquisaNome" onsubmit="return valida(this)">
                   <fieldset>
                   <legend>Pesquisar Pacotes por nome:</legend>
                       <label>
                        <span>Título:</span><br />
                        <input type="text" name="titulo" maxlength="60" size="40" class="campos" onblur="return valida (this)" />
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
						if($_POST){
						include 'conecta.php';
	
						$tituloPacote=$_POST['titulo'];
						$codPacote=$_POST['codigo'];
						
						
							if(isset ($tituloPacote) and !empty ($tituloPacote) or isset ($codPacote) and !empty ($codPacote))
							{
								if (empty($codPacote))
								{
										  echo "busca por titulo do pacote no campo de busca! -> '$tituloPacote'<br />";
										  
										  $sql = "SELECT pacotes.cod, pacotes.titulo, pacotes.data, pacotes.resumo, pacotes.descricao, pacotes.imagem, usuario.nome, pacotes.ativo FROM pacotes, usuario WHERE pacotes.titulo LIKE '%$tituloPacote%' and pacotes.cod_usuario = usuario.cod ORDER BY pacotes.titulo";
										  //$sql = "SELECT * FROM pacotes WHERE titulo LIKE '%$tituloPacote%' ORDER BY titulo";
										 

								$resultado = mysqli_query($conexao, $sql);
								$linhas = mysqli_num_rows($resultado);//or die(mysqli_error());
		
								if ($linhas == 0)
									  {
										  echo "<br> PACOTE $tituloPacote INEXISTENTE!";
										  include('fecha.php');
										  exit;
									  }
									  
								for($i=0; $i<$linhas; $i++)
									{
										$result	= mysqli_fetch_row($resultado);
										
										$codPacote				= $result[0];
										$tituloPacote			= $result[1];
										$entradaPacote			= $result[2];
							            date_default_timezone_set('America/Sao_Paulo');
							            $entradaPacote = date('d/m/Y H:i:s', strtotime($entradaPacote));
										$resumoPacote		= $result[3];
										$descricaoPacote			= $result[4];
										$imagem			= $result[5];
										$ativo			= $result[7];
										$usuario			= $result[6];
							
							
											echo"<ul id='usuarios'>
								<a href='excluirProduto.php?codigo=$codPacote' onclick=\"return confirm('Deseja realmente excluir Produto $tituloPacote ?');\"><img class='excluir' src='../img/icones/iconeExcluir.png' width='110' height='122' alt='CLIQUE PARA EXCLUIR' /></a>
										<a href='alterarPacote.php?cod=$codPacote' \"><img class='alterar'src='../img/icones/iconeEditar.png' width='110' height='122' alt='CLIQUE PARA ALTERAR' /></a>
										<li class='foto'><img src='../../img/banner/$imagem' width='90' height='90' alt='FOTO PRODUTO' /></li>				
										
										<li class='user'><b>Codigo:</b> $codPacote</li>
			                            <li class='user'><b>Título:</b> $tituloPacote</li>
			                            <li class='user'><b>Resumo:</b> $resumoPacote</li>
			                            <li class='user'><b>Descrição:</b> $descricaoPacote</li>
			                            <li class='user'><b>Usuário:</b> $usuario</li>
			                            <li class='user'><b>Data Entrada:</b> $entradaPacote</li>
			                            <li class='user'><b>Ativo:</b> $ativo</li>
			
			                            
                                        
							
									</ul>
									<hr class='linha' />";
							
							
										
										}
										 
									  }
									  
									 elseif (empty($tituloPacote) )
									 {
										 echo "busca por codigo do pacote no campo de busca! -> '$codPacote'<br />";

								$sql = "SELECT pacotes.cod, pacotes.titulo, pacotes.data, pacotes.resumo, pacotes.descricao, pacotes.imagem, usuario.nome, pacotes.ativo FROM pacotes, usuario WHERE pacotes.cod LIKE '%$codPacote%' and pacotes.cod_usuario = usuario.cod order BY pacotes.cod";											  
								//$sql = "SELECT * FROM pacotes WHERE cod LIKE '%$codPacote%'";

								//$sql = "SELECT P.cod, P.titulo, P.data, P.resumo, P.descricao, P.imagem, P.ativo, U.nome
										//FROM pacotes AS P
										//JOIN usuario AS U ON P.cod_usuario = U.cod WHERE P.cod LIKE '%$codPacote%'";





								$resultado = mysqli_query($conexao,$sql);
								$linhas = mysqli_num_rows($resultado);//or die(mysqli_error($conexao));
		
								if ($linhas == 0)
									  {
										  echo 'Código inexistente, refaça a pesquisa!';
										  echo '</section>';
										  include 'footer.php';
											echo '</div></div></body></html>';
										  include('fecha.php');
										  exit;
									  }
									  
								for($i=0; $i<$linhas; $i++)
									{
                                        $result	= mysqli_fetch_row($resultado);

                                        $codPacote				= $result[0];
										$tituloPacote			= $result[1];
										$entradaPacote			= $result[2];
							            date_default_timezone_set('America/Sao_Paulo');
							            $entradaPacote = date('d/m/Y H:i:s', strtotime($entradaPacote));
										$resumo		= $result[3];
										$descricaoPacote			= $result[4];
										$imagem			= $result[5];
										$ativo			= $result[7];
										$usuario			= $result[6];
							

                                        echo"<ul id='usuarios'>
								<a href='excluirProduto.php?codigo=$codPacote' onclick=\"return confirm('Deseja realmente excluir Produto $tituloPacote ?');\"><img class='excluir' src='../img/icones/iconeExcluir.png' width='110' height='122' alt='CLIQUE PARA EXCLUIR' /></a>
										<a href='alterarPacote.php?cod=$codPacote' \"><img class='alterar'src='../img/icones/iconeEditar.png' width='110' height='122' alt='CLIQUE PARA ALTERAR' /></a>
										<li class='foto'><img src='../../img/banner/$imagem' width='90' height='90' alt='FOTO PRODUTO' /></li>				
										
										<li class='user'><b>Codigo:</b> $codPacote</li>
			                            <li class='user'><b>Título:</b> $tituloPacote</li>
			                            <li class='user'><b>Resumo:</b> $resumoPacote</li>
			                            <li class='user'><b>Descrição:</b> $descricaoPacote</li>
			                            <li class='user'><b>Usuário:</b> $usuario</li>
			                            <li class='user'><b>Data Entrada:</b> $entradaPacote</li>
			                            <li class='user'><b>Ativo:</b> $ativo</li>
			

							
									</ul>
									<hr class='linha' />";
							
										
										}
										} 
								
							}	
						
							
							
										elseif(!isset ($tituloPacote) or empty($tituloPacote) or !isset ($codPacote) or empty($codPacote))
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