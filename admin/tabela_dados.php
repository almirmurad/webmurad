<?php
	
include('conexao.php');	
   
   $resultado = mysql_query($sql,$conexao);
   $linhas    = mysql_num_rows($resultado);
   
   if($linhas == 0)
   {
	   echo'<h3>Tabela não contém dados de clientes.</h3>';
	   include('../clientes/fecha.php');
	   exit;
   }

?>
<div id="tabela" class="centro">

   <table>
     <tr id="cabecalho">
       <th>CÓDIGO</th><th>NOME</th><th>CIDADE</th><th>RUA</th><th>BAIRRO</th><th>TELEFONE</th>
         <th>CELULAR</th><th>E-MAIL</th><th>SITE</th><th>DATA</th><th>DESCRIÇÃO</th><th>EXCLUIR</th>
     </tr>

<?php
    
	for ($x=0; $x<$linhas; $x++)
	  {
		$codigo    = mysql_result($resultado, $x, 'codigo');  
		$nome      = mysql_result($resultado, $x, 'nome');  
		$cidade    = mysql_result($resultado, $x, 'cidade');  
		$rua       = mysql_result($resultado, $x, 'rua');  
		$bairro    = mysql_result($resultado, $x, 'bairro'); 
		$telefone = mysql_result($resultado, $x, 'telefone'); 
		$celular   = mysql_result($resultado, $x, 'celular'); 
		$email     = mysql_result($resultado, $x, 'email');
		$site      = mysql_result($resultado, $x, 'site');
		$data      = mysql_result($resultado, $x, 'data');
		$cliente   = $nome;
		$descricao = mysql_result($resultado, $x, 'descricao'); 
		$nome      = "<a href='alterar.php?codigo=$codigo'>$nome</a>";
		$excluir   = "<a href='excluir.php?codigo=$codigo' onclick=\"return confirm('Deseja realmente excluir o cliente:$cliente?');\"><img src='imgs/excluir.gif' alt='clique para excluir o cliente' /></a> ";
		
		echo
		"<tr class=\"tr1\">
		   <td>$codigo</td><td>$nome</td><td>$cidade</td><td>$rua</td><td>$bairro</td><td>$telefone</td><td>$celular</td><td>$email</td>
		   <td>$site</td><td>$data</td><td>$descricao</td><td>$excluir</td>
		 </tr>
		";
		

	  }
	
?>
</table>
</div>
