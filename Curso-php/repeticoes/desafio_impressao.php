<div class="tituto">Defafio Impressao</div>

<!--
Enuncuiado:
 -Imprima apenas os valores do array qeu contem indice par
 -Resolva com for e foreach
 -VAlores esperados :AAA,CCC,EEE
-->
<?php

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i = 0; $i < count($array); $i++){
    if($i % 2 === 1)continue;
    echo "{$array[$i]} <br>";
}
echo "<br>";

foreach($array as $chave => $valor){
    if($chave % 2 !==0)continue;
    echo "$valor <br>";
}