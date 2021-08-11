<?php
error_reporting(E_WARNING);
include('conecta.php');
require_once ('../functions/deleteDirectory.php');
$cod= $_GET['codigo'];
		
$galeria=mysqli_fetch_row(mysqli_query($conexao,'SELECT * FROM galeria WHERE id='.$_GET['codigo']));


$diretorio='../../galeria/'.$galeria[0].'/';


deleteDirectory($diretorio);





$apaga_galeria=mysqli_query($conexao,'DELETE FROM galeria WHERE id='.$cod);
if($apaga_galeria){
	echo'
	<script>
		//alert("Galeria deletada com sucesso.");
		window.location="listarGalerias.php";
	</script>
	';
	die;
}
else{
	echo'
	<script>
		alert("Erro ao apagar Galeria.");
		history.go(-1);
	</script>
	';
}
		
 ?>	
