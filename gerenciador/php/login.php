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

		
	<div id="corpoLogin">

	<h2 class="titcontLogin"><span id="titulo">Login</span></h2>
        <section id= "conteudoLogin">
        
         <div id="formLogin">
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

			<form action="confirma_usuario.php" method="post">
                        
                   <fieldset>
                           
                     <legend>Login para Area administrativa:</legend>              
                              
                       
                       <label><span>E-mail:</span> <input type="text" name="email" size="30" maxlength="150" class="campos" /></label>
                       
                       <label><span>Senha:</span> <input type="password" name="senha" size="8" maxlength="8" class="campos" /></label>
						<label>
                              
                              <a href="../../"><input type="button" class="btn" value="Voltar ao site" /></a>
                              <input type="reset" class="btn" value="Limpar" />
                              <input type="submit" class="btn" value="Logar" />
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