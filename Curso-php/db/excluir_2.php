<div class="titulo">Excluir Registros #02</div>

<?php

require_once "conexao.php";

$conexao = novaConexao();
$registro = [];
$sql = "SELECT * FROM cadastro";
$resultado = $conexao->query($sql);
if($resultado->num_rows>0){
    while($row = $resultado->fetch_assoc()){
        $registros[] = $row;
    } 
}elseif ($conexao->error){
        echo "Erro: ". $conexao->error;
    }

$conexao->close;

?>

<table class="table table-houver table-striped table-bordered">
    <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?=$registro['nome'] ?></td>
                <td><?=$registro['email'] ?></td>
                <td><?=$registro['nascimentp'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > *{
        font-size: 1.2rem;
    }
</style>