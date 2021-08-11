<?php
 $conexao = mysql_connect ('robb0516.publiccloud.com.br:3306','murad_murad','1379@moju09!');
if ($conexao)
 {
	if(! mysql_select_db ('murad_radwebmurad', $conexao))
	 {//se não conseguir selecionar o banco de dados mostra o erro.
	   die('problema na seleção do banco de dados.<br />'.mysql_error($conexao));	
	 }	
 }
else
 {
    die('problema na conexão.<br />.'.mysql_error($conexao));
 } 

//echo'conexao estabelecida'; 
/*
 $conexao = mysql_connect ('localhost','root','');
if ($conexao)
 {
	if(! mysql_select_db ('webmurad', $conexao))
	 {//se não conseguir selecionar o banco de dados mostra o erro.
	   die('problema na seleção do banco de dados.<br />'.mysql_error($conexao));	
	 }	
 }
else
 {
    die('problema na conexão.<br />.'.mysql_error($conexao));
 } 

//echo'conexao estabelecida'; 
?>