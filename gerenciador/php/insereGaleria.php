<?php
include 'conecta.php';

$nome 		= $_POST['nome'];
$descricao 	= $_POST['descricao'];
$capa 		= $_FILES['foto1']['name'];
$foto2 		= $_FILES['foto2']['name'];
$foto3 		= $_FILES['foto3']['name'];
$foto4 		= $_FILES['foto4']['name'];
$foto5 		= $_FILES['foto5']['name'];
$foto6 		= $_FILES['foto6']['name'];
$foto7 		= $_FILES['foto7']['name'];
$foto8 		= $_FILES['foto8']['name'];
$foto9 		= $_FILES['foto9']['name'];
$foto10		= $_FILES['foto10']['name'];
$foto11		= $_FILES['foto11']['name'];
$foto12		= $_FILES['foto12']['name'];

$ativo 	= 'sim';// $_POST['destaque'];


//$data = date('Y-m-d');
//if($destaque == 'sim')
//	{
//		$destaque = 'sim';
//	}else
//	{
//		$destaque = 'nao';
//	}

$insert = mysqli_query($conexao, "INSERT INTO galeria VALUES (null, '$nome', '$descricao', '$capa', '$ativo',now())");

if($insert) {
   $path = mkdir('../../imgs/lightbox/galeria/'.mysqli_insert_id($conexao), 0775, true);

    $c = 1;
    while ($c <= 12) {
        if (empty($_FILES['foto' . $c]['name'])) {
            echo '<script>alert("sem imagem ' . $c . '!");</script>';
        } else {

            $ext = pathinfo($_FILES['foto' . $c]['name'], PATHINFO_EXTENSION);
            $destino = '../../imgs/lightbox/galeria/'.mysqli_insert_id($conexao).'/'.$_FILES['foto'.$c]['name'];
            $mover = rename($_FILES['foto'.$c]['tmp_name'], $destino);
            chmod($destino, 0744);
           if ($mover) {
               // echo '<script>alert("movido ' . $c . ','.$_FILES['foto'.$c]['name'].'-- '.$destino.'!");</script>';

               //novo redimensiona

               /* Inclui a classe */
               require_once '../class/TutsupRedimensionaImagem.php';

               /* Cria a instancia da classe */
               $imagem = new TutsupRedimensionaImagem();

               /* Configura a imagem que vamos redimensionar */
               $imagem->imagem = '../../imgs/lightbox/galeria/'.mysqli_insert_id($conexao).'/'.$_FILES['foto'.$c]['name'];
               //echo '<script>alert("'.$imagem->imagem.'");</script>';
               /*
               Configura a imagem de destino. Se você for apenas exibir uma imagem
               temporária, comente esta linha
               */
               $imagem->imagem_destino = '../../imgs/lightbox/galeria/'.mysqli_insert_id($conexao).'/'.$_FILES['foto'.$c]['name'];
               //echo '<script>alert("'.$imagem->imagem_destino.'");</script>';

               /*
               Se uma largura for definida, você pode deixar a classe calcular o aspect
               ratio da imagem deixando a altura zerada. O mesmo vale para a largura, porém,
               uma altura deverá existir (uma das duas deve ser definida).

               Você também pode configurar as duas, neste caso você força a imagem a ter o
               tamanho desejado
               */
               $imagem->largura = 600;

               /* A nova altura será gerada automaticamente. */
               $imagem->altura = 0;

               /* Qualidade de 0 a 100 */
               $imagem->qualidade = 100;

               /* Gera a nova imagem */
               $nova_imagem = $imagem->executa();

               /* Se não for uma imagem temporária, você poderá exibi-la assim
               if ( $imagem->imagem_destino && $nova_imagem ) {
                   echo "<img src='{$nova_imagem}'>";
               }*/

               /* Se você quiser ver se algum erro ocorreu, utilize o seguinte. */
               if ( $imagem->erro ) echo $imagem->erro;

               //antigo

            } else {
               echo '<script>alert("Erro ao enviar Imagem ' . $c . '!");</script>';
           }
        }
        $c++;
    }
    echo '<script>//window.location="listarGaleria.php";
            alert("Galeria cadastrada com sucesso!");</script>';

} //SE INSERIU
else {
    echo '<script>alert("' . mysqli_error($conexao) . '");</script>';
}

//redirecionamento em javascript
echo "<script>self.location = 'inserirGaleria.php'</script>";