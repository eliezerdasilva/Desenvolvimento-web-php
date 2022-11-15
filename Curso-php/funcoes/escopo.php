<div class="titulo">Escopo</div>

<?php

function imprimirMensagens(){
    echo "Olá!";
    echo " Ate a proxima!<br>";
}
imprimirMensagens();

$variavel = 1;
function trocaValor(){
    $variavel =2;
    echo "Durante a função: $variavel<br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

function trocaValorDeVerdade(){
    global $variavel;
    $variavel=3;
    echo "Durante a funcao: $variavel <br>";
}
echo "antes $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());
