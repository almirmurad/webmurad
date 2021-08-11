<?php
include('admin/conexao.php');

          $sql = "SELECT TITULO, DESTAQUE, CODIGO FROM noticias WHERE DESTAQUE='sim'";
          $resultado = mysql_query($sql,$conexao);                       	   
          $linhas    = mysql_num_rows($resultado);
   
          if($linhas == 0)
              {
                   echo'<h3>Tabela não contém dados de noticias.</h3>';
                   include('admin/fecha_conexao.php');
              }
    
          for ($x=0; $x<$linhas; $x++)	       
               {
                    $titulo    = mysql_result($resultado, $x, 'titulo');
                    $codigo    = mysql_result($resultado, $x, 'codigo');
                    $destaque    = mysql_result($resultado, $x, 'destaque');								  
                    
                    echo"  <li><a href='admin/ler_destaques.php?destaque=$destaque&codigo=$codigo'>$titulo</a></li>";
	
                }

?>