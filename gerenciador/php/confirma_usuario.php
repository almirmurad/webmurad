<?php session_start();

	$email  = $_POST['email'];
	$senha = $_POST['senha'];

    $senha = sha1($senha);
	
	
	include('conecta.php');

	$consulta_usuario=mysqli_query($conexao,"SELECT * FROM usuario WHERE email='$email' AND senha='$senha'");

	if(mysqli_num_rows($consulta_usuario) <= 0){

		echo'<script>alert("'.$senha.''.$email.'");</script>';
		echo'
		<script>
			alert("Usuário ou Senha inválidos.");
			history.go(-1);
		</script>
		';
		die;
	}
	else{
		$usuario=mysqli_fetch_row($consulta_usuario);
		$nome=explode(' ',$usuario[1]);
		
		$_SESSION['nivel']    = $usuario[7];
		$_SESSION['usuario']  = $usuario[1];
		$codigo_usuario = $usuario[0];
		$_SESSION['codigo_usuario']  = $codigo_usuario;
		
		echo'
		<script>
			alert("Bem Vindo a administração do site '. $nome[0] .' seu codigo de usuario é o: '. $codigo_usuario .'!");
			window.location="../index.php";
		</script>
		';
	}
	
	
?>