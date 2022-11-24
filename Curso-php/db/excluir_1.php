<div class="titulo">Excluir Registros #01</div>

<?php 
require_once "conexao.php";

$sql = "DELETE FROM  cadastro WHERE id >= 10";

$conexao = novaConexao();
$resultado= $conexao->query($sql);

if($resultado){
    echo "Sucesso:";
}else{
    echo "Erro:". $conexao->error;
}

$conexao->close();
