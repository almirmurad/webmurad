<?php
include 'conecta.php';

$nome 		= $_POST['nome'];
$descricao 	= $_POST['descricao'];
$preco 		= $_POST['preco'];
$foto1 		= $_FILES['foto1']['name'];
$foto2 		= $_FILES['foto2']['name'];
$foto3 		= $_FILES['foto3']['name'];
$foto4 		= $_FILES['foto4']['name'];
$quantidade	= 10;//$_POST['quantidade'];
$destaque 	= 'sim';// $_POST['destaque'];
$data = date('Y-m-d');
//if($destaque == 'sim')
//	{
//		$destaque = 'sim';
//	}else
//	{
//		$destaque = 'nao';
//	}

//$insert=mysqli_query($conexao, 'INSERT INTO produtos VALUES(null, "'.$nome.'", "'.$descricao.'", "'.$preco.'", "'.$foto1.'", "'.$foto2.'", "'.$foto3.'", "'.$foto4.'", "'.date('Y-m-d').'")');
$insert=mysqli_query($conexao, "INSERT INTO produtos VALUES (null, '$nome', '$descricao', '$preco', '$foto1', '$foto2', '$foto3', '$foto4', '$quantidade', '$destaque', now())");
	if($insert){	
		mkdir('../img/produtos/'.mysqli_insert_id($conexao),0777, true);
		
		$c=1;
		while($c<=4){
			
			if( empty($_FILES['foto'.$c]['name'])){
                echo '<script>alert("sem imagem '.$c.'!");</script>';
            }
			else{
				$destino = '../img/produtos/'.mysqli_insert_id($conexao).'/'.$_FILES['foto'.$c]['name'];
				$mover=move_uploaded_file($_FILES['foto'.$c]['tmp_name'],$destino);
				if($mover){
                    echo '<script>alert("movido '.$c.'!");</script>';
                }
				
				else{
					echo '<script>alert("Erro ao enviar Imagem '.$c.'!");</script>';
				}	
			}
			$c++;
		}
		
		echo '
		<script>
			window.location="listarProdutos.php";
			alert("Produto cadastrado com sucesso!");
		</script>';
	}//SE INSERIU
	else{
		echo'
		<script>alert("'.mysqli_error($conexao).'");</script>
		';	
	}
	
	
	
//redirecionamento em javascript
   echo "<script>self.location = 'inserirProduto.php'</script>";
?>