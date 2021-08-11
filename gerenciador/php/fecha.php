<?php
    if(isset($conexao) and $conexao)
    {
        mysqli_close($conexao);
    }
?>
