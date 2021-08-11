<?php

include('conecta.php');

$codigo		= $_POST['codigo'];
$nome 		= $_POST['nome'];
$descricao 	= $_POST['descricao'];
$preco 		= $_POST['preco'];
$capa 		= $_FILES['foto1']['name'];
$foto2 		= $_FILES['foto2']['name'];
$foto3 		= $_FILES['foto3']['name'];
$foto4 		= $_FILES['foto4']['name'];
//$quantidade	= $_POST['quantidade'];
$destaque 	="sim";//$_POST['destaque'];
/*if($destaque == "sim")
	{
		$destaque = "sim";
	}else
	{
		$destaque = "nao";
	}

$data 		= $_POST['data'];
*/
	   
	$sql = "UPDATE produtos SET codProduto        	='$codigo',
								nomeProduto			='$nome',
							   	descricaoProduto    ='$descricao',
							   	precoProduto        ='$preco',
							   	fotoProduto1        ='$capa', 
							   	fotoProduto2        ='$foto2',
							   	fotoProduto3		='$foto3',
							   	fotoProduto4        ='$foto4', 
							    destaqueProduto  	='$destaque',
							   	entradaProduto   	=now()
							   		        					
								WHERE codProduto='$codigo'"; 

//se der pau libera a linha abaixo
//die ($sql);

    if (mysqli_query ($conexao,$sql))
	{
		if(mysqli_affected_rows ($conexao)>0)
		{
		Copy ($_FILES['foto1']['tmp_name'],"../img/produtos/$codigo/$capa");
		Copy ($_FILES['foto2']['tmp_name'],"../img/produtos/$codigo/$foto2");
		Copy ($_FILES['foto3']['tmp_name'],"../img/produtos/$codigo/$foto3");
		Copy ($_FILES['foto4']['tmp_name'],"../img/produtos/$codigo/$foto4");
		echo"<script> alert('Registros incluidos com sucesso $foto1')</script>";
		echo"<script> alert('Registros incluidos com sucesso $foto2')</script>";
		echo"<script> alert('Registros incluidos com sucesso $foto3')</script>";
		echo"<script> alert('Registros incluidos com sucesso $foto4')</script>";
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
   echo "<script>self.location = 'listarProdutos.php'</script>";