<div class='titulo'>PDO: Consultar</div>

<?php

require_once "conexao_pdo.php";
$conexao = novaConexao();
$sql = "SELECT * from cadastro";
//tres formas de mostrar
//PDO::FETCH_NUM
//PDO::FETCH_ASSOC
//PDO::FETCH_CLASS
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado);

echo "<hr>";
$sql = "SELECT * from cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde',2,PDO:: PARAM_INT);
$stmt->bindValue(':inicio',3,PDO:: PARAM_INT);

//print_r(get_class_methods($stmt));

if($stmt->execute()){
    $resultado = $stmt->fetchAll();
    print_r($resultado);
}else{
    echo "Código: ". $stmt->errorCode()."<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";

$sql = "SELECT * FROM cadastro WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':id',6,PDO::PARAM_INT);
//$stmt->bindValue(':id',12);Para p exemplo 2
//if($stmt->execute([7])){
//if($stmt->execute(':id', 15)){ Exemplo 2
//if($stmt->execute()){
if($stmt->execute([':id'=> 7])){
    $resultado = $stmt->fetchAll();
    print_r($resultado);
}else{
    echo "Código: ". $stmt->errorCode()."<br>";
    print_r($stmt->errorInfo());

}

$conexao->close();