<div class="titulo">Escrever Arquivo</div>

<?php

print_r($_FILES);

if($_FILES && $_FILES['arquivo']){
    $pastaUpload = '/Users/Eliezer/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload.$nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp, $arquivo)){
        echo "Arquivo válido e enviado com sucesso";
    }else{
        echo "Erro no upload de arquivo!";
    }
}
?>
<form action="#"method= "post";
    enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</butto>
</form>

<style>
    input, button{
        font-size: 1.2rem;
    }

</style>