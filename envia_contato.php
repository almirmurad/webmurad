<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$msg = $_POST['msg'];
$to="contato@webmurad.com.br";

 $titulo="E-mail de Contato Web Murad";

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
        Mensagem:$msg<br />

	   </p>
    ";
$headers  = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: $nome <$email>\r\n"; 
$headers .= "To:'$to\r\n'";


$envia = mail("$to", "$titulo", "$mensagem", "$headers");

if(empty($mensagem))
{
   echo" <script>alert('Variavel mensagem vazia.')</script>";	
}
else
{
	echo"$mensagem";
}

  if($envia)
       {
        echo" <script>alert('Obrigado, Sr(a). $nome, sua mensagem foi enviada com sucesso para.')</script>";
		echo" <script>self.location='contato.php'</script>";
       }
   else
       {
		echo"<script>alert('Desculpe, Sr(a). $nome, seu orçamento não pode ser enviado.') ";
		echo" <script>self.location='orcamento.php'</script>";
	   }		
   
?>