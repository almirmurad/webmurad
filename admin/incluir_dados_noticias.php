<?php
include('abre.php');
include('menu.php');
include('conexao.php');

        if(isset($_POST['sim']))
		{
		  $destaque="sim";	
		}
		else
		{
		  $destaque="nao";
		  	
		}

	   $titulo  = $_POST['titulo'];
	   $noticia = $_POST['noticia'];
	   $foto    = $_FILES['foto']['name'];
	   $resumo  = $_POST['resumo'];
	   $data    = $_POST['data'];
	   utf8_encode("$noticia");
       utf8_encode("$titulo");	
	   utf8_encode("$resumo");
	   
	$sql = "INSERT INTO noticias (TITULO, DATA, RESUMO, NOTICIA, FOTO, DESTAQUE)
	                    VALUES('$titulo', now(), '$resumo', '$noticia', '$foto', '$destaque')"; 

//se der pau libera a linha abaixo
//die ($sql);

    if (mysql_query ($sql,$conexao))
	{
		if(mysql_affected_rows ($conexao)>0)
		{
		Copy ($_FILES['foto']['tmp_name'],"imgs/$foto");
		echo"<script> alert('Registros incluidos com sucesso')</script>";
		}
		else
		{
		echo "<script>alert('Problema na inclusão do arquivo')</script>";	
	    }
	}
    else
	{
	    echo mysql_error ($conexao);
		echo "<srcipt>alert('Problema na inclusão')</script>";
	}
	
//redirecionamento em javascript
   	echo "<script>self.location = 'incluir_noticias.php'</script>";
include('fecha_conexao.php');
?>
