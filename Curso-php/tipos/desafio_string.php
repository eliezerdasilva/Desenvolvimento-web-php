<div class= "titulo">Desafio String</div>

<?php
//Enunciado
//Avaliando os métodos da documentação string,
// qual o método que a posicao do texto 'abc'
// na string 'AbcaBcabc' retorn 1?


//mostra em que posicao começa o desejado
echo strpos('AbcaBcabc','abc').'<br>';
//acha onde esta oque desejado 'abc', indeferente 
//se for maiusculo ou minisculo 
echo stripos('!AbcaBcabc','abc').'<br>';
//mostra a posicao e o strtolower deixa todas letras minusculas 
 
echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));


