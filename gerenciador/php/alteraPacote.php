<?php

include('conecta.php');

$codigo		= $_POST['codigo'];
$titulo 	= $_POST['titulo'];
$resumo 	= $_POST['resumo'];
$descricao 		= $_POST['descricao'];
$capa 		= $_FILES['imagem']['name'];
$usuario    = $_POST['usuario'];
$ativo 		= $_POST['ativo'];
$codigo_usuario = $_POST['codigo_usuario'];
//$quantidade	= $_POST['quantidade'];
if($ativo == "sim")
	{
		$ativo = "sim";
	}else
	{
		$ativo = "nao";
	}

//$data 		= $_POST['data'];

	   
	$sql = "UPDATE pacotes SET cod              	='$codigo',
								titulo  			='$titulo',
							   	resumo              ='$resumo',
							   	descricao           ='$descricao',
							   	imagem              ='$capa', 
							   	ativo               ='$ativo',
							   	cod_usuario    		='$codigo_usuario',
							   	data            	= now()
							   		        					
								WHERE cod ='$codigo'"; 

//se der pau libera a linha abaixo
//die ($sql);

    if (mysqli_query ($conexao,$sql))
	{
		if(mysqli_affected_rows ($conexao)>0)
		{
		
		echo"<script> alert('Registros Alterados com sucesso $codigo_usuario')</script>";
		
		}
		else
		{
		echo "<script>alert('Problema na inclusão do arquivo')</script>";	
	    }
	}
    else
	{
	    echo mysqli_error ($conexao);
		echo "<srcipt>alert('Problema na alteração')</script>";
	}
	//redirecionamento em javascript
  echo "<script>self.location = 'listarPacotes.php'</script>";