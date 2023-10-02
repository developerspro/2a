<?php 
require_once "Funcionario.php";
class Gerente extends Funcionario{ 

    public $setor;

    public function exibirDados()
    {
        parent::exibirDados();
        echo "Setor:".$this->setor."<br>";
    }
}