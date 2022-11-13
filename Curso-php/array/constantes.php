<div class="titulo">Array Constante</div>

<?php
const FRUTAS = ['laranjas','abacaxi'];
// erro FRUTAS[0] = 'banana';
echo FRUTAS[0];
echo '<br>'
const CARROS = ["Fiat" =>" Uno",
                "Ford"=> "Fiesta"
]
echo '<br>'.CARROS["Fiat"];
echo '<br>';
define('CIDADES',array('Belo Horizonte','Recife'));
echo '<br>'.CIDADES[1];

