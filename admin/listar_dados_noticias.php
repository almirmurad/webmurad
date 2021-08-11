<?php
include('abre.php');
include('menu.php');

	$sql = "SELECT CODIGO, TITULO, DATA, RESUMO, NOTICIA, FOTO FROM NOTICIAS";
	
include('tabela_dados_noticias.php');	
include('fecha_conexao.php');
?>
