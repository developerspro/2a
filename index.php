<?php
require_once "lib.php";

$cliente = new Cliente("Tio Patinhas",100);
$cliente->exibirDados();

$vendedor = new Funcionario();
$vendedor->exibirDados();

$gerente = new Gerente();
$gerente->exibirDados();
