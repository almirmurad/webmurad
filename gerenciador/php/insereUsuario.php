<?php
include("conecta.php");

	 $nome          = $_POST['nome'];
	 $email			= $_POST['email'];
	 $telefone		= $_POST['telefone'];
	 $celular		= $_POST['celular'];
 	 $nivel 		= $_POST['nivel'];
	 $senha         = $_POST['senha'];
	 $confirm_senha = $_POST['confirm_senha'];
	 $ativo			= $_POST['ativo'];
	 
	
		//verifica os dados
		$erro="0";
		
		if(empty($nome) or strstr($nome, ' ')==false)
		{
			echo"<script> alert('FAVOR DIGITAR SEU NOME COMPLETO.');history.go(-1);</script>";
			$erro=1;
		}
		if(empty($nivel))
		{
			echo"<script> alert('FAVOR INFORMAR O NÍVEL DE ACESSO.');history.go(-1);</script>";
			$erro=1;
		}
		if($senha != $confirm_senha)
		{
			echo"<script> alert('A CONFIRMAÇÃO DE SENHA NÃO CONFERE.');history.go(-1);</script>";
			$erro=1;
		}
		if(strlen($senha)<5 AND strlen($senha)>8==false)
		{
			echo"<script> alert('SUA SENHA DEVE TER NO MÍNIMO 5 E NO MÀXIMO 8 CARACTERES.');history.go(-1);</script>";
			$erro=1;
		}
		
			if($erro==0)
			{	
		    $senha=sha1($senha);
			$sql= "INSERT INTO 	usuario ( nome, email, telefone, celular, nivel, senha, ativo, data ) VALUES ('$nome', '$email', '$telefone', '$celular', '$nivel', '$senha', '$ativo', now())";
			
		//die ($sql); //se der pau libera esta linha
                if(mysqli_query ($conexao, $sql))
                    {
                        echo"<script> alert('USUÁRIO CADASTRADO COM SUCESSO!');</script>";
                        echo"<script>self.location='inserirUsuario.php';</script>";

                    }
                    else
                    {
                        echo mysqli_error(); //aparece o erro
                        echo"<script> alert('PROBLEMA NA INCUSÃO DOS DADOS.');</script>";
                        echo"<script>self.location='inserirUsuario.php';</script>";
                    }

                }
		
		 include("fecha.php");			
    	       echo"<script>self.location='index.php';</script>";
?>