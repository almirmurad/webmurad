<?php

include('conecta.php');

	   $titulo  = $_POST['titulo'];
	   //$data    = $_POST['data'];
	   $resumo  =addslashes( $_POST['resumo']);
	   $descricao = $_POST['descricao'];
	   $imagem    = $_FILES['imagem']['name'];
	   $codigo_usuario =$_POST['codigo_usuario'];
	   $ativo = $_POST['ativo'];
	    if($ativo == 'sim' )
		{
		  $ativo="sim";	
		}
		else
		{
		  $ativo="nao";	
		}

	   
	   //$email=$_POST['email'];
	      
	   utf8_encode("$resumo");
       utf8_encode("$titulo");	
	   utf8_encode("$descricao");
	   
	$sql = "INSERT INTO pacotes (titulo, data, resumo, descricao, ativo, imagem, cod_usuario)
	        VALUES('$titulo', now(), '$resumo', '$descricao', '$ativo', '$imagem', '$codigo_usuario')"; 

//se der pau libera a linha abaixo
//die ($sql);

    if (mysqli_query ($conexao,$sql))
	{
		if(mysqli_affected_rows ($conexao)>0)
		{

        $destino = '../../img/banner/';
				
        $upload = $destino . basename($_FILES['imagem']['name']);
       

		if(move_uploaded_file($_FILES['imagem']['tmp_name'], $upload))//Copy ($_FILES['imagem']['tmp_name'],$destino);
		echo"<script> alert('Arquivo validado e incluidos com sucesso $imagem')</script>";
		}
		else
		{
		echo "<script>alert('Problema na inclusão do arquivo')</script>";	
	    }
	}
    else
	{
	    echo mysqli_error ($conexao);
		echo "<srcipt>alert('Problema na inclusão')</script>";
	}
	
//redirecionamento em javascript
   	echo "<script>self.location = 'inserirPacote.php'</script>";

   ?>
