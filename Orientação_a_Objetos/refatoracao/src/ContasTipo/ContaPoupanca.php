<?php 

declare(strict_types=1);

namespace App\ContasTipo;
use App\contaBancaria;
class ContaPoupanca extends contaBancaria
{
    const RENDIMENTO = 0.05;
    const TIPO_CONTEA = 'Conta Poupança';

    public function __construct(
        string $banco ,
        string $nomeTitular ,
        string $numeroAgencia ,
        string $numeroConta ,
        float $saldo
    ) {
        parent::__construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo);
    }
    
    public function obterSaldo(): string
    {
        $rendimentoCalculado = $this->saldo * self::RENDIMENTO;
        return "O saldo da " . self::TIPO_CONTEA . " é R$ " . ($this->saldo + $rendimentoCalculado) . " (já acrescido do rendimento de R$ " . number_format($rendimentoCalculado, 2) . ").";
    }

}