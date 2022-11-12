<div class="titulo">Operadores relacionais </div>

<?php
var_dump(1 == 1);
var_dump(1 > 1 );
var_dump(1 >+ 1 );
var_dump(1 != 1 );
var_dump(1 <> 1 );
var_dump(111 == '111');
var_dump(111 === '111');
var_dump(111 != '111');
var_dump(111 !== '111');


echo "<p class='divisao'> Relacionais no If/else</p><hr>";
$idade = 25;
if($idade<18){
    echo "Menor de idade = $idade anos. <br>";
    echo"vf";
    
}elseif($idade <=65){
 echo "adulto= $idade anos.<br>";
}else{
    echo "Terceira idade= $idade anos.!";
}
echo '<p class= "divisao"> Spaceship"</p><hr>';
var_dump(5 <=> 3);//1
var_dump(5 <=> 5);//0
var_dump(5 <=> 6);//-1

echo '<p class="divisao"> Valores pode ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");



