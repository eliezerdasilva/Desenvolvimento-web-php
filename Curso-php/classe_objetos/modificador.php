<div class="titulo"> Modificador Final</div>

<?php

abstract class Abstrata{
    abstract public function metodo1();

    public final function metodo2(){
      echo 'Nao vou mudar!<br>';  
    }
}
class Classe extends Abstrata{
    public function metodo1(){
        echo 'Execuntando metodo 1<br>';
    }
    //public function metodo2(){
    //    echo 'Execuntando metodo 2<br>';
    //}
        
}
$classe = new Classe();
$classe-> metodo1();
$classe->metodo2();

final class Unica{
    public $att = 'Valor Unico';

}
 $unica= new Unica();
 echo $unica->att;

//class Duplicata extends Unica{
//   public $att2;
//}



