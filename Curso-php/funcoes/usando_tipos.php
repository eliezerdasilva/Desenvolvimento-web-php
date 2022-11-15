<div class="titulo">Usando Tipos</div>

<?php
function soma1($a,$b){
    echo "<span>Somando $a + $b =</span>";
    return $a + $b;
}   
echo soma1(1,2).'<br>';
echo soma1(1.7,2.5).'<br>';
echo soma1(1,'4dois').'<br>';

echo '<br>';
function soma2(int $a, int $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo soma2(1,2).'<br>';
echo soma2(1.7,2.5).'<br>';
echo soma2(1,'4').'<br>';
echo '<br>';
function soma3(float $a, float $b): float{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo '<br>';
echo soma2(1,2).'<br>';
echo soma2(1.7,2.5).'<br>';
echo soma2(1,'4').'<br>';