<div class="titulo">Erros personalizados</div>

<?php
class FaixaEtariaException  extends Exception{

    public function __costruct($message, $code = 0, $previous = null){
    parent::__costruct($message,$code,$previous);
    }
}
function calcularTempoAposentadoria($idade){
    if($idade<18){
        throw new FaixaEtariaException('Ainda esta muito longe ');

    }if($idade>70){
        throw new FaixaEtariaException('Ja deveria estar aposentado');
        
    }
    return 70 - $idade;
}
$idadeAvaliadas = [15,30,60,80];
foreach ($idadeAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes<br>";
    }catch(FaixaEtariaException $e){
        echo " Nao foi possivel calcular para $idade anos.<br>";
        echo " Motivo: {$e->getMessage()}<br>";
    }

}
echo "<br>Fim";