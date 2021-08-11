
<?php

//FUNÇÃO PARA TRATAR CARACTERES ESPECIAIS
function trataTxt($var) {

//COLOCA NUMA VARIÁVEL O CONTEÚDO SEM TRATAMENTO E SUBSTITUI PELO SEU VALOR UNICODE
//FAZ ESSE MESMO PROCESSO PARA CADA CARACTERE COLOCADO NA LISTA DA FUNÇÃO, TANTO CARACTERES MINÚSCULOS COM MAIÚSCULOS

//letra a
$var = ereg_replace("á","&aacute;",$var);
$var = ereg_replace("à","&agrave;",$var);
$var = ereg_replace("â","&acirc;",$var);
$var = ereg_replace("ã","&atilde;",$var);
$var = ereg_replace("ª","&ordf;",$var);
//letra A
$var = ereg_replace("Á","&Aacute;",$var);
$var = ereg_replace("À","&Agrave;",$var);
$var = ereg_replace("Â","&Acirc;",$var);
$var = ereg_replace("Ã","&Atilde;",$var);
//letra e
$var = ereg_replace("é","&eacute;",$var);
$var = ereg_replace("è","&egrave;",$var);
$var = ereg_replace("ê","&ecirc;",$var);
//letra E
$var = ereg_replace("É","&Eacute;",$var);
$var = ereg_replace("È","&Egrave;",$var);
$var = ereg_replace("Ê","&Ecirc;",$var);
//letra i
$var = ereg_replace("í","&iacute;",$var);
$var = ereg_replace("ì","&igrave;",$var);
$var = ereg_replace("î","&icirc;",$var);
//letra I
$var = ereg_replace("Í","&Iacute;",$var);
$var = ereg_replace("Ì","&Igrave;",$var);
$var = ereg_replace("Î","&Icirc;",$var);
//letra o
$var = ereg_replace("ó","&oacute;",$var);
$var = ereg_replace("ò","&oacute;",$var);
$var = ereg_replace("ô","&oacute;",$var);
$var = ereg_replace("õ","&otilde;",$var);
$var = ereg_replace("º","&ordm;",$var);
//letra O
$var = ereg_replace("Ó","&Oacute;",$var);
$var = ereg_replace("Ò","&Oacute;",$var);
$var = ereg_replace("Ô","&Oacute;",$var);
$var = ereg_replace("Õ","&Otilde;",$var);
//letra u
$var = ereg_replace("ú","&uacute;",$var);
$var = ereg_replace("ù","&ugrave;",$var);
$var = ereg_replace("û","&ucirc;",$var);
//letra U
$var = ereg_replace("Ú","&Uacute;",$var);
$var = ereg_replace("Ù","&Ugrave;",$var);
$var = ereg_replace("Û","&Ucirc;",$var);
//letra ç
$var = str_replace("ç","&ccedil;",$var);
//letra Ç
$var = str_replace("Ç","&Ccedil;",$var);

//RETORNA A VARIÁVEL JÁ CORRIGIDA
return $var;
}
?>

