<div class= "titulo">Conversões PHP </div>
<?php

echo is_int(PHP_INT_MAX);

// int para float
echo '<br>';
var_dump(PHP_INT_MAX +1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float)3);

//float para int 
echo '<p>Float para int </p>';
//arredonda para 2 
var_dump((int)2.8);
echo '<br>';
//arredonta conforme o primeiro numeiro
echo var_dump(intval(2.5));
echo '<br>';
//arredonda para cima se for perto 
var_dump(round(2.8));
// da para converter para int
echo '<p> Strings</p>';
var_dump(3+"5");
echo '<br>'; 
var_dump("3"+2);
echo '<br>';
var_dump("3". 2);
echo '<br>', is_string("3". 2);
echo '<br>';
//nao aparece
//var_dump(1 +"cinco");
echo '<br>';
var_dump(1 +" 5 cinco");
echo '<br>';
// so considera ate o primeiro numero na string 
var_dump(1 + "2+5");
//em float
var_dump(1 + "3.2");
echo '<br>';
var_dump(1+"-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((floar) "10.5");





 