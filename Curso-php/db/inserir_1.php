<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";
$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salari)
VALUES (
    'jose',
    '2002-03-04',
    'jose_@yahoo.com',
    'https://jose.io',
    0,
    19980.12
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)";
} else {
    
    echo "Erro: " . $conexao->error;
}


$conexao->close();