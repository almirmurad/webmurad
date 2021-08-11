<?php



$conexao = mysqli_connect("127.0.0.1", "root", "", "gerenciador");
//$conexao = mysqli_connect("robb0516.publiccloud.com.br:3306", "reluz_andre", "m$07ocM0", 'reluzente_gerenciador');

if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($conexao) . PHP_EOL;

//mysqli_close($conexao);





      /*  $conexao = mysql_connect('localhost','root','root');
		//$conexao = mysql_connect('dbmy0063.whservidor.com','pousadapra15','0407tabajara');
     if ($conexao)
     {                         //no servidor aqui colocar keizo_litoral
        if( ! mysql_select_db('gerenciador',$conexao) )
        {
           echo mysql_error($conexao);
           include('fecha.php');
           die();
        }

     }
     else
     {
        echo 'Problema na conex&atilde;o';
        include('fecha.php');
        die();
     }


mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
*/

?>

