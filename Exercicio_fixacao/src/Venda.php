<?php 

namespace App;

class Venda { 
    private string $data;
    private string $produto;
    private int $quantidade;
    private float $valorTotal;

    public function __construct(string $data, string $produto, int $quantidade, float $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function exibirDados(): string
    {
        return "Data: {$this->data}\nProduto: {$this->produto} \nQuantidade: {$this->quantidade} \nValor Total: R$ {$this->valorTotal}\n ";
    }


}