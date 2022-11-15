<div class="titulo"> Construtor e Destrutor</div>

<?php

class Pessoa{
    public $nome;
    public $idade;
  
    function __construct($novoNome, $idade = 15){
        echo 'Construtor invocado!<br>';
        $this->nome = $novoNome;
        $this->idade = $idade;    
    }

    function __destruct(){
        echo 'E morreu!';
    }
    public function apresentar(){
        echo "{$this->nome},{$this->idade} anos<br>";
    }


}

$pessoaA = new Pessoa('Rebeca Maria ',40);
$pessoaB = new Pessoa('Joao pedro ',13);

$pessoaA->apresentar();
unset($pessoaA);
echo '<br>';

$pessoaB->apresentar();
$pessoaB = NULL;



//$pessoa = new Pessoa();'e um problema


