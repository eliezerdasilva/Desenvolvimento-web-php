<div class="titulo">Operadores lógicos</div>

<?php
echo "<p class='divisao'> Negação Lógica</p>";
echo "<p>V ou F</p>";
var_dump(true);
echo '<br>';
var_dump(!true);//not

echo "<hr><p class='divisao'> Tabela verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && false);
var_dump(true && 3>2&& 7<=7);

var_dump(true and true);
var_dump(true and false);
var_dump(false and false);
var_dump(true and 3>2 and 7<=7);


echo "<p class='divisao'> Tabela verdade 'OR' (OU)</p><hr>";

var_dump(true ||  true);//vdd
var_dump(true || false);//vdd
var_dump(false || false);//false
var_dump(true || 3>2 || 7<=7);

var_dump(true or  true);//vdd
var_dump(true or false);//vdd
var_dump(false or false);//false
var_dump(true or 3>2 or 7<=7);

echo "<p class='divisao'> Tabela verdade 'XOR' (OU exclusivo)</p><hr>";

var_dump(true xor true); //false
var_dump(true xor false); //vdd
var_dump(false xor true); //vdd
var_dump(false xor false); //false

var_dump(true != true); //false
var_dump(true != false); //vdd
var_dump(false != true); //vdd
var_dump(false != false); //false


echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 62;
$sexo = 'F';
$pagouPrevidencia = true;
$criterioHomem =($idade >= 65 && $sexo === 'M');
$criterioMulher =($idade >= 60 && $sexo === 'F');
$atinguiCriterio = $criterioHome || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atinguiCriterio;
echo "Pode se aponsetar -> $podeSeAposentar.<br>";

//$podeSeAposentar = $pagouPrevidencia && (($idade >= 60 $sexo ==='F')($idade >=65 && $sexo ==='M'));

if($idade>= 60 && $sexo ==='F'){
    echo "Pode se aposentar -> $sexo";
    
}elseif($idade>= 65 && $sexo ==='M'){
    echo "Pode se aponsetar -> $sexo";
}else{
    echo "Vai ter que trabalhar mais um pouco...";
}


