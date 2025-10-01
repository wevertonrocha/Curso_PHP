<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\contaBancaria;

$conta = new contaBancaria();
$conta->setBanco('Banco do Brasil');
var_dump($conta->getBanco());