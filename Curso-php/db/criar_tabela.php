<div class="titulo">Criar Tabela</div>
<?php
require_once "conexao.php";
//ddl = DATA Definition lang
$sql = "CREATE TABLE IF NOT EXISTS cadastro(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
nascimento DATE,
email VARCHAR(100) NOT NULL,
site VARCHAR(100),
filhos INT(100),
salari FLOAT
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso:)";
}else{
    echo "Error ".$conexao->error;
}
$conexao->close();


