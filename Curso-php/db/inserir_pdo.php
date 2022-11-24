<div class='titulo'>Inserir pdo</div>

<?php

require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro 
(nome , email, nascimento, site, filhos, salari)
VALUES(
    'Guilherme Filho',
    'guilerme@gmail.com',
    '2004-7-21',
    'http://guilherme.com',
    0,
    3000
)";

$conexao = novaConexao();
//print_r(get_class_methods($conexao));

if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
}else{
    echo $conexao->errorCode();
    print_r($conexao->errorInfo());
}

$conexao->close();