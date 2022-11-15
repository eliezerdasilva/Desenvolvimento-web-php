<div class="titulo"> Metodos Magicos</div>

<?php

class Pessoa{

    public $nome;
    public $idade;

    function __construct($nome,$idade){
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'E morreu';
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";    
    }
    
    public function apresetar(){
        echo $this."<br>";
    }
    public function __get($atrib){
        echo "Lendo atributo não declarado: {$atrib}<br>";
 
    }
    public function __set($atrib,$valor){
        echo "Alterando atributo não declarado: {$atrib} / {$valor}";
    }
    public function __call($metodo, $params){
        echo "<br>Tentando executar metodo '${metodo}'";
        echo "<br> com os paramentros:";
        print_r($params);
        echo '<br>';
    }
}
$pessoa = new Pessoa('Ricardo',40);
$pessoa->apresetar();//Chamando o __toString
echo $pessoa,'<br>';
$pessoa->nome ='Reinaldo';
$pessoa->idade = 50;
$pessoa->apresetar();

echo '<br>';
 $pessoa->nomeCompleto = 'Sem medo de ser feliz';//chamando __set
 echo '<br>';
 $pessoa->nomeCompleto;//chamando __get
 echo $pessoa->nome;
 //acesa o atributo diretamente sem __get
 $pessoa->exec();
 
 echo '<br>';

 // __CALL pq o metodo nao existe no objeto
 $pessoa->exec(1,'teste',true,[1,2,3]);// __call insero