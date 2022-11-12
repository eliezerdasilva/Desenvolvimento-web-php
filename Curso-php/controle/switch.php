<div class="titulo">Switch</div>

<?php
$categoria ='lUxo';
strtolower($categoria);
$preco = 0;
$carro = '';

if($categoria === 'luxo'){
    $carro = 'Mercedes';
    $preco = 250000;
    
    
}elseif($categoria === 'SUV'){
    $carro = 'Renegade';
    $preco = 80000;
}elseif($categoria === 'Sedan'){
    $carro = 'Etios';
    $preco = 55000;
}else{
    $carro = 'Mobi';
    $preco = 33000;
}
$precoFormatado = number_format($preco,2 ,',','.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>"; 

$categoria = "suv basico";
switch(strtolower($categoria)){
    case 'Luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
   case 'SUV':
    case 'suv basico':
        $carro = 'Renegade';
        $preco = 88000;
        break;
    case 'Sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'mobi';
        $preco = 33000;        
        break;
}
$precoFormatado = number_format($preco,2,',','.');
echo "<p>Carro: $carro<br>Preco: $precoFormatado </p>";



