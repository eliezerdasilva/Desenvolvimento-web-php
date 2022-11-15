<div class="titulo">Argumento padrao</div>

<?php
function saudacao($nome= 'Senhor(a)',$sobrenome = 'Cliente'){
    echo "Bem vindo, $nome $sobrenome! <br>";

}
saudacao();
saudacao(null);
saudacao(null,null);
saudacao('MEstre','Supremo');

function anotarPedido($comida,$bebida = 'Agua'){
    echo "para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}
anotarPedido('Hamburguer');
anotarPedido('Pizza','Refrigerante');

function anotarPedido2( $bebida = 'agua',$comida){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}
//anotarPedido('Hamburguer');nao funciona    
anotarPedido('Refrigerante', 'Pizza');
