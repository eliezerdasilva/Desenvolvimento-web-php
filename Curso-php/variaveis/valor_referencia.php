<div class= "titulo">Valor Referência </div>

<?php

$variavel = 'valor inicial';
echo $variavel;
echo '<br>';
//Atribuição por valor
$variavelValor = $variavel;
echo"<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo "<br>$variavelValor";

// Atribuicao por referência
//ficam igual, a segunda recebe as atribuicoes de primeira
$vareavelReferencia = &$variavel;
$vareavelReferencia = 'mesma referencia';

echo "<br>$variavel $vareavelReferencia";