<?php
include('abre.php');
include('menu.php');

$titulo='Incluir Usuarios';

?>

<form action="incluir_dados_usuarios.php" method="post">

<p>
<span>NOME:</span><input type="text" name="nome" maxlength="50" size="50" />
</p>

<p>
<span>SENHA:</span><input type="password" name="senha" maxlength="20" size="20" />
</p>

<p>
<span>CONFIRME SUA SENHA:</span><input type="password" name="senha2" maxlength="20" size="20" />
</p>

<p>
<span>NÍVEL DE ACESSO:</span><input type="text" name="nivel" maxlength="1" size="4" />
</p>


<p>
<input type="submit" value="INCLUIR">
<input type="reset" value="LIMPAR">
</p>

</form>

<?php
include('fecha_conexao.php');
?>
