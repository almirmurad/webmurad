<?php
if(isset($_GET["inicio"]))	//pagina inicial
	{
		echo "<p class=\"titulo\"> inicio</p>";
	}
	elseif(isset($_GET["categoria"]))
	{
		$cat = $_GET["categoria"];
		$sql = "SELECT * FROM noticia WHERE idCategoria=$cat";
	}
		
		$res = mysqli_query($con,$sql);
		if(mysqli_num_rows($res) == 0)
			{
				echo "<p>Nenhuma notícia encontrada!</p>";
			}	
			else{
					for($i=0; $i < mysqli_num_rows($res); $i++)
						{
							$dados = mysqli_fetch_row($res);
							$idNoticia = $dados[0];
							$titulo = $dados[1];
							$data = $dados[2];
							$fonte = $dados[3];
							$resumo = $dados[4];
							
							echo"<h1>$titulo</h1><br />
									<p>$data</p><br />
										<p>$fonte</p><br />
											<p>$resumo</p>";
							
							
						}
				}
?>