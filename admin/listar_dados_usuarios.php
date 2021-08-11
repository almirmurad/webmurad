<?php
include('abre.php');
include('menu.php');

	$sql = "SELECT CODIGO, NOME, NIVEL FROM USUARIOS";
	
include('tabela_dados_usuarios.php');	
include('fecha_conexao.php');
?>
