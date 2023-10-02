<?php

class Pessoa  { 
    public $cpf;
    public $nome;
    public $telefone;
    public $email;
    public $cep;


    public function exibirDados() { 
    echo "<BR>CPF:".$this->cpf."<br>";
    echo "Nome:".$this->nome."<br>";
    echo "Telefone:".$this->telefone."<br>";
    echo "Email:".$this->email."<br>";
    echo "CEP:".$this->cep."<br>";
  
    }
}