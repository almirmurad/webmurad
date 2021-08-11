<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$site = $_POST['site'];
$site2= $_POST['site2'];
$descricao= $_POST['descricao'];
$to="contato@webmurad.com.br";

 $titulo="Orçamento através do site Web Murad";

$mensagem = "
     
	    <h1>$titulo</h1>
	   <p class=\"p\">
	    Este email foi enviado através do site webmurad.com.br.
	   </p>
	   <p class=\"p\">
	    Nome:$nome.<br />
        E-mail:$email<br />
        Telefone:$telefone<br />
        Celular:$celular<br />
		Site:$site<br />
		Site sugerido:$site2<br />
        Descricao:$descricao<br />

	   </p>
	 
    ";
$headers  = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: $nome <$email>\r\n"; 
$headers .= "To:'$to\r\n'";


$envia = mail("$to", "$titulo", "$mensagem", "$headers");

  if($envia)
       {
        echo" <script>alert('Obrigado, Sr(a). $nome, sua mensagem foi enviada com sucesso.')</script>";
		echo" <script>self.location='orcamento.php'</script>";
       }
   else
       {
		echo"<script>alert('Desculpe, Sr(a). $nome, seu orçamento não pode ser enviado.') ";
		echo" <script>self.location='orcamento.php'</script>";
	   }		
   
?>