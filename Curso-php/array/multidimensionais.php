<div class="titulo">Multidimensionais</div>

<?php
$dados  = [
    ["nome"=>"Roberta",
    "idade" =>26,
    "naturalidade => Sao Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ],

];

echo '<br>';
echo '<br>';
print_r($dados[0]["nome"]);
echo '<br>';

echo '<br>'.$dados[0]['idade'];
echo '<br>'.$dados[1]['idade'];
$dados[]=[
    "nome"=> "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do mexico"
    ];
echo '<br>';
echo '<br>';
print_r($dados[2]);
echo '<br>';

echo '<br>';
echo '<br>';
print_r($dados);
echo '<br>';
echo '<br>'.$dados[2]['idade'];

$dados[2]["Vizinho"]="Chaves";
echo '<br>';
echo '<br>';
print_r($dados[2]);

//deletar o indice
unset($dados[1]);
echo '<br>';
echo '<br>';
print_r($dados);
echo '<br>';
echo '<br>';
print_r($dados[2]);
var_dump($dados[1000]);

