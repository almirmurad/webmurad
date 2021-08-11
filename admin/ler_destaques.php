<link href="../estilos/style.css" rel="stylesheet" type="text/css" media="screen">


<div id="wrap">

<?php

include('top.php');
 
include('conexao.php');	

$destaque= $_GET['destaque'];
$codigo= $_GET['codigo'];

$sql="SELECT TITULO, DATA, NOTICIA, FOTO FROM noticias WHERE DESTAQUE='$destaque' AND CODIGO='$codigo'";

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
		$foto      ="<img class=\"foto_not\" src=\"imgs/$foto\" alt='imagem destaque' />";
		$data      = date('d/m/Y',strtotime($data));

	
	echo"

<h1>$titulo</h1><br />

   <h2>Destaque postado dia: $data </h2><br />

   $foto<br />

 <p>$noticia</p><br />

 <a href=\"../index.php\"><< VOLTAR</A>
  ";
   
   
	  }
?>
</div>