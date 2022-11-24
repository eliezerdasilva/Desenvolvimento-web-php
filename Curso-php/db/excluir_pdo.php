<div class="titulo">Excluir pdo</div>

<?php

require_once ('conexao_pdo.php');
//PARA EXCLUIT MAIOR QUE 
//$sql = 'DELETE FROM cadastro WHERE id >= ?';
//Para excluir especifico
//$sql = 'DELETE FROM cadastro WHERE id = ?';
//usa o id como referencia 
$sql = 'DELETE FROM cadastro WHERE id = :id';

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

if($stmt->execute([':id' => 10])){
    echo "Sucesso";

}else{
    echo "Erro :";
    print_r($stmt->errorInfo());
}
