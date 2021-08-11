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
                        
                        <?php
                        include 'conecta.php';
        $codigo=$_GET['cod'];
		
		$sql="SELECT * FROM usuario WHERE cod ='$codigo'";
			$resultado = mysqli_query($conexao, $sql);
			$linhas = mysqli_num_rows($resultado);
					
					if ($linhas == 0)
		  {
			  echo 'Não há usuário cadastrado!';
			  include('fecha.php');
			  exit;
		  }
		  
		  for($i=0; $i<$linhas; $i++)
		{
			$result	= mysqli_fetch_row($resultado);
			
			$cod				= $result[0];
			$nome				= $result[1];
			$email				= $result[2];
			$telefone			= $result[4];
			$celular			= $result[5];
			$ativo				= $result[6];
			$nivel				= $result[7];
			$data				= $result[8];
		}
	  ?>
                        
                        
                        <form id="alteraUsuario" action="alteraUsuario.php" method="post" name="form_altera" onsubmit="return valida(this)">
                        
                   <fieldset>
                           
                     <legend>Cadastro de usuários:</legend>              
                              
                       <label><span>Codigo:</span> <input type="text" name="codigo" size="30" maxlength="150" class="campos" value="<?php echo "$cod"?>" readonly/></label>
                       <label><span>Nome completo:</span> <input type="text" name="nome" size="30" maxlength="150" class="campos" value="<?php echo "$nome"?>" /></label>
                       <label><span>E-mail:</span> <input type="text" name="email" size="30" maxlength="150" class="campos" value="<?php echo "$email"?>" /></label>
                       <label><span>Telefone:</span> <input type="text" name="telefone" size="30" maxlength="150" class="campos" value="<?php echo "$telefone"?>" /></label>
                       <label><span>Celular:</span> <input type="text" name="celular" size="30" maxlength="150" class="campos" value="<?php echo "$celular"?>" /></label>
                       <label><span>Nível de acesso:</span> <input type="text" name="nivel" size="10" maxlength="1" class="campos" value="<?php echo "$nivel"?>" /></label>
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