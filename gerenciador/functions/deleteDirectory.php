<?php
function deleteDirectory($diretorio) {
    /* valido se realmente é um diretorio */
    if (is_dir($diretorio)) {

        /* Busco todos os arquivos que estão dentro da pasta */
        $files = scandir($diretorio);

        /* Deleto um a um */
        foreach ($files as $file) {
            if ($file!= "." && $file!="..") {
                if (filetype($diretorio. DIRECTORY_SEPARATOR . $file) == "dir") {
                    /* Se dentro da pasta conter outra pasta, deleto ela também recursivamente */
                    deleteDirectory($diretorio. DIRECTORY_SEPARATOR . $file);
                } else {
                    unlink($diretorio. DIRECTORY_SEPARATOR . $file);
                }
            }
        }

        reset($files);
        rmdir($diretorio);

        //echo'<script>alert("Pasta de imagens da galeria deletada com sucesso.");</script>';
    }
}
