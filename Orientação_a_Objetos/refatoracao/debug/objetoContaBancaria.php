<?php

// Inclui o arquivo de autoload do Composer, que carrega automaticamente as classes necessárias.
require_once __DIR__ . '/../vendor/autoload.php';

// Importa a classe contaBancaria do namespace App para que possa ser usada sem o caminho completo.
use App\contaBancaria;

// Cria uma nova instância (objeto) da classe contaBancaria, passando os dados da conta para o construtor.
$conta = new contaBancaria(
    'Banco do Brasil', // Argumento para o parâmetro $banco
    'João da Silva',   // Argumento para o parâmetro $nomeTitular
    '1234-5',          // Argumento para o parâmetro $numeroAgencia
    '67890-1',         // Argumento para o parâmetro $numeroConta
    1000.00            // Argumento para o parâmetro $saldo
);

// Chama o método exibirDadosDaConta() no objeto $conta e usa var_dump() para exibir informações detalhadas (tipo e valor) do array retornado.


echo $conta->obterSaldo();
echo "<br>";


echo $conta->depositar(500);
echo "<br>";
    

echo $conta->sacar(200);
echo "<br>";

echo $conta->obterSaldo();
echo "<br>";
