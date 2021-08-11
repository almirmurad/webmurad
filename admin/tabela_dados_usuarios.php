<?php
	
include('conexao.php');	
   
   $resultado = mysql_query($sql,$conexao);
   $linhas    = mysql_num_rows($resultado);
   
   if($linhas == 0)
   {
	   echo'<h3>Tabela não contém dados de noticias.</h3>';
	   include('../admin/fecha_conexao.php');
	   exit;
   }

?>


<div id="tabela" class="centro">

   <table>
     <tr id="cabecalho">
      <th>CODIGO</th><th>NOME</th><th>NIVEL DE ACESSO</th><th>EXCLUIR</th>
     </tr>

<?php
    
	for ($x=0; $x<$linhas; $x++)
	  {
		$codigo  = mysql_result($resultado, $x, 'codigo');  
		$nome    = mysql_result($resultado, $x, 'nome');  
		$nivel   = mysql_result($resultado, $x, 'nivel');  
		$nome    = "<a href='alterar.php?nome=$codigo'>$nome</a>";
		$excluir = "<a href='excluir.php?nome=$codigo' onclick=\"return confirm('Deseja realmente excluir o usuario:$nome?');\"><img src='imgs/excluir.gif' alt='clique para excluir o cliente' /></a> ";
		
		echo
		"<tr class=\"tr1\">
		  <td>$codigo</td><td>$nome</td><td>$nivel</td><td>$excluir</td>
		 </tr>
		";
		

	  }
	
?>
</table>
</div>