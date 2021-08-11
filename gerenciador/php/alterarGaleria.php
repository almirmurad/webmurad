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

	<h2 class="titcont"><span id="titulo">Início - Alterar Galeria</span></h2>
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
		
		$sql="SELECT * FROM galeria WHERE id ='$codigo'";
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
			
			$codGaleria				= $result[0];
			$nomeGaleria			= $result[1];
			$descricaoGaleria		= $result[2];
			$destaqueGaleria		= $result[3];
			$data			= $result[4];
			}
	  ?>
                        
                        <form id="alteraGaleria" action="alteraGaleria.php" method="post"  enctype="multipart/form-data" name="form_insere" onsubmit="return valida(this)">
                   <fieldset>
                        <legend>Alterar Galeria:</legend>
                        <label>
                        <span>Codigo:</span><br />
                        <input type="text" name="codigo" maxlength="4" size="4" class="campos" value="<?php echo"$codGaleria";?>" onblur="return valida (this)" readonly />
                        </label>
                        <label>
                        <span>Nome:</span><br />
                        <input type="text" name="nome" maxlength="60" size="40" class="campos" value="<?php echo"$nomeGaleria";?>" onblur="return valida (this)" />
                        </label>
                        <label>
                        <span>Descrição do produto</span>
                        <textarea name="descricao" rols="30" cols="30" class="campos">
                        <?php echo"$descricaoGaleria";?>
                        </textarea>
                        </label>  
                        <label>
                        <span>Foto 1: </span>
                        <input type="file" name="foto1" value="<?php echo"$fotoGaleria1";?>" maxlength="50" size="40" class="campos" />
                        </label><label>
                        <span>Foto 2: </span>
                        <input type="file" name="foto2" value="<?php echo"$fotoGaleria2";?>" maxlength="50" size="40" class="campos" />
                        </label><label>
                        <span>Foto 3: </span>
                        <input type="file" name="foto3" value="<?php echo"$fotoGaleria3";?>" maxlength="50" size="40" class="campos" />
                        </label>
                        <label>
                        <span>Foto 4: </span>
                        <input type="file" name="foto4" value="<?php echo"$fotoGaleria4";?>" maxlength="50" size="40" class="campos" />
                        </label>
                        <label>
                        <span>Foto 5: </span>
                        <input type="file" name="foto5" value="<?php echo"$fotoGaleria5";?>" maxlength="50" size="40" class="campos" />
                        </label>
                        <label>
                        <span>Foto 6: </span>
                        <input type="file" name="foto6" value="<?php echo"$fotoGaleria6";?>" maxlength="50" size="40" class="campos" />
                        </label>
                        <label>
                        <span>Foto 7: </span>
                        <input type="file" name="foto7" value="<?php echo"$fotoGaleria7";?>" maxlength="50" size="40" class="campos" />
                        </label>
                        <label>
                        <span>Foto 8: </span>
                        <input type="file" name="foto8" value="<?php echo"$fotoGaleria8";?>" maxlength="50" size="40" class="campos" />
                        </label>
                        <label>
                        <span>Foto 9: </span>
                        <input type="file" name="foto9" value="<?php echo"$fotoGaleria9";?>" maxlength="50" size="40" class="campos" />
                        </label>
                        <label>
                        <span>Foto 10: </span>
                        <input type="file" name="foto10" value="<?php echo"$fotoGaleria10";?>" maxlength="50" size="40" class="campos" />
                        </label>
                        <label>
                        <span>Foto 11: </span>
                        <input type="file" name="foto11" value="<?php echo"$fotoGaleria11";?>" maxlength="50" size="40" class="campos" />
                        </label>
                        <label>
                        <span>Foto 12: </span>
                        <input type="file" name="foto12" value="<?php echo"$fotoGaleria12";?>" maxlength="50" size="40" class="campos" />
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