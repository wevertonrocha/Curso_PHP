<?php 

declare(strict_types=1);

namespace App\ContasTipo;

use App\contaBancaria;

class ContaCorrente extends ContaBancaria
{
    const TAXA = 25;
    const TIPO_CONTA = 'Conta Corrente';

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
        return "O saldo da " . self::TIPO_CONTA . " é R$ " . ($this->saldo - self::TAXA) . " (já descontada a taxa de R$ " . self::TAXA . ").";
    }

}
