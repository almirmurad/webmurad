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

	<h2 class="titcont"><span id="titulo">Início - Alterar Produto</span></h2>
        <section id= "conteudo">
        
  


         <div id="form">
                        <script language="javascript">
							function valida (form_insere)
									{
										if(form_contato.nome.value=="")
											{alert ("Por favor digite o nome."); return false;}
										if(form_contato.email.value.indexOf('@',0) == -1)
											{alert ("E-mail inválido."); return false;}
											return true;
									} 
						</script>
                    
        <?php
        include 'conecta.php';

        $codigo=$_GET['cod'];
		
		$sql="SELECT * FROM produtos WHERE codProduto ='$codigo'";
			$resultado = mysqli_query($conexao, $sql);
			$linhas = mysqli_num_rows($resultado);
					
					if ($linhas == 0)
		  {
			  echo 'TABELA DE PRODUTOS ESTÁ VAZIA';
			  include('fecha.php');
			  exit;
		  }
		  
		  for($i=0; $i<$linhas; $i++)
		{
			$result	= mysqli_fetch_row($resultado);
			
			$codProduto				= $result[0];
			$nomeProduto			= $result[1];
			$descricaoProduto		= $result[2];
			$precoProduto			= $result[3];
			$fotoProduto1			= $result[4];
			$fotoProduto2			= $result[5];
			$fotoProduto3			= $result[6];
			$fotoProduto4			= $result[7];
			$quantidadeProduto		= $result[8];
			$destaqueProduto		= $result[4];
			$entradaProduto			= $result[10];
			}
	  ?>
                        
                        <form id="alteraProduto" action="alteraProduto.php" method="post"  enctype="multipart/form-data" name="form_insere" onsubmit="return valida(this)">
                   <fieldset>
                   <legend>Alterar Produtos:</legend>
                   <label>
                        <span>Codigo:</span><br />
                        <input type="text" name="codigo" maxlength="4" size="4" class="campos" value="<?php echo"$codProduto";?>" onblur="return valida (this)" readonly/>
                       </label>
                       <label>
                        <span>Nome:</span><br />
                        <input type="text" name="nome" maxlength="60" size="40" class="campos" value="<?php echo"$nomeProduto";?>" onblur="return valida (this)" />
                       </label>
                         <label>
                        <span>Descrição do produto</span>
                        <textarea name="descricao" rols="30" cols="30" class="campos">
                        <?php echo"$descricaoProduto";?>
                        </textarea>
                        </label>  
                        <label>
                        <span>Preço: </span><span class="ex">300,00</span>
                        <input type="text" name="preco" maxlength="10" size="40" value="<?php echo"$precoProduto";?>" class="campos" />
                       </label>
                       <label>
                        <span>Foto 1: </span>
                        <input type="file" name="foto1" value="<?php echo"$fotoProduto1";?>" maxlength="50" size="40" class="campos" />
                       </label><label>
                        <span>Foto 2: </span>
                        <input type="file" name="foto2" value="<?php echo"$fotoProduto2";?>" maxlength="50" size="40" class="campos" />
                       </label><label>
                        <span>Foto 3: </span>
                        <input type="file" name="foto3" value="<?php echo"$fotoProduto3";?>" maxlength="50" size="40" class="campos" />
                       </label>
                       <label>
                        <span>Foto 4: </span>
                        <input type="file" name="foto4" value="<?php echo"$fotoProduto4";?>" maxlength="50" size="40" class="campos" />
                       </label>
                       
                        
                        <label>
                        <input type="submit" value="ENVIAR" class="btn" />
                        <input type="reset" value="LIMPAR" class="btn" />
                        </label>
                        
                   </fieldset>
                  </form>
                             
                 
                        </div>
        
        
 </section>       
<?php 
include 'footer.php';
?>
	</div></div>
</body>
</html>