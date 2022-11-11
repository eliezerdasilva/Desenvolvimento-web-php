<div class= "titulo">Tipo String</div>
<?php
echo ' Eu sou uma String';
echo ' <br>';
var_dump("Eu tambem");
echo ' <br>';

// concatenacao

echo "Nos tambem". ' Somos ';
echo '<br>', " tambem aceito", " virgulas";

//echo "' Teste'", '" Teste"', '\'teste\''." "\"Teste\" "."\\"; 

print("<br> Tambem existe a funcao print");

// Algumas funcoes 
// deixa tudo maiuscolo 
echo '<br>'.strtoupper('maxinizado');
//minuscolo
echo '<br>'.strtolower("MINIMIZANDO");
//deixa a primeira letra da frase maiuscula
echo '<br>'.ucfirst('so a primeira letra');
// deixa toda palavra com letra maiuscula
echo '<br>'.ucwords('todas as palavras');
// calcula o tamanho caractere contando com acento
echo '<br>'.strlen('Quantas letras');
//Conta a quantidade de letras e espacos
echo '<br>',mb_strlen('Eu também', "utf-8");
//selecionamos parte
echo '<br>'.substr('Só uma parte mesmo',7,13);
//substituicao de palavras
echo '<br>'.str_replace('isso', 'aquilo','Trocar isso');