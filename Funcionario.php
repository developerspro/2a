<?php

require_once "Pessoa.php";
class Funcionario extends Pessoa { 

    public $ctps;
    private $salario;
    public $cargo;


    public function exibirDados()
    {
        parent::exibirDados();
        echo "CTPS:".$this->ctps."<br>";
        echo "Salario:".$this->salario."<br>";
        echo "Cargo:".$this->cargo."<br>";
    }



}