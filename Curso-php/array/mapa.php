<div class="titulo">Mapa</div>

<?php

$dados = array(
    "idade" => 25,
    "cor" => " verde",
    "peso" => 49.8 
);
print_r($dados);

var_dump($dados[0]);
echo '<br>'.$dados["idade"];
echo '<br>'.$dados["cor"];
echo '<br>'.$dados["peso"];
echo '<br>';
var_dump($dados["outra_informacao"]);

$list = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    6=> "f",
    "9",
    8 => "h"
);

echo '<br>';
print_r($list);


$list[] = 'i';
echo '<br>';
print_r($list);

$list['vinte']='j';
echo '<br>';
print_r($list);


//converte para zero
$list[false]='tentei indexar com false!';
echo '<br>';
print_r($list);

$list[true]='tentei indexar com true!';
echo '<br>';
print_r($list);




