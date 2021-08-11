<?php
include('abre.php');
include('menu.php');

$titulo='Incluir Notícias';

?>

<link rel="stylesheet" type="text/css" href="../estilos/forms.css" />
<br />
<br />

<form action="incluir_dados_noticias.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Incluir Notícias:</legend>
<label>
<span>TITULO:</span><input type="text" name="titulo" maxlength="250" size="40" class="campos" />
</label>

<label>
<span>DATA:</span><input type="text" name="data" maxlength="50" size="40" class="campos" />
</label>

<label>
<span>RESUMO:</span><textarea name="resumo" cols="2" rows="15" class="campos" ></textarea>
</label>


<label>
<span>NOTÍCIA:</span><textarea name="noticia" cols="4" rows="30" class="campos"></textarea>
</label>

<label>
<span>FOTO:</span><input type="file" name="foto" size="40" class="campos"/>
</label>

<label>
<span>ESTA NOTÍCIA É UM DESTAQUE?:
</span><span>SIM</span>
<input type="checkbox" value="sim" name="sim" /> - <span>NÃO</span>
                                                    <input type="checkbox" value="nao" name="nao" />
</label>

<label>
<input type="submit" value="INCLUIR" class="btn">
<input type="reset" value="LIMPAR" class="btn">
</label>
</fieldset>
</form>

<?php
include('fecha_conexao.php');
?>
