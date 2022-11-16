<div class="titulo">Try/Catch</div>

<?php
// echo 7 / 0;
// echo intdiv(7, 0);

try {
    echo intdiv(7, 0);
} catch(Error $e) {
    echo 'Teve um erro aqui<br>';
}

try {
    throw new Exception('Um erro muito estranho');
    echo intdiv(7, 0);
}catch(DivisionByZeroError $e){
    echo 'Divisao por zero<br>';
}catch(throwable $e ){
    echo 'Erro encotrado: ' . $e->getMessage().'<br>';
} finally{
    echo 'Sempre executado!<br>';
}

