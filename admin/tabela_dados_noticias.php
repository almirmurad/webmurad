<?php
	
include('conexao.php');	

$sql="select*from noticias";
   
   $resultado = mysql_query($sql,$conexao);
   $linhas    = mysql_num_rows($resultado);
   
   if($linhas == 0)
   {
	   echo'<h3>Tabela não contém dados de noticias.</h3>';
	   include('fecha_conexao.php');
	   exit;
   }

?>
<div id="tabela" class="centro">

   <table>
     <tr id="cabecalho">
       <th>CÓDIGO</th><th>TITULO</th><th>DATA</th><th>RESUMO</th><th>NOTÍCIA</th><th>FOTO</th><th>EXCLUIR</th>
     </tr>

<?php
    
	for ($x=0; $x<$linhas; $x++)
	  {
		$codigo    = mysql_result($resultado, $x, 'codigo');  
		$titulo    = mysql_result($resultado, $x, 'titulo');  
		$data      = mysql_result($resultado, $x, 'data');  
		$resumo    = mysql_result($resultado, $x, 'resumo');  
		$noticia   = mysql_result($resultado, $x, 'noticia');  
		$foto      = mysql_result($resultado, $x, 'foto'); 
		$foto      ="<img src='imgs/$foto' alt='imagem noticia' />";
		$titulo      = "<a href='alterar.php?codigo=$codigo'>$titulo</a>";
		$excluir   = "<a href='excluir.php?codigo=$codigo' onclick=\"return confirm('Deseja realmente excluir a notícia:$titulo?');\"><img src='imgs/excluir.gif' alt='clique para excluir o cliente' /></a> ";
		
		echo
		"<tr class=\"tr1\">
		   <td>$codigo</td><td>$titulo</td><td>$data</td><td>$resumo</td><td>$noticia</td><td>$foto</td><td>$excluir</td>
		 </tr>
		";
		

	  }
	
?>
</table>
</div>