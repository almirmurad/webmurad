<?php
                    include('conexao.php');
					
					$sql="SELECT CODIGO, DESTAQUE, RESUMO FROM NOTICIAS";
					
					$resultado = mysql_query($sql,$conexao);
					$linhas    = mysql_num_rows($resultado);
					
					if($linhas == 0)
					{
					   echo'<h3>Tabela não contém dados de noticias.</h3>';
	                   include('file:///C|/xampp/htdocs/clientes/fecha.php');
	                   exit;	
					}
					
					for ($x=0; $x<$linhas; $x++)
					{
						$codigo    = mysql_result($resultado, $x, 'codigo');  
					    $destaque  = mysql_result($resultado, $x, 'destaque');  
		                $resumo    = mysql_result($resultado, $x, 'resumo');  
				
					 switch($destaque)
						 {
						   case (isset($destaque)and $destaque == 'sim'):			
						   echo"
				          <li>
                            <a href='admin/ler_destaques.php?destaque=$destaque&codigo=$codigo'>$resumo</a>
			              </li>";
                 		  Break;
							
                       /*  case (isset($destaque)and $destaque == 'nao'):
						  echo"
				          <li>
                            <a href='ler_destaques.php?destaque=$destaque'>$resumo</a>
			              </li>";
                          Break;
						  
				     	*/
					   }

					}
				     
						
						 ?>