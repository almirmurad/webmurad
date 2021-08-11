<?php
error_reporting(E_WARNING);
include('conecta.php');

$cod= $_GET['codigo'];
		
$produto=mysqli_fetch_row(mysqli_query($conexao,'SELECT * FROM produtos WHERE codProduto='.$_GET['codigo']));

$apaga_pasta='../img/produtos/'.$produto[0].'/';

$c=4;
while($c<=7){
	if( empty($produto[$c])){}
	else{
		$apaga_arquivo=$produto[$c];
		unlink($apaga_pasta.$apaga_arquivo);
	}
	$c++;	
}

rmdir($apaga_pasta);

$apaga_produto=mysqli_query($conexao,'DELETE FROM produtos WHERE codProduto='.$cod);
if($apaga_produto){
	echo'
	<script>
		alert("Produto Apagado com sucesso.");
		window.location="listarProdutos.php";
	</script>
	';
	die;
}
else{
	echo'
	<script>
		alert("Erro ao apagar produto.");
		history.go(-1);
	</script>
	';
}
		
 ?>	
