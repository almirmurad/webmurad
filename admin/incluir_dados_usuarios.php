<?php
include('abre.php');
include('menu.php');
include('conexao.php');

$titulo='Incluir Usuarios';

	   $nome  = $_POST['nome'];
	   $senha = $_POST['senha'];
	   $nivel = $_POST['nivel'];
	   
	   $senha = sha1($senha);
	   
	   
	   $sql = "INSERT INTO usuarios (NOME, SENHA, NIVEL)
	                    VALUES('$nome', '$senha', '$nivel')"; 
						
							   

//se der pau libera a linha abaixo
//die ($sql);

    if (mysql_query ($sql,$conexao))
	{
		echo"<script>alert('Usuario incluido com sucesso');</script>";
	}
    else
	{
	  
		echo "<srcipt>alert('Problema na inclusão');</script>";
	    die (mysql_error ($conexao));
	}
	
//redirecionamento em javascript
   	echo "<script>self.location = 'incluir_usuarios.php'</script>";
include('fecha_conexao.php');
?>
