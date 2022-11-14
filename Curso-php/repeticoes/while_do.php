<div class="titulo">While / Do_while</div>

<?php

const VALOR_LIMITE = 5;
$contador = 0;

while($contador <VALOR_LIMITE){
    echo "While $contador <br>";
    $contador++;
}
echo  '<hr>';
$contador = 0;

while($contador <VALOR_LIMITE){
    echo "While $contador <br>";
    $contador++;
}
echo  '<hr>';
$contador = 0;
do{
    echo "do-while $contador <br>";
    $contador++;
}while($contador <VALOR_LIMITE);

echo  '<hr>';
$contador = 0;

while(TRUE){
    echo "While(TRUE) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE)break;
}

 