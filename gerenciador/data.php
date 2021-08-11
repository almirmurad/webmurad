<?
echo $dia_hora = date("d/m/Y H:i:s "); 
echo" -- ";
//FUNÇÃO DATE(i em maiúsculo) 
$data = date("I");

//VERIFICA O RESULTADO
echo $data ? "Horário de Verão" : "Horário Normal";
?>