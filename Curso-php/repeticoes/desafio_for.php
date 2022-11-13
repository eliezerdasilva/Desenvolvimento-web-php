<div class="titulo">Desafio for</div>

<!--
#
##
###
####
#####
-->
<?php

$impressao = '';
for($i = 0; $i <= 5; $i++){
    $impressao.= '#';
    echo "$impressao <br>";

}

echo '<hr>';

for($IMpressao2 = '#'; 
    $IMpressao2 !== '#######';
    $IMpressao2 .= '#'){
        echo "$IMpressao2 <br>";
    }

