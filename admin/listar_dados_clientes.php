<?php
include('abre.php');
include('menu.php');

	$sql = "SELECT CODIGO, NOME, CIDADE, RUA, BAIRRO, TELEFONE, CELULAR, EMAIL, SITE, DATA, DESCRICAO FROM CLIENTES";
	
include('tabela_dados.php');	
include('fecha_conexao.php');
?>
