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

	<h2 class="titcont"><span id="titulo">Início - Inserir Produtos</span></h2>
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
                        
                        <form id="insereProduto" action="insereProduto.php" method="post"  enctype="multipart/form-data" name="form_insere" onsubmit="return valida(this)">
                   <fieldset>
                   <legend>Inserir Produtos:</legend>
                       <label>
                        <span>Nome:</span><br />
                        <input type="text" name="nome" maxlength="60" size="40" class="campos" onblur="return valida (this)" required="required" />
                       </label>
                         <label>
                        <span>Descrição do produto</span>
                        <textarea name="descricao" rols="30" cols="30" class="campos" required="required">
                        </textarea>
                        </label>  
                        <label>
                        <span>Preço: </span><span class="ex">300,00</span>
                        <input type="number" name="preco" maxlength="10" size="40" class="campos" />
                       </label>
                       <label>
                        <span>Foto 1: </span>
                        <input type="file" name="foto1"class="campos" required="required" accept="image/x-png, image/gif, image/jpeg" />
                       </label><label>
                        <span>Foto 2: </span>
                        <input type="file" name="foto2" class="campos" accept="image/x-png, image/gif, image/jpeg"/>
                       </label><label>
                        <span>Foto 3: </span>
                        <input type="file" name="foto3" class="campos" accept="image/x-png, image/gif, image/jpeg"/>
                       </label>
                       <label>
                        <span>Foto 4: </span>
                        <input type="file" name="foto4" class="campos" accept="image/x-png, image/gif, image/jpeg"/>
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