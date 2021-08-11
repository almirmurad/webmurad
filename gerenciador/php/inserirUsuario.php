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

	<h2 class="titcont"><span id="titulo">Início - Inserir Usuários</span></h2>
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
                        
                        <form id="insereUsuario" action="insereUsuario.php" method="post" name="form_insere" onsubmit="return valida(this)">
                        
                   <fieldset>
                           
                     <legend>Cadastro de usuários:</legend>              
                              
                       
                       <label><span>Nome completo:</span> <input type="text" name="nome" size="30" maxlength="150" class="campos" /></label>
                       <label><span>E-mail:</span> <input type="text" name="email" size="30" maxlength="150" class="campos" /></label>
                       <label><span>Telefone:</span> <input type="text" name="telefone" size="30" maxlength="150" class="campos" /></label>
                       <label><span>Celular:</span> <input type="text" name="celular" size="30" maxlength="150" class="campos" /></label>
                       <label><span>Nível de acesso (A ou B):</span> <input type="text" name="nivel" size="10" maxlength="1" class="campos" /></label>
                       <label><span>Senha:</span> <input type="password" name="senha" size="8" maxlength="8" class="campos" /></label>
                       <label><span>Confirme sua senha:</span> <input type="password" name="confirm_senha" size="8" maxlength="8" class="campos" /></label>
                       <label><span>Ativo:</span><br />

                       Sim -> <input type="radio" name="ativo" value="sim" class="radio" checked="checked" />
                       Não -> <input type="radio" name="ativo" value="nao" class="radio" /></label>
                              <label>                      
                              <input type="submit" class="btn" value="Cadastrar" />
                              <input type="reset" class="btn" value="Limpar" />
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