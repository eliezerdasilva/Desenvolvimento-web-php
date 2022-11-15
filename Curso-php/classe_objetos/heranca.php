<div class="titulo"> Heranca </div>

<?php

class Pessoa{
    public $Nome;
    public $Idade;
    
    function __construct($novoNome,$idade){
        $this->nome = $novoNome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }
    function __destruct(){
        echo 'Pessoa diz: Tchau';
    }
    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    } 
}

class Usuario extends Pessoa{
    public $login;

    function __construct($nome,$idade,$login){
        //$this-> nome= $nome;
        //$this-> idade= $idade;
        parent::__construct($nome,$idade);
        $this-> login = $login;
        echo 'Usuario criado <br>';
    }
    function __destruct(){
        echo'Usuario diz: tchau <br>';
        parent::__destruct();
    }
    public function apresentar(){
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$usuario = new Usuario('Gustavo Mendoça',21,'gust_mend');
$usuario-> apresentar();

uset($usuario);