<?php
error_reporting(E_WARNING);
include('conecta.php');
//require_once ('../functions/deleteDirectory.php');
$cod= $_GET['codigo'];
		
//$galeria=mysqli_fetch_row(mysqli_query($conexao,'SELECT * FROM pacotes WHERE id='.$_GET['codigo']));


//$diretorio='../../galeria/'.$galeria[0].'/';


//deleteDirectory($diretorio);





$apaga_pacote=mysqli_query($conexao,'DELETE FROM pacotes WHERE cod='.$cod);
if($apaga_pacote){
	echo'
	<script>
		alert("Pacote deletado com sucesso.");
		window.location="listarPacotes.php";
	</script>
	';
	die;
}
else{
	echo'
	<script>
		alert("Erro ao apagar Pacote.");
		history.go(-1);
	</script>
	';
}
		
 ?>	
