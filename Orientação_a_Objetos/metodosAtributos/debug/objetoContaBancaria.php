<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\contaBancaria;

$conta = new contaBancaria();

$conta->setBanco('Banco do Brasil');
$conta->setNomeTitular('João da Silva');
$conta->setNumeroAgencia('1234-5');
$conta->setNumeroConta('3333-33');
$conta->setSaldo(1000.00);

var_dump($conta->exibirDadosDaConta());