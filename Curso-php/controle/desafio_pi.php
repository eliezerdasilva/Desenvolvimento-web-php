<div class="ti">Desafio PI</div>

<?php

echo pi();
$pi = 3.14;

if ($pi == pi()) {
    echo "<br> Iguais!";
}else{
    echo"<br> Diferentes!";
}

//resposta 
//echo '<br>'.($pi -pi());

if($pi - pi() <= 0.01){
    echo "<br>Praticamente iguais!";
} else{
    echo '<br> valor Errado';
}