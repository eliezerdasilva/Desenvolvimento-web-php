<div class="titulo">Desafio modulo</div>
<?php

require_once('usuario.php');

ini_set('display_erros',1);

$usuario = new Usuario('Gustavo Mendoça',21,'gust_mend');
$usuario-> apresentar();

user($usuario);