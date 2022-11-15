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