<div class="titulo">Operador ternario</div>

<?php

$idade = 70;
$status;

if($idade>= 18){
    $status = 'Maior de idade';
}else{
    $status = "Menor de idade";
}
echo "$status<br>";

//if else simples
$status = $idade >= 18 ? 'Maior de idade': 'Menor de idade';
echo "$status<br>";
$tipoMaiorIdade = $idade >= 65? 'Aposentado': 'Maior de idade';
$status = $idade>= 18? $tipoMaiorIdade : 'Menor de idade';
echo "$status";