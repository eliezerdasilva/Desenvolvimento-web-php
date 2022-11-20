<div class="titulo">Datas #02</div>

<?php
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

// print_r($agora);
// echo '<br>';
//mostra a data atual
echo $agora->format($formatoData1) . '<br>';
//nao sei pq ta tando esse risco no meio
//era para essa linha ler em portugues
//outra forma de mostrar
echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';
$dataFixa = new DateTime('2005-01-25 15:30:50');
//mostra uma data definida ACIMA 
echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';
//MOSTRA DAQUI DUAS SEMANAS DE HJ 
$amanha = new DateTime('+2 week');
echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';
//MOSTRA UM DIAS APOS DAS DUAS SEMANAS
$amanha->modify('+1 day');
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';
// MOSTRA UMA A DATA DESEJADO SO QUE O HORARIO PERMANESE 
$amanha->setDate(2008, 6, 20);
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-26');
$outraData = new DateTime('2030-11-26');
echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo $outraData == $dataFutura ? 'Igual' : 'Diferente';

echo '<br>';
$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $tz);
echo $agora->format('d/M/Y H:i:s');