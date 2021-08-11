<?php
include('abre.php');
include('menu.php');
include('conexao.php');

	   $nome = $_POST['nome'];
	   $cidade = $_POST['cidade'];
	   $rua = $_POST['rua'];
	   $bairro = $_POST['bairro'];
	   $telefone = $_POST['telefone'];
	   $celular = $_POST['celular'];
	   $email = $_POST['email'];
	   $site = $_POST['site'];
	   $data = $_POST['data'];
   	   $descricao = $_POST['descricao'];

	   
	$sql = "INSERT INTO clientes (NOME, CIDADE, RUA, BAIRRO, TELEFONE, CELULAR, EMAIL, SITE, DATA, DESCRICAO)
	                    VALUES('$nome', '$cidade', '$rua', '$bairro', '$telefone', '$celular', '$email', '$site', now(), '$descricao')"; 

//se der pau libera a linha abaixo
//die ($sql);

    if (mysql_query ($sql,$conexao))
	{
		echo"<script> alert('Registros incluidos com sucesso')</script>";
	}
    else
	{
	    echo mysql_error ($conexao);
		echo "<srcipt>alert('Problema na inclusão')</script>";
	}
	
//redirecionamento em javascript
   	echo "<script>self.location = 'incluir.php'</script>";
include('fecha_conexao.php');
?>
