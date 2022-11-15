<div class = "titulo">Visibilidade</div>

 <?php
 class A{
    public $publico = ' Publico';
    protected $protegido = ' Protegido';
    private $privado = ' Private';

    public function mostrarA(){
      
        echo "<br>";
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    
    }
    protected function vaiPorHeranca(){
        echo 'Srei transmitido  por Herança!';
    }
    private function naoMostrar(){
        echo 'Não vou imprimir!';
    }

 }

 $a = new A();
 $a->mostrarA();

 //$a->naoMostrar();

 echo 'Fim <br>';

 class B extends A{
    
    public function mostrarB(){
        echo "Class B) Publico ={$this->publico}<br>";
        echo "Class B) Protegido ={$this->protegido}<br>";
        echo "Class B) Privado ={$this->privado}<br>";
        parent::vaiPorHeranca();   

    } 

 }
 
 echo '<br>';
 $b = new B();
 $b->mostrarB();
 $b->mostrarA();
