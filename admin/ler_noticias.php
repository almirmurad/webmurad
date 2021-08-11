<link href="../estilos/style.css" rel="stylesheet" type="text/css" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div id="wrap">


<?php
include('conexao.php');	
include('top.php');
include('tratatexto.php');	

$codigo= $_GET['codigo'];

$sql="SELECT TITULO, DATA, NOTICIA, FOTO FROM noticias WHERE CODIGO='$codigo'";

   $resultado = mysql_query($sql,$conexao);
   $linhas    = mysql_num_rows($resultado);
   
   if($linhas == 0)
   {
	   echo'<h3>Tabela não contém dados de noticias.</h3>';
	   include('file:///C|/xampp/htdocs/clientes/fecha.php');
	   exit;
   }


    
	for ($x=0; $x<$linhas; $x++)
	  {
		$titulo    = mysql_result($resultado, $x, 'titulo');  
		$data      = mysql_result($resultado, $x, 'data');  
		$noticia   = mysql_result($resultado, $x, 'noticia');  
		$foto      = mysql_result($resultado, $x, 'foto'); 
		$foto      ="<img class=\"foto_not\" src='imgs/$foto' alt='imagem noticia' />";
		$data      = date('d/m/Y',strtotime($data));
        ord ("$noticia");

echo"

<h1> $titulo</h1>
   <h2>Notícia postado dia:$data </h2>
   
 <p>
 $foto
 <br />
$noticia</p>
<br />
<hr />
 <a href=\"../index.php\"><< VOLTAR</A>
  ";
   
   
	  }

	
	
?>




</div>
