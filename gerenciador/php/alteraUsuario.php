<?php 

include("conecta.php");

	 $codigo		= $_POST['codigo'];
	 $nome          = $_POST['nome'];
	 $email			= $_POST['email'];
	 $telefone		= $_POST['telefone'];
	 $celular		= $_POST['celular'];
 	 $nivel 		= $_POST['nivel'];
	 $senha         = $_POST['senha'];
	 $confirm_senha = $_POST['confirm_senha'];
	 $ativo			= $_POST['ativo'];
	 
	 $senha= sha1($senha);

	   
	$sql ="UPDATE usuario SET cod        	='$codigo',
								nome			='$nome',
							   	email    ='$email',
								senha		='$senha',
							   	telefone        ='$telefone',
							   	celular        ='$celular', 
							   	ativo        ='$ativo',
								nivel        ='$nivel',
							   	data   ='now()'
								 
								WHERE cod ='$codigo'"; 

//se der pau libera a linha abaixo

//die ($sql);
// echo mysql_error ($con);
    if (mysqli_query ($conexao, $sql))
	{
		echo"<script> alert('Registros alterados com sucesso')</script>";
		
	}
    else
	{
	    echo mysqli_error ($conexao);
		echo "<srcipt>alert('Problema na alteração')</script>";
	}
	//redirecionamento em javascript
   	echo "<script>self.location = 'listarUsuarios.php'</script>";

   ?>