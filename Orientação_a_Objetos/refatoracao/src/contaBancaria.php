<?php

// Define o namespace da classe, ajudando a organizar o código e evitar conflitos de nomes.
namespace App;

// Declaração da classe contaBancaria.
class contaBancaria
{
    // Declara uma propriedade privada para armazenar o nome do banco. Só pode ser acessada de dentro da classe.
    private string $banco ;
    // Declara uma propriedade privada para armazenar o nome do titular da conta.
    private string $nomeTitular ;
    // Declara uma propriedade privada para armazenar o número da agência.
    private string $numeroAgencia ;
    // Declara uma propriedade privada para armazenar o número da conta.
    private string $numeroConta ;
    // Declara uma propriedade privada para armazenar o saldo da conta, inicializada com o valor 0.
    private float $saldo = 0;

    // Este é o método construtor da classe, executado ao criar um novo objeto.
    public function __construct(
        string $banco ,
        string $nomeTitular ,
        string $numeroAgencia ,
        string $numeroConta ,
        float $saldo
    ) {
        // Atribui o valor do parâmetro $banco à propriedade $banco do objeto.
        $this->banco = $banco;
        // Atribui o valor do parâmetro $nomeTitular à propriedade $nomeTitular do objeto.
        $this->nomeTitular = $nomeTitular;
        // Atribui o valor do parâmetro $numeroAgencia à propriedade $numeroAgencia do objeto.
        $this->numeroAgencia = $numeroAgencia;
        // Atribui o valor do parâmetro $numeroConta à propriedade $numeroConta do objeto.
        $this->numeroConta = $numeroConta;
        // Atribui o valor do parâmetro $saldo à propriedade $saldo do objeto.
        $this->saldo = $saldo;
    }

    public function depositar(float $valor): string
{
    $this->saldo += $valor;
    return "Depósito de R$ {$valor} realizado com sucesso. Novo saldo: R$ {$this->saldo}.";
       
}

public function sacar(float $valor): string
{
    $this->saldo -= $valor;
    return "Saque de R$ {$valor} realizado com sucesso. Novo saldo: R$ {$this->saldo}.";
}

public function obterSaldo(): float
{
    return $this->saldo;
}

    // Método público que retorna um array com todos os dados da conta.
    public function exibirDadosDaConta(): array
    {
        // Retorna um array associativo com os valores das propriedades do objeto.
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];
    }

    // Método "getter" para obter (retornar) o valor da propriedade $banco.
    public function getBanco(): string
    {
        // Retorna o valor atual da propriedade $banco.
        return $this->banco;
    }

    // Método "getter" para obter o nome do titular.
    public function getNomeTitular(): string
    {
        // Retorna o valor da propriedade $nomeTitular.
        return $this->nomeTitular;
    }

    // Método "getter" para obter o número da agência.
    public function getNumeroAgencia(): string
    {
        // Retorna o valor da propriedade $numeroAgencia.
        return $this->numeroAgencia;
    }

    // Método "getter" para obter o número da conta.
    public function getNumeroConta(): string
    {
        // Retorna o valor da propriedade $numeroConta.
        return $this->numeroConta;
    }

    // Método "getter" para obter o saldo.
    public function getSaldo(): float
    {
        // Retorna o valor da propriedade $saldo.
        return $this->saldo;
    }

    // Método "setter" para definir o saldo.
    public function setSaldo(float $saldo): void
    {
        // Atualiza o valor da propriedade $saldo.
        $this->saldo = $saldo;
    }


}