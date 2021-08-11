<?php session_start(); include 'verifica.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="../estilo.css" rel="stylesheet" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema Gerenciador de Conteúdo - Web Murad - Desenvolvimento Web</title>
    <script type="javascript" src="addInput.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

	<h2 class="titcont"><span id="titulo">Início - Inserir Pacotes</span></h2>
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
                        
                        <form action="inserePacote.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Incluir Pacotes:</legend>
<label>
<span>TITULO:</span><input type="text" name="titulo" maxlength="45" size="40" class="campos" />
</label>

<label>
<span>RESUMO:</span><textarea name="resumo" cols="2" rows="5" class="campos" ></textarea>
</label>

<label>
<span>DESCRIÇÃO:</span>
<textarea name="descricao" cols="30" rows="30" class="campos" style="height:150px; width:320px;"></textarea>
</label>


<input type="hidden" name="MAX_FILE_SIZE" size="30000" />



<label>
<span>FOTO DO PACOTE:</span><input type="file" name="imagem" size="40" class="campos"/>
</label>

<label>
<span>USUÁRIO</span><input type="text" name="usuario" maxlength="15" size="40" value="<?php echo $_SESSION['usuario'];?>" class="campos" />
</label>
<label>
<input type="hidden" name="codigo_usuario" maxlength="15" size="40" value="<?php echo $_SESSION['codigo_usuario'];?>" class="campos" />
</label>

<label><span>Este pacote está ativo?</span></label>
<label><span>SIM: </span> <input name="ativo" type="radio" value="sim" /></label> 
<label><span>NÃO: </span> <input name="ativo" type="radio" value="nao" /></label>



<label><input type="submit" value="INCLUIR" class="btn"></label>
<label><input type="reset" value="LIMPAR" class="btn"></label>
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














