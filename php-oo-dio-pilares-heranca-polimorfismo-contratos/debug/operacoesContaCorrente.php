<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContasTipo\ContaCorrente;
use App\Contratos\DadosContaBancariaInterface;
use App\Contratos\OperacoesContaBancariaInterface;

function executarOperacoes(OperacoesContaBancariaInterface $conta): void
{
    echo $conta->obterSaldo();
    echo "\n";

    echo $conta->depositar(50);
    echo "\n";
    
    echo $conta->obterSaldo();
    echo "\n";
    
    echo $conta->sacar(30);
    echo "\n";
    
    echo $conta->obterSaldo();
    echo "\n";
}

function exibirDados(DadosContaBancariaInterface $conta): void
{    
    echo "Banco: " . $conta->getBanco();
    echo "\n";
    
    echo "Ag./Conta: " . $conta->getNumeroAgencia() . "/" . $conta->getNumeroConta();
    echo "\n";

    echo "Titular: " . $conta->getNomeTitular();
    echo "\n";

    echo "--------------------------------------------";
    echo "\n";
}

$conta = new ContaCorrente(
    'Banco do Brasil', // banco
    'Gustavo Fraga', // nomeTitular
    '8244', // numeroAgencia
    '57354-10', // numeroConta
    0 // saldo
);

exibirDados($conta);
executarOperacoes($conta);
