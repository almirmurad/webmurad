
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
include('conecta.php');

$cod= $_GET['codigo'];
		
	$sql="DELETE FROM usuario WHERE cod='$cod' ";
	
	//die($sql);
	
	 if(mysqli_query($conexao, $sql))
	 	{
			echo"<script>alert('Usuário excluído!')</script>";
		}
		else
		{
			echo "<script>alert('Problema ao excluir!')</script>";
		}
				
		
		include('fecha.php');
		echo"<script>self.location='listarUsuarios.php'</script>";
		
	 ?>	
</body>
</html>