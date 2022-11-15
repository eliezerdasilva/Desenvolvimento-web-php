<div class = "titulo">Membros Estáticos</div>

<?php
class A{
    public $naoStatic = 'Variavel de instância';
    public static $static = 'Variável classe (estática)';

    public function mostrarA(){
        echo "Não estática = {$this->naoStatic}<br>";
        //Erro, metodo certo na linha 16
        //echo "Estática = {$this->static}<br>";
        // Trentativa 1
        // echo "Estátic aestática = {$this->static}<br>";
        // Trentativa 2
        //echo "Estática = {self::$static}<br>";
        echo "Estática = ". self::$static."<br>";
    }
    public static function mostrarStaticA(){
        //forma errada
        //echo "Não estatica = {$this->naoStatic}<br>";
        //echo " estatica = {$static}<br>";
        //forma certa
        echo " Estática = ".self::$static."<br>";
    }
}
$objetoA = new A();
$objetoA->mostrarA();
//da mais nao é a indicada
 $objetoA-> mostrarStaticA();

echo '<br>';
 echo A::$static,'<br>';//forma ideial, acessar pela classe
A::mostrarStaticA();

A::$static= 'Amen acho que entendi';
echo A::$static,'<br>';