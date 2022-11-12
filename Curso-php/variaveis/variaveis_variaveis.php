<div class= "titulo">Variaveis variaveis </div>

<?php

$a = 'valorA';
$$a = 'valorAA';

$valorA = 'valorAA';

echo "$a {$$a} ${$a} $valorA";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!';
echo "$epa {$$epa} {$$$epa}";
