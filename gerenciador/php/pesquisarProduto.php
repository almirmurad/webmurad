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
                        <form id="pesquisaNomeProduto" action="pesquisarProduto.php" method="post" name="form_pesquisaNome" onsubmit="return valida(this)">
                   <fieldset>
                   <legend>Pesquisar Produtos por nome:</legend>
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
	
						$nomeProduto=$_POST['nome'];
						$codProduto=$_POST['codigo'];
						
						
							if(isset ($nomeProduto) and !empty ($nomeProduto) or isset ($codProduto) and !empty ($codProduto))
							{
								if (empty($codProduto))
								{
										  echo "busca por nome do produto no campo de busca! -> '$nomeProduto'<br />";
										  
										  $sql = "SELECT * FROM produtos WHERE nomeProduto LIKE '%$nomeProduto%'";
								$resultado = mysql_query($sql);
								$linhas = mysql_num_rows($resultado) or die(mysql_error());
		
								if ($linhas == 0)
									  {
										  echo 'Menu vazio!';
										  include('fecha.php');
										  exit;
									  }
									  
								for($i=0; $i<$linhas; $i++)
									{
										$result	= mysql_fetch_row($resultado);
										
										$codProduto				= $result[0];
										$nomeProduto			= $result[1];
										$descricaoProduto		= $result[2];
										$fotoProduto1			= $result[4];
										$entradaProduto			= $result[10];
										$entradaProduto			= date('d/m/Y h:i',strtotime($entradaProduto));
							
							
											echo"<ul id='produtos'>
								<a href='excluirProduto.php?codigo=$codProduto' onclick=\"return confirm('Deseja realmente excluir Produto $nomeProduto ?');\"><img class='excluir' src='../img/icones/iconeExcluir.png' width='110' height='122' alt='CLIQUE PARA EXCLUIR' /></a>
										<a href='alterarProduto.php?cod=$codProduto' \"><img class='alterar'src='../img/icones/iconeEditar.png' width='110' height='122' alt='CLIQUE PARA ALTERAR' /></a>
										<li class='foto'><img src='../img/thumbs/$fotoProduto1' width='90' height='90' alt='FOTO PRODUTO' /></li>			
										<li class='prod'><b>Codigo:</b> $codProduto</li>
										<li class='prod'><b>Nome:</b> $nomeProduto</li>
										<li class='prod'><b>Descricao:</b> $descricaoProduto</li>
										<li class='prod'><b>Data Entrada:</b> $entradaProduto</li>
							
									</ul>
									<hr class='linha' />";
							
										
										}
										 
									  }
									  
									 elseif (empty($nomeProduto) )				  
									 {
										 echo "busca por codigo do produto no campo de busca! -> '$codProduto'<br />";
																			  
								$sql = "SELECT * FROM produtos WHERE codProduto LIKE '%$codProduto%'";
								$resultado = mysql_query($sql);
								$linhas = mysql_num_rows($resultado) or die(mysql_error());
		
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
										$result	= mysql_fetch_row($resultado);
										
										$codProduto				= $result[0];
										$nomeProduto			= $result[1];
										$descricaoProduto		= $result[2];
										$fotoProduto1			= $result[4];
										$entradaProduto			= $result[10];
										$entradaProduto			= date('d/m/Y h:i',strtotime($entradaProduto));
							
							
											echo"<ul id='produtos'>
								<a href='excluirProduto.php?codigo=$codProduto' onclick=\"return confirm('Deseja realmente excluir Produto $nomeProduto ?');\"><img class='excluir' src='../img/icones/iconeExcluir.png' width='110' height='122' alt='CLIQUE PARA EXCLUIR' /></a>
										<a href='alterarProduto.php?cod=$codProduto' \"><img class='alterar'src='../img/icones/iconeEditar.png' width='110' height='122' alt='CLIQUE PARA ALTERAR' /></a>
										<li class='foto'><img src='../img/thumbs/$fotoProduto1' width='90' height='90' alt='FOTO PRODUTO' /></li>			
										<li class='prod'><b>Codigo:</b> $codProduto</li>
										<li class='prod'><b>Nome:</b> $nomeProduto</li>
										<li class='prod'><b>Descricao:</b> $descricaoProduto</li>
										<li class='prod'><b>Data Entrada:</b> $entradaProduto</li>
							
									</ul>
									<hr class='linha' />";
							
										
										}
										} 
								
							}	
						
							
							
										elseif(!isset ($nomeProduto) or empty($nomeProduto) or !isset ($codProduto) or empty($codProduto))
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