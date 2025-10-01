<?php

namespace App;

class contaBancaria
{
    private string $banco ;
    private string $nomeTitular = 'Weverton Rocha';
    private string $numeroAgencia = '2222-2';
    private string $numeroConta = '3333-33';
    private float $saldo = 0;

    public function exibirDadosDaConta(): array
    {
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];
    }

    public function setBanco(string $banco): void
    {
        $this->banco = $banco;
    }

    public function getBanco(): string
    {
        return $this->banco;
    }


}