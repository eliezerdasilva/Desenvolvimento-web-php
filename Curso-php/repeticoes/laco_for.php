<div class="titulo">Laço for</div>

<?php

for($cont=1 ; $cont <=5; $cont++){
    echo "$cont <br>";
}
ECHO "<HR>";
for(;$cont <= 10; $cont++){
    echo "$cont <br>";
}
echo "<hr>";
for(;$cont <=15;){
    echo "$cont <br>";
    $cont++;
}

$array = [
    'Domingo ',
    'Segunda ',
    'Terca ',
    'Quarta ',
    'Quinta ',
    'Sexta ',
    'Sabado '
];

echo "<hr>";
print_r($array);
echo '<br>';
echo "<hr>";
for($i = 0; $i <count($array);$i++){
    echo "{$array[$i]} <br>";
    
}
$matrix = [
    [' a ',' e ',' i ',' o ' ,' u '],
    [' b ',' c ',' d ']
];
echo "<hr>";
for($i = 0 ; $i <count($matrix);$i++){

    for($j = 0; $j <count($matrix[$i]); $j++){
        ECHO "{$matrix[$i][$j]}";
    }
    ECHO "<br>";
}