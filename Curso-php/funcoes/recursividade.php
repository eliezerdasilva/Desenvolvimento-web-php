<div class="titulo">Recursividade</div>

<?php
function somaUmAte($numero){
    $soma = 0;
    for($i = 0; $i <= $numero; $numero--){
        $soma += $numero;

    }
    return $soma;
}
echo somaUmAte(10).'<br>';

function somaRecursivaUmAte($numero){
    //COndicao de parada
    if($numero === 1){
        return 1;
    } 
    return $numero + somaRecursivaUmAte($numero -1);
}

echo somaRecursivaUmAte(150).'<br>';
function somaRecursivaEconomica($numero){
    return $numero === 1 ? 1 :
    $numero + somaRecursivaEconomica($numero -1);
}
echo somaRecursivaEconomica(2).'<br>';