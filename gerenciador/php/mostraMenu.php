<?php 
include("conecta.php");

    $sql = "SELECT * FROM categorianoticia ORDER BY nomeCategoria";
	$resultado = mysqli_query($sql,$con);
	$linhas = mysqli_num_rows($resultado) or die(mysqli_error($conexao));
	
	if ($linhas == 0)
		  {
			  echo 'Menu vazio!';
		  }
	
	for($i=0; $i<$linhas; $i++)
		{
			$result     = mysqli_fetch_row($resultado);
			$idCategoria   = $result[0];
			$nomeCategoria = $result[1];
			
			echo "<a href=\"javascript:Ger('categoria','$idCategoria');\">$nomeCategoria</a><br />";
		}
			
?>