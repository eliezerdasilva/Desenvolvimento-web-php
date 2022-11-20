<div class="titulo">Datas #01</div>

<?php  
echo time().'<br>';
//mostra data, na apostila do php tem todos os comando
echo date('D, d \d\e M \d\e Y H:i A').'<br>';

echo strftime('%A, %d de %B de %Y', time()).'<br>';
//era para converte para portugues
setlocale(LC_TIME,'pt_BR','pt_BR.utf-8');
echo strftime('%A, %d de %B de %Y', time()).'<br>';

//qual é o dia seguinte
$amanha = time() +(24*60*60);
echo strftime('%A, %d de %B de %Y',$amanha).'<br>';

//inseri uma semana 
$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y',$proximaSemana);

// constroi uma data
$dataFixa = mktime(12,30,50,1,25,1975);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);

