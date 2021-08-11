<?php
include('abre.php');
include('menu.php');

$titulo='Incluir Clientes';
?>

<form action="incluir_dados_clientes.php" method="post">

<p>
<span>NOME:</span><input type="text" name="nome" maxlength="50" size="40" />
</p>

<p>
<span>CIDADE:</span><input type="text" name="cidade" maxlength="50" size="40" />
</p>

<p>
<span>RUA:</span><input type="text" name="rua" maxlength="60" size="40" />
</p>

<p>
<span>BAIRRO:</span><input type="text" name="bairro" maxlength="60" size="40" />
</p>

<p>
<span>TELEFONE:</span><input type="text" name="telefone" maxlength="10" size="10" />
</p>

<p>
<span>CELULAR:</span><input type="text" name="celular" maxlength="10" size="10" />
</p>

<p>
<span>E-MAIL:</span><input type="text" name="email" maxlength="100" size="60" />
</p>

<p>
<span>SITE:</span><input type="text" name="site" maxlength="100" size="60" />
</p>

<p>
<span>DESCRIÇÃO:</span><textarea name="descricao" ></textarea>
</p>

<p>
<input type="submit" value="INCLUIR">
<input type="reset" value="LIMPAR">
</p>

</form>

<?php
include('fecha_conexao.php');
?>
