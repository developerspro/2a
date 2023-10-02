<?php 
require_once "Pessoa.php";
class Cliente  extends Pessoa{ 
    public $pontos; 

    public  function __construct($nome,$pontos)
    {   $this->pontos=100;
        $this->nome = $nome;
    }

public function exibirDados(){ 
   parent::exibirDados();
    echo "Pontos:".$this->pontos;
}

}