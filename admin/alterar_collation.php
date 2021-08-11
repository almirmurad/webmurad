

<?php
include("conexao.php");


$sql="ALTER TABLE `noticias` CHANGE `NOTICIA` `NOTICIA` LONGTEXT CHARACTER SET latin1 COLLATE latin1_general_ci; 


if(mysql_query($sql,$conexao ))
{
echo'ok';
	}
	else{
		echo'puts';

		}

?>