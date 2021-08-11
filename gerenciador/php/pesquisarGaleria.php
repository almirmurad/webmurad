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
                        <form id="pesquisaNomeGaleria" action="pesquisarGaleria.php" method="post" name="form_pesquisaNome" onsubmit="return valida(this)">
                   <fieldset>
                   <legend>Pesquisar Galerias por nome:</legend>
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
						if($_POST){
						include 'conecta.php';
	
						$nomeGaleria=$_POST['nome'];
						$codGaleria=$_POST['codigo'];
						
						
							if(isset ($nomeGaleria) and !empty ($nomeGaleria) or isset ($codGaleria) and !empty ($codGaleria))
							{
								if (empty($codGaleria))
								{
										  echo "busca por nome do produto no campo de busca! -> '$nomeGaleria'<br />";
										  
										  $sql = "SELECT * FROM galeria WHERE nome LIKE '%$nomeGaleria%'";
								$resultado = mysqli_query($conexao, $sql);
								$linhas = mysqli_num_rows($resultado);//or die(mysqli_error());
		
								if ($linhas == 0)
									  {
										  echo "<br> GALERIA $nomeGaleria INEXISTENTE!";
										  include('fecha.php');
										  exit;
									  }
									  
								for($i=0; $i<$linhas; $i++)
									{
										$result	= mysqli_fetch_row($resultado);
										
										$codGaleria				= $result[0];
										$nomeGaleria			= $result[1];
										$descricaoGaleria		= $result[2];
										$capa       			= $result[3];
										$entradaGaleria			= $result[5];
										$entradaGaleria			= date('d/m/Y h:i',strtotime($entradaGaleria));
							
							
											echo"<ul id='produtos'>
								<a href='excluirProduto.php?codigo=$codGaleria' onclick=\"return confirm('Deseja realmente excluir Produto $nomeGaleria ?');\"><img class='excluir' src='../img/icones/iconeExcluir.png' width='110' height='122' alt='CLIQUE PARA EXCLUIR' /></a>
										<a href='alterarProduto.php?cod=$codGaleria' \"><img class='alterar'src='../img/icones/iconeEditar.png' width='110' height='122' alt='CLIQUE PARA ALTERAR' /></a>
										<li class='foto'><img src='../../imgs/lightbox/galeria/$codGaleria/$capa' width='90' height='90' alt='FOTO PRODUTO' /></li>			
										<li class='prod'><b>Codigo:</b> $codGaleria</li>
										<li class='prod'><b>Nome:</b> $nomeGaleria</li>
										<li class='prod'><b>Descricao:</b> $descricaoGaleria</li>
										<li class='prod'><b>Data Entrada:</b> $entradaGaleria</li>
							
									</ul>
									<hr class='linha' />";
							
										
										}
										 
									  }
									  
									 elseif (empty($nomeGaleria) )
									 {
										 echo "busca por codigo da galeria no campo de busca! -> '$codGaleria'<br />";
																			  
								$sql = "SELECT * FROM galeria WHERE id LIKE '%$codGaleria%'";
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

                                        $codGaleria				= $result[0];
                                        $nomeGaleria			= $result[1];
                                        $descricaoGaleria		= $result[2];
                                        $capa       			= $result[3];
                                        $entradaGaleria			= $result[4];
                                        $entradaGaleria			= date('d/m/Y h:i',strtotime($entradaGaleria));


                                        echo"<ul id='produtos'>
								<a href='excluirProduto.php?codigo=$codGaleria' onclick=\"return confirm('Deseja realmente excluir Produto $nomeGaleria ?');\"><img class='excluir' src='../img/icones/iconeExcluir.png' width='110' height='122' alt='CLIQUE PARA EXCLUIR' /></a>
										<a href='alterarProduto.php?cod=$codGaleria' \"><img class='alterar'src='../img/icones/iconeEditar.png' width='110' height='122' alt='CLIQUE PARA ALTERAR' /></a>
										<li class='foto'><img src='../../imgs/lightbox/galeria/$codGaleria/$capa' width='90' height='90' alt='FOTO GALERIA' /></li>			
										<li class='prod'><b>Codigo:</b> $codGaleria</li>
										<li class='prod'><b>Nome:</b> $nomeGaleria</li>
										<li class='prod'><b>Descricao:</b> $descricaoGaleria</li>
										<li class='prod'><b>Data Entrada:</b> $entradaGaleria</li>
							
									</ul>
									<hr class='linha' />";
							
										
										}
										} 
								
							}	
						
							
							
										elseif(!isset ($nomeGaleria) or empty($nomeGaleria) or !isset ($codGaleria) or empty($codGaleria))
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