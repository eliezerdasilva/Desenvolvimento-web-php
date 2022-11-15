<div class="titulo">Funcoes anonimas</div>

<?php

$soma = function ($a , $b){
    return $a + $b;
};

echo $soma(1,2).'<br>';

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a,$b);
    echo "$a $op $b = $resultado<br>";
};
executar(2,3,'+',$soma);

//vezes 

$multiplicacaoo = function($a,$b){
    return $a * $b;
};
executar(2,3,'*',$multiplicacaoo);

//nao foi????????
function divisao($a,$b){
    return $a / $b;

}
executar(9,3,'/',divisao);