<?php

function novaConexao($banco = 'curso_php') {
    $servidor = '127.0.0.1:8050';
    $usuario = 'root';
    $senha = 'root';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_error);
    }

    return $conexao;
}
function teste($teste = 1234){
    return; 
}
?>