<?php
/*	$gmtDate= gmdate("D, d M Y H:i:s");
	header("Expires: {$gmtDate}GMT");
	header("Last-Modified: {$gmtDate}GMT");
	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: no-cache");
	header("Content-type:text/html; charset=iso-8859-1");
*/
	include("../php/conecta.php");	
	
	if(isset($_GET["inicio"]) || isset($_GET["categoria"]))
		include("inicio.php");
		
		

		
		
		
		else echo "ERRO: Favor acessar a Home da loja!";		
?>