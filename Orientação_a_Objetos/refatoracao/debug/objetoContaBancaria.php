<?php

// Inclui o arquivo de autoload do Composer, que carrega automaticamente as classes necessárias.
require_once __DIR__ . '/../vendor/autoload.php';

// Importa a classe ContaCorrente do seu namespace correto: App\ContasTipo.
use App\ContasTipo\ContaCorrente;

// Cria uma nova instância (objeto) da classe ContaCorrente.
$conta = new ContaCorrente(
    'Banco do Brasil', // Argumento para o parâmetro $banco
    'João da Silva',   // Argumento para o parâmetro $nomeTitular
    '1234-5',          // Argumento para o parâmetro $numeroAgencia
    '67890-1',         // Argumento para o parâmetro $numeroConta
    1000.00            // Argumento para o parâmetro $saldo
);

// Chama o método obterSaldo() que foi implementado em ContaCorrente.
// Note que ele já vai descontar a taxa de R$ 25.
echo $conta->obterSaldo();
echo "<br>";

// Chama o método depositar() que foi herdado de contaBancaria.
echo $conta->depositar(500);
echo "<br>";
    
// Chama o método sacar() que foi herdado de contaBancaria.
echo $conta->sacar(200);
echo "<br>";

// Chama obterSaldo() novamente para ver o valor atualizado.
echo $conta->obterSaldo();
echo "<br>";
